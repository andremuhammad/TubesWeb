<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('cetakModel');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
	}

	public function index()
	{
		$data['pengumuman']=$this->cetakModel->view_row();
		$this->load->view('pengumuman',$data);
	}

	public function cetakPdf($no)
	{
		$data['print']=$this->cetakModel->view_row($no);
		$this->load->view('print', $data);
		$paper_size='A4';
		$orientation='landscape';
		$html=$this->output->get_output();

		$dompdf=new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan.pdf");
		unset($html);
		unset($dompdf);
	}

}

/* End of file cetak.php */
/* Location: ./application/controllers/cetak.php */
 ?>