<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_auth');
    }
	
	public function index() 
	{				
		$this->load->view('Auth');
	}

	public function login_process(){
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$result = $this->Model_auth->check_user($username, $password); 
	 
			if($result->num_rows() > 0){
				foreach ($result->result() as $row) {
					$id = $row->id;
					$username = $row->username;
					$nama_lengkap = $row->nama_lengkap;
				}
	 
				$newdata = array(
				    'id'  => $id,
				    'username' => $username,
				    'nama_lengkap' => $nama_lengkap,
				);
				
				//set up session data
				$this->session->set_userdata($newdata);
				redirect('Dashboard');

			} else {
				redirect('Auth');
			}
		}
	}

	public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama_lengkap');
        session_destroy();
        redirect('Auth');
    }
	
}