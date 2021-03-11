<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analysis extends Admin_Controller {

	public function __construct() {
        parent::__construct();

        $this->not_logged_in();

    }

	public function index()
	{

        $year = date('Y');
        $product = 1;
        $name = 'Books';

        if($this->input->post('select_year')) {
            $year = $this->input->post('select_year');
        }

        if ($this->input->post('select_product')) {
            $product = $this->input->post('select_product');
            $name = 'Schemes';
        }

        $sales_data = $this->generateMonthYears($year, $product);

        $data['years'] = $this->db->distinct()->select('YEAR(sales_date) as years')->from('sales')->get()->result();
        $data['selected_year'] = $year;

        $final_data = array();
        foreach ($sales_data as $k => $v) {
            if(count($v) > 1) {
                $total_amount_earned = array();
                foreach ($v as $k2 => $v2) {
                    if($v2) {
                        $total_amount_earned[] = $v2->amount;                     
                    }
                }
                $final_data[$k] = array_sum($total_amount_earned);  
            }
            else {
                $final_data[$k] = 0;    
            }

        }

        $data['title'] = $name;
        $data['results'] = $final_data;

		$this->render_template('admin/analysis', $data);

	}

    /*getting the total months*/
    private function months()
    {
        return array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
    }

    private function generateMonthYears($year, $product) {

        if ($year) {
            $months = $this->months();
            
            $result = $this->db->where('type', $product)->get('sales')->result();

            $final_data = array();
            foreach ($months as $month_k => $month_y) {
                $get_mon_year = $year.'-'.$month_y; 

                $final_data[$get_mon_year][] = '';
                foreach ($result as $k => $v) {
                    $month_year = date('Y-m', strtotime($v->sales_date));

                    if($get_mon_year == $month_year) {
                        $final_data[$get_mon_year][] = $v;
                    }
                }
            }   

            return $final_data;
        }
    }
}
