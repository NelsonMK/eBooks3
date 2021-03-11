<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Book_Controller {

	public $model = 'model_products';
	public $query = '';

	public function __construct() {
        parent::__construct();
        
        $this->load->model($this->model);

    }

	public function index($offset = 0)
	{

		if ($this->input->get('q')) {
			
			$cat_slug = $this->input->get('category');

			if (empty($this->input->get('category'))) {
				
				$data['category_name'] = "";

				$this->load->library('pagination');
				config('pagination_limit', 12);
				$this->db->like('products.name', $this->input->get('q'), 'both');
				if ($this->input->get('q')) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
				$config['total_rows'] = $this->{$this->model}->get(TRUE);
				$config['suffix'] = '?' . http_build_query($_GET);
				$config['base_url'] = site_url('search/index');
				$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
				$config['per_page'] = config('pagination_limit');
				$config['num_links'] = 3;

				$this->pagination->initialize($config);
				$data['pagination'] = $this->pagination->create_links();

				if ($this->uri->segment(2))
					$this->{$this->model}->offset = $offset;
				$data['total'] = $config['total_rows'];
				$this->{$this->model}->limit = config('pagination_limit');
				$this->db->like('products.name', $this->input->get('q'), 'both');
				$data['search_data'] = $this->{$this->model}->get();
				$data['start'] = (int)$this->uri->segment(3) + 1;

				if ($this->uri->segment(3) + $config['per_page'] > $config['total_rows']) {
					$data['end'] = $config['total_rows'];
				} else {
					$data['end'] = (int)$this->uri->segment(3) + $config['per_page'];
				}


			} else {

				$result = $this->db->where('cat_slug', $cat_slug)->get('category')->row();

				$cat_id = $result->id;

				$data['category_name'] = "(".$result->name." category)";

				$this->load->library('pagination');
				config('pagination_limit', 12);
				$this->db->like('products.category_id', '"' . $cat_id . '"');
				$this->db->like('products.name', $this->input->get('q'), 'both');
				if ($this->input->get('q')) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
				$config['total_rows'] = $this->{$this->model}->get(TRUE);
				$config['suffix'] = '?' . http_build_query($_GET);
				$config['base_url'] = site_url('search/index');
				$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
				$config['per_page'] = config('pagination_limit');
				$config['num_links'] = 3;

				$this->pagination->initialize($config);
				$data['pagination'] = $this->pagination->create_links();

				if ($this->uri->segment(2))
					$this->{$this->model}->offset = $offset;
				$data['total'] = $config['total_rows'];
				$this->{$this->model}->limit = config('pagination_limit');
				//$this->db->where('products.category_id', $cat_id);
				$this->db->like('products.category_id', '"' . $cat_id . '"');
				$this->db->like('products.name', $this->input->get('q'), 'both');
				$data['search_data'] = $this->{$this->model}->get();
				$data['start'] = (int)$this->uri->segment(3) + 1;

				if ($this->uri->segment(3) + $config['per_page'] > $config['total_rows']) {
					$data['end'] = $config['total_rows'];
				} else {
					$data['end'] = (int)$this->uri->segment(3) + $config['per_page'];
				}


			}

			$this->render_template('search', $data);
		} else {

			redirect('home');
		}
	}

    private function get_data($search_term) {

        $sql = 'SELECT * FROM products';
        $query = $this->db->query($sql);
        $array = array();

        foreach($query->result_array() as $row)
        {
            $array[] = $row['name'];
        }

        $arr = $array;

        $filteredArray = array_filter($arr, function($element) use($search_term){
            return isset($element) && strpos($element, $search_term) !== false;
        });

        return $filteredArray;
    }

    public function search_results() {

        if (isset($_REQUEST['q'])) {
            $results = $this->get_data($_REQUEST['q']);
            echo json_encode($results);
        }
    }

}
