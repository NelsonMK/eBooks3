<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends Admin_Controller {

	public function __construct() {
        parent::__construct();

        $this->not_logged_in();

        $this->load->model('model_subjects');
    }

	public function index()
	{

		$this->render_template('admin/classes');

	}

	public function fetchClasses()
	{
        
		$response = array('data' => array());

		$data = $this->db->order_by('id', 'desc')->get('classes')->result();

		$count = 1;

		foreach ($data as $key => $value) {
			$subject_ids = json_decode($value->subjects);

            $subject_name = array();
            foreach ($subject_ids as $k => $v) {
                $subject_data = $this->model_subjects->getSubjectsData($v);
                $subject_name[] = $subject_data['subject_name'];
            }

            $subject_name = implode(', ', $subject_name);

			// button
            $buttons = '';

    		$buttons .= '<a class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 " href="'.base_url('admin/classes/update/'.encrypt($value->id)).'"><i class="ti ti-pencil"></i></a>';
   
    		$buttons .= '<a class="btn btn-icon btn-outline-danger btn-round" onclick="deleteFunc('.encrypt($value->id).')" data-toggle="modal" data-target="#deleteModal"><i class="ti ti-close"></i></a>';

			$response['data'][$key] = array(
				$count,
				$value->class_name,
				$value->class_slug,
				$subject_name,
				$buttons
			);
			$count ++;
		} // /foreach

		echo json_encode($response);
	}

	public function fetchClass() {

		$id = $this->input->post('class_id');

		$result = $this->db->where('id', decrypt($id))->get('classes')->row();

		echo json_encode($result);
	}

	public function editClass() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('add_title', 'Title', "required");

        if ($this->form_validation->run() == true) {

            $save_data = array(
                'class_name' => $this->input->post('add_title'),
                'class_slug' => slugify($this->input->post('add_title')),
                'subjects' => json_encode($this->input->post('subjects'))
            );

            $this->db->where('id', decrypt($this->input->post('class_id')));
            if($this->db->update('classes', $save_data)) {
        		$response['error'] = FALSE;
        		$response['message'] = 'Class updated successfully';
            }
            else {
        		$response['error'] = TRUE;
        		$response['message'] = 'Unable to update class!';
            }

        } else {
        	redirect('admin/classes', 'refresh');
        }

        echo json_encode($response);

	}

	public function create() {

		$this->load->library("form_validation");

		$this->form_validation->set_rules('add_title', 'Class name', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
            $save_data = array(
                'class_name' => $this->input->post('add_title'),
                'class_slug' => slugify($this->input->post('add_title')),
                'subjects' => serialize($this->input->post('subjects'))
            );

            if ($this->db->insert('classes', $save_data)) {
                $response['error'] = FALSE;
                $response['message'] = 'Class added successfully';
            } else {
                $response['error'] = TRUE;
                $response['message'] = 'Unable to save class';
            }
		} else {
			$data['subjects'] = $this->db->get('subjects')->result();

			$this->render_template('admin/classes/create', $data);	
		}
	}

	public function update($class_id)
	{      

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('add_title', 'Title', "required");


        if ($this->form_validation->run() == TRUE) {

            $save_data = array(
                'class_name' => $this->input->post('add_title'),
                'class_slug' => slugify($this->input->post('add_title')),
                'subjects' => json_encode($this->input->post('subjects'))
            );

            $this->db->where('id', decrypt($class_id));
            if($this->db->update('classes', $save_data)) {
        		$response['error'] = FALSE;
        		$response['message'] = 'Subject updated successfully';
            }
            else {
        		$response['error'] = TRUE;
        		$response['message'] = 'Unable to update subject!';
            }
        }
        else {
                    
            $data['subjects'] = $this->db->get('subjects')->result();           
            $data['classes_data'] = $this->db->where('id', decrypt($class_id))->get('classes')->row();

            $this->render_template('admin/classes/edit', $data); 
        }   

	}

	public function addClass() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('add_title', 'Title', "required");

        if ($this->form_validation->run() == true) {

            $save_data = array(
                'class_name' => $this->input->post('add_title'),
                'class_slug' => slugify($this->input->post('add_title')),
                'subjects' => json_encode($this->input->post('subjects'))
            );

            if ($this->db->insert('classes', $save_data)) {
                $response['error'] = FALSE;
                $response['message'] = 'Class added successfully';
            } else {
                $response['error'] = TRUE;
                $response['message'] = 'Unable to save class';
            }
        	
        } else {
        	redirect('admin/classes', 'refresh');
        }

        echo json_encode($response);
	}

	public function deleteClass() {

		$response = array();
		
		$this->db->where('id', decrypt($this->input->post('class_id')));

		if ($this->db->delete('classes')) {
			$response['error'] = FALSE;
			$response['message'] = 'Class removed successfully';
		} else {
			$response['error'] = TRUE;
			$response['message'] = 'Unable to delete class';
		}

		echo json_encode($response);
	}

}
