<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

	}

	public function index()
	{

        $data['books'] = $this->db->get('products')->num_rows();
        $data['schemes'] = $this->db->get('schemes')->num_rows();
        $data['categories'] = $this->db->get('category')->num_rows();
        $data['classes'] = $this->db->get('classes')->num_rows();
        $data['subjects'] = $this->db->get('subjects')->num_rows();
        $query = $this->db->query("SELECT value FROM visits");
        $result = $query->result_array();
        $total_visits = 0;
        foreach ($result as $key) {
            $total_visits += $key['value'];
        }
        $data['visitors'] = $total_visits;

        $query = $this->db->query("SELECT value, visit_date FROM visits ORDER BY visit_date ASC");
        $records = $query->result_array();
        $data['chart_data'] = json_encode($records);

        $select = array('products.*', 'sum(sales.amount) as value');
        $select_schemes = array('schemes.*', 'sum(sales.amount) as value');
        $today = date('Y-m-d');
        $month = date('m');
        $year = date('Y');

        $this->db->select_sum('amount')->from('sales')->where('sales_date', $today);
        $query = $this->db->get();
        $data['daily_sales'] = $query->row()->amount;
        $this->db->select_sum('amount')->from('sales')->where('sales_date', $today)->where('type', 1);
        $query = $this->db->get();
        $data['daily_book_sales'] = $query->row()->amount;
        $this->db->select_sum('amount')->from('sales')->where('sales_date', $today)->where('type', 2);
        $query = $this->db->get();
        $data['daily_schemes_sales'] = $query->row()->amount;

        $this->db->select_sum('amount')->from('sales')->where('MONTH(sales_date)', $month)->where('YEAR(sales_date)', $year);
        $query = $this->db->get();
        $data['monthly_sales'] = $query->row()->amount;
        $this->db->select_sum('amount')->from('sales')->where('MONTH(sales_date)', $month)->where('YEAR(sales_date)', $year)->where('type', 1);
        $query = $this->db->get();
        $data['monthly_book_sales'] = $query->row()->amount;
        $this->db->select_sum('amount')->from('sales')->where('MONTH(sales_date)', $month)->where('YEAR(sales_date)', $year)->where('type', 2);
        $query = $this->db->get();
        $data['monthly_schemes_sales'] = $query->row()->amount;

        $this->db->select_sum('amount')->from('sales')->where('YEAR(sales_date)', $year);
        $query = $this->db->get();
        $data['yearly_sales'] = $query->row()->amount;
        $this->db->select_sum('amount')->from('sales')->where('YEAR(sales_date)', $year)->where('type', 1);
        $query = $this->db->get();
        $data['yearly_book_sales'] = $query->row()->amount;
        $this->db->select_sum('amount')->from('sales')->where('YEAR(sales_date)', $year)->where('type', 2);
        $query = $this->db->get();
        $data['yearly_schemes_sales'] = $query->row()->amount;

        $data['yearly_top_selling_books'] = $this->db->select($select)->from('products')->join('sales', 'sales.product_id = products.id', 'left')->where('YEAR(sales.sales_date)', $year)->where('type', 1)->group_by('products.id')->order_by('value', 'DESC')->limit(5)->get()->result();
        $data['yearly_top_selling_schemes'] =  $this->db->select($select_schemes)->from('schemes')->join('sales', 'sales.product_id = schemes.id', 'left')->where('YEAR(sales.sales_date)', $year)->where('type', 2)->group_by('schemes.id')->order_by('value', 'DESC')->limit(5)->get()->result();

		$this->render_template('admin/dashboard', $data);
	}
}