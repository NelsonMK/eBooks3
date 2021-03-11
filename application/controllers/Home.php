<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Book_Controller {

	public $model = 'products_model';

	public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

	public function index($book = null)
	{

		if ($book) {

			$data['book'] = $this->db->where('slug', $book)->get('products')->row();

			$this->load->view('book', $data);

		} else {
			$select = array('products.*', 'sum(sales.amount) as value');
			$today = date('Y-m-d');
			$month = date('m');
			$year = date('Y');

			$data['new_arrival'] = $this->db->limit(6)->order_by('id', 'DESC')->get('products')->result();
			$data['best_seller'] =  $this->db->select($select)->from('products')->join('sales', 'sales.product_id = products.id', 'left')->group_by('products.id')->order_by('value', 'DESC')->limit(6)->get()->result();
			$data['featured'] = $this->db->limit(6)->order_by('id', 'RANDOM')->get('products')->result(); 

			$data['trending'] = $this->db->order_by('counter','DESC')->limit(6)->get('products')->result();
			$data['today_top'] = $this->db->select($select)->from('products')->join('sales', 'sales.product_id = products.id', 'left')->where('sales.sales_date', $today)->group_by('products.id')->order_by('value', 'DESC')->limit(3)->get()->result();
			$data['month_top'] = $this->db->select($select)->from('products')->join('sales', 'sales.product_id = products.id', 'left')->where('MONTH(sales.sales_date)', $month)->where('YEAR(sales.sales_date)', $year)->group_by('products.id')->order_by('value', 'DESC')->limit(3)->get()->result();
			$data['year_top'] = $this->db->select($select)->from('products')->join('sales', 'sales.product_id = products.id', 'left')->where('YEAR(sales.sales_date)', $year)->group_by('products.id')->order_by('value', 'DESC')->limit(3)->get()->result();

			$this->render_template('dashboard', $data);

		}

	}

	public function book($slug = null) {

		$data['book'] = $this->db->where('slug', $slug)->get('products')->row();

		$this->render_template('book', $data);
	}

	public function category($cat_slug = null) {

		session('cat_slug', $cat_slug);

		redirect('category');

	}

	public function purchase($slug = null) {

		session('slug', $slug);

            $result = $this->db->where('slug', $slug)->get('products')->row();

            $data['name'] = $result->name;
            $data['amount'] = $result->price;
            $data['id'] = $result->id;

            $new_count = $result->counter + 1;
		//redirect('purchase');
		$this->load->view('purchase', $data);

	}

	public function search() {

		if ($this->input->get('q')) {
			
			$cat_id = $this->input->get('category');
			$data['search_query'] = $this->input->get('q');

			if ($cat_id == 0) {
				
				$this->db->like('products.name', $this->input->get('q'), 'both');

				$data['search_data'] = $this->db->get('products')->result();

			} else {

				$this->db->where('products.category_id', $cat_id)->like('products.name', $this->input->get('q'), 'both');

				$data['search_data'] = $this->db->get('products')->result();
			}

			$this->render_template('search', $data);
		}
	}

	public function fetchBook() {

		$book_id = $this->input->post('book_id');

		$result = $this->db->select('name as book_name, slug as book_slug, description as book_description, price as book_price, photo as book_photo')->where('id', decrypt($book_id))->get('products')->row();

		echo json_encode($result);
	}

}
