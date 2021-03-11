<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Admin_Controller {

	public function __construct() {
        parent::__construct();

        //$this->not_logged_in();
        $this->load->model('Model_settings');
    }

	public function index()
	{

		$this->load->library("form_validation");
		$config['upload_path'] = './assets/settings/';
        $config['allowed_types'] = 'jpg|png|jpeg|ico';
        $this->load->library('upload', $config);
		$data['item'] = new stdClass();
		foreach ($this->Model_settings->get() as $setting) {
            $data['item']->{ $setting->key } = $setting->value;
        }

        $this->form_validation->set_rules('favicon', 'Web Icon', "callback_favicon");
        $this->form_validation->set_rules('settings_controller', 'Required', 'required');

        if ($this->form_validation->run() == true) {
            foreach ($this->input->post('setting') as $key => $value) {
        		$this->Model_settings->key = $key;
        		$this->Model_settings->value = $value;
        		$this->Model_settings->save();
        	} 

            $this->books_price();
            $this->schemes_price();

        	redirect("admin/settings", "refresh");
        } 

		$this->render_template('admin/settings', $data);

	}

    public function favicon($var) {

        if ($this->upload->do_upload('favicon')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->Model_settings->key = 'favicon';
                $this->Model_settings->value = $data['file_name'];
                $this->Model_settings->save();
            }
        }
        return true;
    }

    private function books_price() {

        $update_data = array(
            'price' => config('books_price')
        );

        $this->db->update('products', $update_data);

        return true;
    }

    private function schemes_price() {

        $update_data = array(
            'scheme_price' => config('schemes_price')
        );

        $this->db->update('schemes', $update_data);

        return true;
    }
}
