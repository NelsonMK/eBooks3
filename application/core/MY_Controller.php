<?php

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}

class Book_Controller extends MY_Controller 
{
	
	var $permission = array();

	public function __construct() 
	{
		parent::__construct();

        if (!session('visitor')) {
            session('visitor', 1);

            $today = date('Y-m-d');

            $sql = "SELECT * FROM visits WHERE visit_date = ?";
            $query = $this->db->query($sql, array($today));

            if($query->num_rows() > 0) {

                $result = $query->row_array();

                $count = $result['value'];

                $new_count = $count + 1;

                $value = array('value' => $new_count);

                $this->db->where('visit_date', $today);
                $this->db->update('visits', $value);

            }
            else {
                $data = array(
                    'value' => 1,
                    'visit_date' => $today
                );

                $this->db->insert('visits', $data);
            }

        }
	}

	public function logged_in()
	{
		$session_data = $this->session->userdata();
		if($session_data['logged_in'] == TRUE) {
			redirect('dashboard', 'refresh');
		}
	}

	public function not_logged_in()
	{
		$session_data = $this->session->userdata();
		if($session_data['logged_in'] == FALSE) {
			redirect('auth/login', 'refresh');
		}
	}

	public function render_template($page = null, $data = array())
	{
		$head_data['category'] = $this->db->get('category')->result();

		$this->load->view('templates/header', $head_data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer',$data);
	}

	public function Logs($filename,$content)
	{
		$data= "\n".date("h:i:sa d,m,Y")."\t".$content;
		write_file(APPPATH.'logs/'.$filename, $data, 'a+');
	}

}

/**
 * Used to control the admin side of the application
 */
class Admin_Controller extends MY_Controller
{

	var $permission = array();
	
	function __construct()
	{
		parent::__construct();

		/*$group_data = array();
		if(empty($this->session->userdata('admin_logged_in'))) {
			$session_data = array('admin_logged_in' => FALSE);
			$this->session->set_userdata($session_data);
		}
		else {
			$user_id = $this->session->userdata('id');
			$this->load->model('model_groups');
			$group_data = $this->model_groups->getUserGroupByUserId($user_id);
			
			$this->data['user_permission'] = unserialize($group_data['permission']);

			$this->permission = unserialize($group_data['permission']);
		}*/
	}

	public function logged_in()
	{
		if(session('admin_logged_in') == TRUE) {
			redirect('admin/dashboard', 'refresh');
		}
	}

	public function not_logged_in() {
		if(session('admin_logged_in') == FALSE) {
			redirect('admin/login', 'refresh');
		}
	}

	public function render_template($page = null, $data = array())
	{

		$this->load->view('admin/templates/header');
		$this->load->view($page, $data);
		$this->load->view('admin/templates/footer');
	}

	public function Logs($filename,$content)
	{
		$data= "\n".date("h:i:sa d,m,Y")."\t".$content;
		write_file(APPPATH.'logs/'.$filename, $data, 'a+');
	}
}