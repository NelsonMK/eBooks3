<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends Admin_Controller {

	public function __construct() {
        parent::__construct();

        $this->not_logged_in();
        $this->load->library('twilio');
    }

	public function index()
	{

		$this->render_template('admin/sales');

	}

	public function fetchSales()
	{
        
		$response = array('data' => array());

		$data = $this->db->order_by('id', 'desc')->get('sales')->result();

		$count = 1;

		$product_name = null;
		foreach ($data as $key => $value) {

			if ($value->type == 1) {
				$product_name = $this->productName($value->product_id);
			} elseif ($value->type == 2) {
				$product_name = $this->schemeName($value->product_id);
			} else {
				$product_name = '';
			}

			// button
            $buttons = '';

    		$buttons .= '<a class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 " onclick="editFunc('.encrypt($value->pay_id).')" data-toggle="modal" data-target="#editModal"><i class="ti ti-eye"></i></a>';

			$response['data'][$key] = array(
				$count,
				$value->user_id,
				$value->pay_id,
				$value->amount,
				$product_name,
				$value->sales_date,
				$buttons
			);
			$count ++;
		} // /foreach

		echo json_encode($response);
	}

	private function productName($id) {
		if ($id) {
			$result = $this->db->where('id', $id)->get('products')->row();

			return $result->name;
		}
	}

	private function schemeName($id) {
		if ($id) {
			$result = $this->db->where('id', $id)->get('schemes')->row();

			return $result->scheme_name;
		}
	}

	public function send()
	{

        $recipient_number = "+254740361876";
        $sender_number = "+254740361876";
        $message = "Your appointment is coming up on ".date('Y/m/d h:i a');
        $send = $this->twilio->sendmessage($recipient_number, $sender_number, $message);
        return true;
	}

}
