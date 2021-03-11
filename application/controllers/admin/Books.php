<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends Admin_Controller {

	public function __construct() {
        parent::__construct();

        $this->not_logged_in();
    }

	public function index()
	{

		$data['categories'] = $this->db->get('category')->result();

		$this->render_template('admin/books', $data);

	}

	public function fetchBooks()
	{
        
		$response = array('data' => array());

		if ($this->input->post('category_id')) {
			$data = $this->db->order_by('id', 'desc')->like('category_id', '"' . decrypt($this->input->post('category_id')) . '"')->get('products')->result();
		} else {
			$data = $this->db->order_by('id', 'desc')->get('products')->result();
		}

		$count = 1;

		foreach ($data as $key => $value) {
			$category_ids = json_decode($value->category_id);

            $category_name = array();
            if ($category_ids) {
            
            	foreach ($category_ids as $k => $v) {
            		$category_data = $this->getCategoriesData($v);
            		$category_name[] = $category_data['name'];
            	}
            }

            $category_name = implode(', ', $category_name);

            $img = '<img src="'.base_url().'assets/files/images/'.$value->photo.'" alt="'.$value->slug.'" class="img-circle" width="50" height="50" />';

			// button
            $buttons = '';

    		$buttons .= '<a class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 " href="'.base_url('admin/books/update/'.encrypt($value->id)).'"><i class="ti ti-pencil"></i></a>';
   
    		$buttons .= '<a class="btn btn-icon btn-outline-danger btn-round" onclick="deleteFunc('.encrypt($value->id).')" data-toggle="modal" data-target="#deleteModal"><i class="ti ti-close"></i></a>';

			$response['data'][$key] = array(
				$count,
				$value->name,
				$value->price,
				$img,
				$category_name,
				$buttons
			);
			$count ++;
		} // /foreach

		echo json_encode($response);
	}

	private function getCategoriesData($id) {
		if ($id) {
			$sql = "SELECT * FROM category WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
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

	public function editBook() {

		$response = array();

		$this->load->library("form_validation");

        $this->form_validation->set_rules('edit_title', 'Title', "required");

        if ($this->form_validation->run() == true) {

        	$update_data = array(
        		'category_id' => json_encode($this->input->post('categories'))
        	);

        	$this->db->where('id', decrypt($this->input->post('book_id')));

        	if ($this->db->update('products', $update_data)) {
        		$response['error'] = FALSE;
        		$response['message'] = 'Book updated successfully';
        	} else {
        		$response['error'] = TRUE;
        		$response['message'] = 'Unable to update book!';
        	}

        } else {
        	redirect('admin/books', 'refresh');
        }

        echo json_encode($response);

	}

	public function updateAll() {

		$response = array();

		$response['message'] = 'am here';

		//$id = array();

		/*$id1 = array($id);

		$data = array(
			'category_id' => json_encode($id1)
		);

		$this->db->where('category_id', $id);

		$this->db->update('products', $data);*/

		echo json_encode($response);
	}

	public function update($book_id)
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

            $this->db->where('id', decrypt($book_id));
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
                    
            $data['categories'] = $this->db->get('category')->result();           
            $data['book'] = $this->db->where('id', decrypt($book_id))->get('products')->row();

            $this->render_template('admin/books/edit', $data); 
        }   

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
        			'scheme_price' => 80,
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
