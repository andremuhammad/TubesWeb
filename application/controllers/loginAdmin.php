<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class loginAdmin extends CI_Controller {

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
		$this->load->view('login_admin');
	}
	public function cekLoginAdmin()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('header');
			$this->load->view('login_admin');
		} else 
		{
			if ($this->session->userdata('logged_in')['level'] != 'admin') {
				redirect('Remas_view/pengumumanAnggota','refresh');
			}else{
				redirect('Remas_view/userAdmin','refresh');
			}
			
		}
	}

	public function cekDb($password)
	{
		$this->load->model('userAdmin');
		$username = $this->input->post('username');
		$result = $this->userAdmin->loginAdmin($username,$password);
		if($result)
		{
			$sess_array=array();
			foreach ($result as $row ) 
			{
				$sess_array=array(
					'id'=>$row->id,
					'username'=>$row->username,
					'level'=>$row->level
				);
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
		redirect('loginAdmin','refresh');
	}

	public function register()
	{
				$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			if ($this->form_validation->run()==false) 
			{
				$this->load->view('tambah_user');		
			}
			else
			{
				$set = $this->input->post();
				$set['level'] = "user";
				$this->db->insert('user',$set);
				redirect('loginAdmin','refresh');
			}
	}
	public function create()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			
			$this->load->model('userAdmin');
			if ($this->form_validation->run()==false) 
			{
				$this->load->view('register');		
			}
			else
			{
					$this->userAdmin->register();
					$this->load->view('wisata_sukses');
				
			}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
 ?>