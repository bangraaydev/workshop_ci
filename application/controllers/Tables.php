<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tables extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	
	public function index() 
	{				
		$data['content'] = 'Tables';
		$this->load->view('Template', $data);
	}
	
}