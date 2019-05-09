<?php 
class Model_auth extends CI_Model{
 
 	public $table = 'user';

	function __construct(){
		parent::__construct();	
	}
 
	public function check_user($username, $password) {
		$query = $this->db->query("select * from user where username='$username' AND password='$password' limit 1");
		return $query;
	}

	public function check_username($username)
	{
		$query = $this->db->query("select * from user where username='$username' ");
		return $query;
	}

}