<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends Admin_Controller {

	public function __construct() {
        parent::__construct();

        $this->not_logged_in();
    }

	public function index()
	{

		$this->render_template('admin/subjects');

	}

	/*
    * It Fetches the subjects data from the subjects table 
    * this function is called from the datatable ajax function
    */
	public function fetchSubjects()
	{
        
		$response = array('data' => array());

		$data = $this->db->order_by('id', 'desc')->get('subjects')->result();

		$count = 1;

		foreach ($data as $key => $value) {

			// button
            $buttons = '';

    		$buttons .= '<a class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 " onclick="editFunc('.$value->id.')" data-toggle="modal" data-target="#editModal"><i class="ti ti-pencil"></i></a>';
   
    		$buttons .= '<a class="btn btn-icon btn-outline-danger btn-round" onclick="deleteFunc('.$value->id.')" data-toggle="modal" data-target="#deleteModal"><i class="ti ti-close"></i></a>';

			$response['data'][$key] = array(
				$count,
				$value->subject_name,
				$value->subject_slug,
				$buttons
			);
			$count ++;
		} // /foreach

		echo json_encode($response);
	}

	public function fetchSubject() {

		$id = $this->input->post('subject_id');

		$result = $this->db->where('id', $id)->get('subjects')->row();

		echo json_encode($result);
	}

	public function editSubject() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('title', 'Title', "required");

        if ($this->form_validation->run() == true) {

        	$update_data = array(
        		'subject_name' => $this->input->post('title'),
        		'subject_slug' => slugify($this->input->post('title'))
        	);

        	$this->db->where('id', $this->input->post('subject_id'));

        	if ($this->db->update('subjects', $update_data)) {
        		$response['error'] = FALSE;
        		$response['message'] = 'Subject updated successfully';
        	} else {
        		$response['error'] = TRUE;
        		$response['message'] = 'Unable to update subject!';
        	}

        } else {
        	redirect('admin/subjects', 'refresh');
        }

        echo json_encode($response);

	}

	public function addSubject() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('add_title', 'Title', "required");

        if ($this->form_validation->run() == true) {

            $save_data = array(
                'subject_name' => $this->input->post('add_title'),
                'subject_slug' => slugify($this->input->post('add_title'))
            );

            if ($this->db->insert('subjects', $save_data)) {
                $response['error'] = FALSE;
                $response['message'] = 'Subject added successfully';
            } else {
                $response['error'] = TRUE;
                $response['message'] = 'Unable to save subject';
            }
        	
        } else {
        	redirect('admin/subjects', 'refresh');
        }

        echo json_encode($response);
	}

	public function deleteSubject() {

		$response = array();
		
		$this->db->where('id', $this->input->post('subject_id'));

		if ($this->db->delete('subjects')) {
			$response['error'] = FALSE;
			$response['message'] = 'Subject removed successfully';
		} else {
			$response['error'] = TRUE;
			$response['message'] = 'Unable to delete subject';
		}

		echo json_encode($response);
	}

}
