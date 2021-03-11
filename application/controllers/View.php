<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends Book_Controller {

	public function index($slug = null)
	{

		if ($slug) {

			$result = $this->db->where('slug', $slug)->get('products')->row();
			
			$data['book'] = $this->db->where('slug', $slug)->get('products')->row();

			$category_ids = json_decode($result->category_id);

			$category = array();

			foreach ($category_ids as $k => $v) {
				$category = $this->db->where('category_id', $v)->get('products')->result();
			}

			$data['categories'] = $category;

			$this->render_template('view', $data);
		}

	}
}
