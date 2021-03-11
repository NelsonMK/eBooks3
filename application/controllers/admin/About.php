<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Admin_Controller {

	public function __construct() {
        parent::__construct();
        //$this->not_logged_in();
        $this->load->model('Model_about');
    }

	public function index()
	{
		$this->load->library("form_validation");
        $config['upload_path'] = './assets/settings/';
        $config['allowed_types'] = 'jpg|png|jpeg|ico';
        $this->load->library('upload', $config);
		$data['item'] = new stdClass();
		foreach ($this->Model_about->get() as $about) {
            $data['item']->{ $about->key } = $about->value;
        }

        $this->form_validation->set_rules('about_bg', 'About Image', "callback_about_bg");
        $this->form_validation->set_rules('about_controller', 'Required', 'required');

        if ($this->form_validation->run() == true) {
            foreach ($this->input->post('about') as $key => $value) {
        		$this->Model_about->key = $key;
        		$this->Model_about->value = $value;
        		$this->Model_about->save();
        	} 
        	redirect("admin/about", "refresh");
        } 

		$this->render_template('admin/about', $data);

	}

    public function about_bg($var) {

        if ($this->upload->do_upload('about_bg')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->Model_about->key = 'about_bg';
                $this->Model_about->value = $data['file_name'];
                $this->Model_about->save();
            }
        }
        return true;
    }

}
