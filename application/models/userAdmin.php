<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class userAdmin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function loginAdmin($username,$password)
	{
		$this->db->select('id,username,password,level');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password',$password);
		$query=$this->db->get();
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	public function registerAdmin()
	{
		$object=array(
		'username'=>$this->input->post('username'),
		'password'=>MD5($this->input->post('password'))
		);
		$this->db->insert('user',$object);
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */
 ?>