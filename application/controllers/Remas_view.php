<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Remas_view extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('date','url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('header'); 
		$this->load->view('whome');
		$this->load->view('footer');
	}

	public function loginHome()
	{
		$this->load->view('login_home');
	}

	public function userAdmin()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data=$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
		}
		else
		{
			redirect('loginAdmin','refresh');
		}
		
		$this->load->view('header_admin');
		$data['anggota'] = $this->db->get('anggota')->result();
		$this->load->view('anggota_ajax_admin',$data);		
	}

	public function userAnggota()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data=$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
		}
		else
		{
			redirect('loginAnggota','refresh');
		}

		$this->load->view('header_anggota');
		$this->load->model('remas_model');	
		$data['pengumuman']=$this->remas_model->pengumuman();
		$this->load->view('pengumuman_anggota');
		
	}

	public function artikel()
	{
		$this->load->view('header'); 

		$this->load->model('remas_model');	

		$data['remas_artikel']=$this->remas_model->artikel();

		$this->load->view('artikel',$data);
	}

	public function artikelAdmin()
	{
		$this->load->view('header_admin'); 

		$this->load->model('remas_model');	

		$data['remas_artikel']=$this->remas_model->artikel();

		$this->load->view('artikel_admin',$data);
	}	

	public function tambahArtikel()
	{
		$this->load->view('header_anggota'); 
		$this->load->view('tambah_artikel');
	}


	public function tentang()
	{
		$this->load->view('header'); 
		$this->load->view('tentang');
	}

	public function anggotaAdmin()
	{
		$this->load->view('header_admin'); 
		$this->load->model('remas_model');	

		$data['anggota']=$this->remas_model->anggota();

		$this->load->view('anggota_ajax_admin',$data);
	}

	public function location()
	{
		$this->load->view('header'); 
		$this->load->view('location');
	}

	public function datatable_ajax()
	{
		$this->load->view('header'); 
		$this->load->view('anggota_ajax');
	}

	public function Anggota()
	{
		$this->load->view('header_anggota'); 
		$this->load->view('anggota_ajax');
		$this->load->view('boot');

	}

	public function tambahAnggota()
	{
		$this->load->view('boot');
		$this->load->view('tambah_anggota');
	}

	public function pengumumanAdmin()
	{
		$this->load->view('header_admin');
		$this->load->model('remas_model');	
		$data['pengumuman']=$this->remas_model->pengumuman();
		$this->load->view('pengumuman_admin',$data);
	}

	public function pengumumanAnggota()
	{
		$this->load->view('header_anggota');
		$this->load->model('remas_model');	
		$data['pengumuman']=$this->remas_model->pengumuman();
		$this->load->view('pengumuman_anggota',$data);
	}

	public function pengumuman()
	{
		$this->load->view('header'); 

		$this->load->model('remas_model');	

		$data['pengumuman']=$this->remas_model->pengumuman();

		$this->load->view('pengumuman',$data);
	}

	public function preview($no)
	{
		$this->load->model('remas_model');
		$data['preview']=$this->remas_model->getPengumuman($no);
		$this->load->view('preview', $data);		
	}

	public function lokasi()
	{
		$this->load->view('header');
		$this->load->view('lokasi');
	}

}

/* End of file Remas_view.php */
/* Location: ./application/controllers/Remas_view.php */
 ?>