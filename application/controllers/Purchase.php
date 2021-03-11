<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends Book_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('mpesa_callbacks');
        $this->load->library('mpesa');
        $this->load->model('Request_model');
    }

	public function index($slug = null)
	{

        if (empty($slug)) {
            redirect('home');
        } else {

            $slug = $slug;

            $result = $this->db->where('slug', $slug)->get('products')->row();

            $data['name'] = $result->name;
            $data['amount'] = $result->price;
            $data['id'] = $result->id;

            $new_count = $result->counter + 1;

            $update_data = array(
                'counter' => $new_count,
                'date_view' => date('Y-m-d')
            );

            $this->db->where('id', $result->id)->update('products', $update_data);

            $this->render_template('buy', $data);

        }

	}

	public function buy() {

		$response = array();

		$phone_number = $this->input->post('phone_number');

		$amount = $this->input->post('amount');

		$phone = trim($phone_number);

		$phone_part = substr($phone, 1);

		$full_number = '254'.$phone_part;

        $pay_bill = trim(config('pay_bill'));

        $description = "Pay Kshs ".$amount." to ".config('title');

		$result = $this->mpesa->STKPushSimulation(
            "".$pay_bill."",
            "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919",
            "CustomerPayBillOnline",
            "1",//amount of cash requested // change to book amount
            "".$full_number."",
            "".$pay_bill."",
            "".$full_number."",
            "".base_url("contact/callback1")."",
            "910355",
            "".$description."",
            "".$description."");
        
        $table = 'transaction';


        if (!empty($result->MerchantRequestID) || !empty($result->CheckoutRequestID)) {

            $data = array(
                'MerchantRequestID' => $result->MerchantRequestID,
                'CheckoutRequestID' => $result->CheckoutRequestID,
                'ResponseCode' => $result->ResponseCode,
                'ResponseDescription' => $result->ResponseDescription,
                'CustomerMessage' => $result->CustomerMessage,
            );

            $this->Request_model->insert($table, $data);

            $response['error'] = FALSE;
            $response['message'] = 'Request sent successfully';

            mpesa_session('MerchantRequestID', $result->MerchantRequestID);
            mpesa_session('CheckoutRequestID', $result->CheckoutRequestID);

            $file = 'mpesa_c2b1_log.txt';
            if (file_exists(APPPATH.'logs/'.$file)) {
                $fh = fopen(APPPATH.'logs/'.$file, 'a');
            } else {
                $fh = fopen(APPPATH.'logs/'.$file, 'w');
            }
            fwrite($fh, "\n====".date("d-m-Y H:i:s")."====\n");
            fwrite($fh, json_encode($result)."\n");
            fclose($fh);

        } else {
            $response['error'] = TRUE;
            $response['message'] = 'Money request was not sent';
        }

        $this->mpesa->getDataFromCallback();

        echo json_encode($response);

	}

    private function verifySafaricomPhoneNo($phone) {
        $phone_no = '0'.substr($phone, -9);
        if (!preg_match('/^(0){1}[7]{1}([0-2]{1}[0-9]{1}|[9,4]{1}[0-9]{1})[0-9]{6}/',$phone_no))
        {
            return false;
        }
        else{
            return true;
        }
    }

	public function callback1() {

		$callbackJSONData = $this->mpesa->getDataFromCallback();

        $file = 'mpesa_callback_log.txt'; //Please make sure that this file exists and is writable

        if (file_exists(APPPATH.'logs/'.$file)) {
        	$fh = fopen(APPPATH.'logs/'.$file, 'a');
        } else {
        	$fh = fopen(APPPATH.'logs/'.$file, 'w');
        }

        fwrite($fh, "\n====".date("d-m-Y H:i:s")."====\n");
        fwrite($fh, json_encode($callbackJSONData)."\n");
        fclose($fh);

        $where = array(
        	'MerchantRequestID' => $callbackJSONData->Body->stkCallback->MerchantRequestID,
        	'CheckoutRequestID' => $callbackJSONData->Body->stkCallback->CheckoutRequestID,
        );

        $data = array(
        	'ReceiptNumber'=>$callbackJSONData->Body->stkCallback->CallbackMetadata->Item[1]->Value,
        	'TransactionDate'=>$callbackJSONData->Body->stkCallback->CallbackMetadata->Item[3]->Value,
        	'PhoneNumber'=>$callbackJSONData->Body->stkCallback->CallbackMetadata->Item[4]->Value
        );

        $table = 'transaction';

        $this->Request_model->update($where, $data,$table);

    }


    public function check_payment() {

    	$response = array();

    	$where = array(
    		'MerchantRequestID' => mpesa_session('MerchantRequestID'),
    		'CheckoutRequestID' => mpesa_session('CheckoutRequestID'),
    	);

    	$this->db->where($where);

    	$result = $this->db->get('transaction')->row();

    	if (!empty($result->ReceiptNumber)) {
    		
    		$response['error'] = FALSE;
    		$response['message'] = 'Payment received successfully';
            mpesa_session('PhoneNumber', $result->PhoneNumber);
            mpesa_session('ReceiptNumber', $result->ReceiptNumber);

    	} else {

    		$response['error'] = TRUE;
    		$response['message'] = 'Payment not received!';
    	}

    	echo json_encode($response);
    }

    public function download_book() {

    	$response = array();

        $id = $this->input->post('id');

    	if(!empty($id)){
                
    		$this->load->helper('download');

    		$fileInfo = $this->db->where('id', decrypt($id))->get('products')->row();

            $file = 'assets/files/books/'.$fileInfo->file;


            if (file_exists($file)) {


                mpesa_session('MerchantRequestID', '1');
                mpesa_session('CheckoutRequestID', '2');
                $response['error'] = FALSE;
                $response['file_name'] = $fileInfo->name;
                $response['file'] = $fileInfo->file;

                $data = array(
                    'user_id' => mpesa_session('PhoneNumber'),
                    'product_id' => decrypt($id),
                    'pay_id' => mpesa_session('ReceiptNumber'),
                    'amount' => $fileInfo->price,
                    'sales_date' => date('Y-m-d')
                );

                $this->db->insert('sales', $data);
            } else {
                $response['error'] = TRUE;
                $response['message'] = 'The book was not found! Please contact us for further assistance';
                $response['phone_number'] = mpesa_session('PhoneNumber');
                $response['file'] = $fileInfo->file;
            }

    	}

    	echo json_encode($response);
    }

    public function book_download() {

        $response = array();

        $book_id = $this->input->post('book_id');

        if ($book_id) {
            
            $fileInfo = $this->db->where('id', decrypt($book_id))->get('products')->row();

            $file = '/assets/files/books/'.$fileInfo->file;

            if (file_exists($file)) {

                $response['error'] = FALSE;
                $response['message'] = 'Book downloaded successfully';
                $response['location'] = $file;
                $response['file_name'] = $fileInfo->name;
                $response['file'] = $fileInfo->file;

            }

        }

        echo json_encode($response);
    }

    public function report_error() {

        $response = array();

        $error_title = null;
        $message = null;
        $error_message = null;

        $phone = $this->input->post('phone_number');
        $error_type = $this->input->post('error_type');
        $error = $this->input->post('error_message');


        switch ($error_type) {
            case '1':
                $error_title = 'Unable to send money request to user';
                $message = 'Dear customer, we are unable to send money request to the provided phone number!';
                $error_message = '';
                break;

            case '2':
                $error_title = 'Money request timeout';
                $message = 'Dear customer, the money request to your phone has been canceled due to delayed response time';
                $error_message = '';
                break;

            case '3':
                $error_title = 'Payment confirmation timout';
                $message = 'Dear customer, we are unable to confirm your payment!. If you have made the payment, please contact us and if not please try puchasing again';
                $error_message = '';
                break;

            case '4':
                $error_title = 'Book not found';
                $message = 'Dear customer, the requested book was not found!. Bear with us as we update our catalogue';
                $error_message = '';
                break;
            
            default:
                $error_title = 'General error';
                $message = 'Dear customer, we have noticed you have experienced some problems. Contact us for immediate assistance';
                $error_message = 'Some error occured!';
                break;
        }

        $data = array(
            'phone_number' => $phone,
            'error_title' => $error_title,
            'error' => $error
        );

        if ($this->db->insert('report_error', $data)) {
            $response['error'] = FALSE;
            $response['message'] = $message;
        }

        echo json_encode($response);
        
    }

}
