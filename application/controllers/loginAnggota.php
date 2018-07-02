<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAnggota extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url','date','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login_anggota');		
	}

	public function cekLoginAnggota()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('header');
			$this->load->view('login_anggota');
		} else 
		{
			redirect('Remas_view/userAnggota','refresh');
		}
	}

	public function cekDb($password)
	{
		$this->load->model('userAnggota');
		$username = $this->input->post('username');
		$result = $this->userAnggota->loginAnggota($username,$password);
		if($result)
		{
			$sess_array=array();
			foreach ($result as $row ) 
			{
				$sess_array=array('no'=>$row->no,'username'=>$row->nama);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}
		else
		{
			$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password tidak valid");
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('loginAnggota','refresh');
	}





}

/* End of file loginAnggota.php */
/* Location: ./application/controllers/loginAnggota.php */

 ?>