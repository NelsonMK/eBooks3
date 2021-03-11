<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schemes extends Book_Controller {

	public function index($class_slug = null)
	{

		if ($class_slug) {
			
			$result = $this->db->where('class_slug', $class_slug)->get('classes')->row();

			$data['schemes'] = $this->db->where('class', $result->id)->get('schemes')->result();
			$data['top_schemes'] = $this->db->limit(6)->get('products')->result();
			$data['classes'] = $this->db->get('classes')->result();
			$data['subjects'] = $this->db->get('subjects')->result();

			$this->render_template('schemes', $data);
		}

		$data['schemes'] = $this->db->get('schemes')->result();
		$data['top_schemes'] = $this->db->limit(6)->get('products')->result();

		$data['classes'] = $this->db->get('classes')->result();
		$data['subjects'] = $this->db->get('subjects')->result();

		$this->render_template('schemes', $data);

	}

	public function scheme($class_slug = null) {

		if ($class_slug) {
			$result = $this->db->where('class_slug', $class_slug)->get('classes')->row();

			$data['schemes'] = $this->db->where('class', $result->id)->get('schemes')->result();
			$data['top_schemes'] = $this->db->limit(6)->get('products')->result();
			$data['classes'] = $this->db->get('classes')->result();
			$data['subjects'] = $this->db->get('subjects')->result();

			$this->render_template('schemes', $data);
		}
	}

}
