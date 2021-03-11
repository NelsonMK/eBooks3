<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Admin_Controller {

	public function __construct() {
        parent::__construct();

        $this->not_logged_in();
    }

	public function index()
	{

		$this->render_template('admin/categories');

	}

	public function fetchCategories()
	{
        
		$response = array('data' => array());

		$data = $this->db->order_by('id', 'desc')->get('category')->result();

		$count = 1;

		foreach ($data as $key => $value) {

			// button
            $buttons = '';

    		$buttons .= '<a class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 " onclick="editFunc('.encrypt($value->id).')" data-toggle="modal" data-target="#editModal"><i class="ti ti-pencil"></i></a>';
   
    		$buttons .= '<a class="btn btn-icon btn-outline-danger btn-round" onclick="deleteFunc('.encrypt($value->id).')" data-toggle="modal" data-target="#deleteModal"><i class="ti ti-close"></i></a>';

			$response['data'][$key] = array(
				$count,
				$value->name,
				$value->cat_slug,
				$buttons
			);
			$count ++;
		} // /foreach

		echo json_encode($response);
	}

	public function fetchCategory() {

		$id = $this->input->post('category_id');

		$result = $this->db->where('id', decrypt($id))->get('category')->row();

		$results = array(
			'id' => encrypt($result->id),
			'category_name' => $result->name
		);

		echo json_encode($results);
	}

	public function editCategory() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('title', 'Title', "required");

        if ($this->form_validation->run() == true) {

        	$update_data = array(
        		'name' => $this->input->post('title'),
        		'cat_slug' => slugify($this->input->post('title'))
        	);

        	$this->db->where('id', decrypt($this->input->post('category_id')));

        	if ($this->db->update('category', $update_data)) {
        		$response['error'] = FALSE;
        		$response['message'] = 'Category updated successfully';
        	} else {
        		$response['error'] = TRUE;
        		$response['message'] = 'Unable to update category!';
        	}

        } else {
        	redirect('admin/categories', 'refresh');
        }

        echo json_encode($response);

	}

	public function addCategory() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('add_title', 'Title', "required");

        if ($this->form_validation->run() == true) {

            $save_data = array(
                'name' => $this->input->post('add_title'),
                'cat_slug' => slugify($this->input->post('add_title'))
            );

            if ($this->db->insert('category', $save_data)) {
                $response['error'] = FALSE;
                $response['message'] = 'Category added successfully';
            } else {
                $response['error'] = TRUE;
                $response['message'] = 'Unable to save category';
            }
        	
        } else {
        	redirect('admin/categories', 'refresh');
        }

        echo json_encode($response);
	}

	public function deleteCategory() {

		$response = array();
		
		$this->db->where('id', decrypt($this->input->post('category_id')));

		if ($this->db->delete('category')) {
			$response['error'] = FALSE;
			$response['message'] = 'Category removed successfully';
		} else {
			$response['error'] = TRUE;
			$response['message'] = 'Unable to delete category';
		}

		echo json_encode($response);
	}

}
