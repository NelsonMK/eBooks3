<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('model_auth');

    }

    public function index() {

        $this->load->view('admin/login');

    }

    /* 
        Check if the login form is submitted, and validates the user credential
        If not submitted it redirects to the login page
    */
    public function auth()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            // true case
            $email_exists = $this->check_email($this->input->post('email'));

            if($email_exists == TRUE) {

                $login = $this->loginUser($this->input->post('email'), $this->input->post('password'));

                if($login) {

                    $remember = $this->input->post('remember_me');

                    if ($remember) {
                        $this->session->set_userdata('remember_me', TRUE);
                    }

                    $this->session->set_userdata(array(
                        'admin_user_id' => $login['id'],
                        'admin_firstname' => $login['firstname'],
                        'admin_lastname' => $login['lastname'],
                        'admin_email' => $login['email'],
                        'admin_logged_in' => TRUE
                    ));
                    redirect('admin/dashboard', 'refresh');
                }
                else {
                    $this->data['loginError'] = TRUE;
                    $this->data['errors'] = 'Incorrect Email/password combination';
                    $this->load->view('admin/login', $this->data);
                }
            }
            else {
                $this->data['loginError'] = TRUE;
                $this->data['errors'] = 'Incorrect Email/password combination';

                $this->load->view('admin/login', $this->data);
            }   
        }
        else {
            // false case
            $this->load->view('admin/login');
        }   
    }

    public function check_email($email) 
    {
        if($email) {
            $sql = 'SELECT * FROM users WHERE email = ? AND type = 1';
            $query = $this->db->query($sql, array($email));
            $result = $query->num_rows();
            return ($result == 1) ? true : false;
        }

        return false;
    }

    private function loginUser($email, $password) {
        if($email && $password) {
            $sql = "SELECT * FROM users WHERE email = ? AND type = 1";
            $query = $this->db->query($sql, array($email));

            if($query->num_rows() == 1) {
                $result = $query->row_array();

                $hash_password = password_verify($password, $result['password']);
                if($hash_password === true) {
                    return $result; 
                }
                else {
                    return false;
                }
            }
            else {
                return false;
            }
        }
    }

    /*
        clears the session and redirects to login page
    */
    public function logout()
    {
        $logged_in_sess = array(
            'admin_user_id' => '',
            'admin_full_name' => '',
            'admin_email' => '',
            'admin_logged_in' => FALSE
        );

        //$this->session->set_userdata($logged_in_sess);
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }
}