<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class UserAnggota extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}	


	public function loginAnggota($username,$password)
	{
		$this->db->select('no,nama,password');
		$this->db->from('anggota');
		$this->db->where('nama', $username);
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

}

/* End of file userAnggota.php */
/* Location: ./application/models/userAnggota.php */

 ?>