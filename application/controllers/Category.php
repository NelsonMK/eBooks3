<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Book_Controller {

	public $model = 'model_products';

	public function __construct() {
        parent::__construct();
        
        $this->load->model($this->model);

    }

	public function index($cat_slug = null, $offset = 0)
	{

		if (empty($cat_slug)) {
			redirect('home');
		} else {

			$cat_slug = $cat_slug;

			$result = $this->db->where('cat_slug', $cat_slug)->get('category')->row();

			$cat_id = $result->id;

			$this->load->library('pagination');
			config('pagination_limit', 12);
			$this->db->like('category_id', '"' . $cat_id . '"');
			$config['total_rows'] = $this->{$this->model}->get(TRUE);
			$config['suffix'] = http_build_query($_GET);
			$config['base_url'] = site_url('category/index/'.$cat_slug);
			$config['per_page'] = config('pagination_limit');

			$this->pagination->initialize($config);
			$data['pagination'] = $this->pagination->create_links();

			if ($this->uri->segment(3))
				$this->{$this->model}->offset = $offset;
			$data['total'] = $config['total_rows'];
			$this->{$this->model}->limit = config('pagination_limit');
			$this->db->like('category_id', '"' . $cat_id . '"');
			$data['category_data'] = $this->{$this->model}->get();

			$data['start'] = (int)$this->uri->segment(4) + 1;

			if ($this->uri->segment(4) + $config['per_page'] > $config['total_rows']) {
				$data['end'] = $config['total_rows'];
			} else {
				$data['end'] = (int)$this->uri->segment(4) + $config['per_page'];
			}

			$data['category_name'] = $result->name;
			$data['category_slug'] = $cat_slug;


			$this->render_template('category', $data);

		}

	}

}
