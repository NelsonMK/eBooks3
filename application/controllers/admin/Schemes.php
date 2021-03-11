<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schemes extends Admin_Controller {

	public function __construct() {
        parent::__construct();

        $this->not_logged_in();
    }

	public function index()
	{
		$data['classes'] = $this->db->get('classes')->result();
		$data['subjects'] = $this->db->get('subjects')->result();

		$this->render_template('admin/schemes', $data);

	}

	public function fetchSchemes()
	{
        
		$response = array('data' => array());

		$select = array('schemes.*', 'classes.class_name', 'subjects.subject_name');

		$data = $this->db->order_by('id', 'desc')->select($select)->from('schemes')->join('classes', 'classes.id = schemes.class', 'left')->join('subjects', 'subjects.id = schemes.subject', 'left')->get()->result();

		$count = 1;

		$term = null;

		foreach ($data as $key => $value) {

			if ($value->term == 1) {
				$term = 'Term 1';
			} elseif ($value->term == 2) {
				$term = 'Term 2';
			} elseif ($value->term == 3) {
				$term = 'Term 3';
			}

			// button
            $buttons = '';

    		$buttons .= '<a class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 " onclick="editFunc('.encrypt($value->id).')" data-toggle="modal" data-target="#editModal"><i class="ti ti-pencil"></i></a>';
   
    		$buttons .= '<a class="btn btn-icon btn-outline-danger btn-round" onclick="deleteFunc('.encrypt($value->id).')" data-toggle="modal" data-target="#deleteModal"><i class="ti ti-close"></i></a>';

			$response['data'][$key] = array(
				$count,
				$value->scheme_name,
				$value->scheme_slug,
				$value->scheme_price,
				$value->class_name,
				$value->subject_name,
				$term,
				$buttons
			);
			$count ++;
		} // /foreach

		echo json_encode($response);
	}

	public function fetchScheme() {

		$id = $this->input->post('scheme_id');

		$select = array('schemes.*', 'classes.class_name', 'classes.id as class_id', 'subjects.subject_name', 'subjects.id as subject_id');

		$result = $this->db->where('schemes.id', decrypt($id))->select($select)->from('schemes')->join('classes', 'classes.id = schemes.class', 'left')->join('subjects', 'subjects.id = schemes.subject', 'left')->get()->row();

		//fetch the selected class
		$class = '<option value="'.encrypt($result->class_id).'">'.$result->class_name.'</option>';

		//fetch all classes
		$classes = $this->db->get('classes')->result();
		foreach ($classes as $key) {
			$class .= '<option value="'.encrypt($key->id).'">'.$key->class_name.'</option>';
		}

		//fetch the selected subject
		$subject = '<option value="'.encrypt($result->subject_id).'">'.$result->subject_name.'</option>';

		//fetch selected term
		$term_name = null;
		if ($result->term == 1) {
			$term_name = 'Term 1';
		} elseif ($result->term == 2) {
			$term_name = 'Term 2';
		} elseif ($result->term == 3) {
			$term_name = 'Term 3';
		}

		$term = '<option value="'.$result->term.'">'.$term_name.'</option>';

		//display all terms
		$term .= '<option value="'."1".'">Term 1</option>';
		$term .= '<option value="'."2".'">Term 2</option>';
		$term .= '<option value="'."3".'">Term 3</option>';

		$results = array(
			'scheme_id' => encrypt($result->id),
			'scheme_name' => $result->scheme_name,
			'classes' => $class,
			'subject' => $subject,
			'term' => $term,
			'description' => $result->description
		);

		echo json_encode($results);
	}

	/**
	**Get all subjects related to a class
	**/
	public function getSubject() {

		$class_id = $this->input->post('class_id');

		$result = $this->db->where('id', decrypt($class_id))->get('classes')->row();

		//get all the encoded ids and decode them
		$subject_ids = json_decode($result->subjects);

        echo '<option value="">Select subject</option>';
        foreach ($subject_ids as $k => $v) {
            $subject_data = $this->getSubjectsData($v);
            echo '<option value="'.encrypt($subject_data['id']).'">'.$subject_data['subject_name'].'</option>';
        }
	}

	private function getSubjectsData($id) {
		if ($id) {
			$sql = "SELECT * FROM subjects WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
	}

	public function editScheme() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('title', 'Title', "required");

        if ($this->form_validation->run() == true) {

        	$update_data = array(
        		'scheme_name' => $this->input->post('title'),
        		'scheme_slug' => slugify($this->input->post('title')),
        		'scheme_price' => config('schemes_price'),
        		'class' => decrypt($this->input->post('edit_class_id')),
        		'subject' => decrypt($this->input->post('edit_subject_id')),
        		'term' => $this->input->post('edit_term'),
        		'description' => $this->input->post('edit_description'),
        	);

        	$this->db->where('id', decrypt($this->input->post('scheme_id')));

        	if ($this->db->update('schemes', $update_data)) {
        		$response['error'] = FALSE;
        		$response['message'] = 'Scheme updated successfully';
        	} else {
        		$response['error'] = TRUE;
        		$response['message'] = 'Unable to update scheme!';
        	}

        } else {
        	redirect('admin/schemes', 'refresh');
        }

        echo json_encode($response);

	}

	public function addScheme() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('add_title', 'Title', "required");

        $scheme_extension = pathinfo($_FILES['scheme_file']['name'], PATHINFO_EXTENSION);
        $file_name = slugify($this->input->post('add_title')).'.'.$scheme_extension;

        if ($this->form_validation->run() == true) {

        	if (move_uploaded_file($_FILES['scheme_file']['tmp_name'], './assets/files/schemes/'.$file_name)) {

        		$save_data = array(
        			'scheme_name' => $this->input->post('add_title'),
        			'scheme_slug' => slugify($this->input->post('add_title')),
        			'file' => $file_name,
        			'scheme_price' => config('schemes_price'),
        			'class' => decrypt($this->input->post('class_id')),
        			'subject' => decrypt($this->input->post('subject_id')),
        			'term' => $this->input->post('term'),
        			'description' => $this->input->post('description')
        		);

        		if ($this->db->insert('schemes', $save_data)) {
        			$response['error'] = FALSE;
        			$response['message'] = 'Scheme added successfully';
        		} else {
        			$response['error'] = TRUE;
        			$response['message'] = 'Unable to save scheme';
        		}

            } else {
            	$response['error'] = TRUE;
            	$response['message'] = 'Unable to upload scheme!';
            }
        	
        } else {
        	redirect('admin/schemes', 'refresh');
        }

        echo json_encode($response);
	}

	public function deleteScheme() {

		$response = array();
		
		$this->db->where('id', decrypt($this->input->post('scheme_id')));

		if ($this->db->delete('schemes')) {
			$response['error'] = FALSE;
			$response['message'] = 'Scheme removed successfully';
		} else {
			$response['error'] = TRUE;
			$response['message'] = 'Unable to delete scheme';
		}

		echo json_encode($response);
	}

}
