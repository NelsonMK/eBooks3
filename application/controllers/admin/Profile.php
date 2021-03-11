<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Admin_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->not_logged_in();
        $this->load->model('Model_about');
    }

	public function index()
	{
		$this->load->library("form_validation");

		$data['item'] = new stdClass();
		foreach ($this->Model_about->get() as $about) {
            $data['item']->{ $about->key } = $about->value;
        }

        $this->form_validation->set_rules('profile_controller', 'Required', 'required');

        if ($this->form_validation->run() == true) {
            foreach ($this->input->post('about') as $key => $value) {
        		$this->Model_about->key = $key;
        		$this->Model_about->value = $value;
        		$this->Model_about->save();
        	} 
        	redirect("admin/profile");
        } 

        if ($this->input->post('type') == 1) {

            $update_data = array(
                'email' => $this->input->post('email')
            );

            $this->db->where('user_id', session('admin_user_id'));

            $this->db->update('users', $update_data);

            $user = $this->db->where('user_id', session('admin_user_id'))->get('users')->row();

            $user_details = array(
                'email' => $user->email
            );

            $this->session->set_userdata($user_details);
        }

		$this->render_template('admin/profile', $data);

	}

}
