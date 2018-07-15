
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Remas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date','url','form');
		$this->load->model('remas_model');
		$this->load->library('form_validation');
	}

	public function data_server()
	{
		$this->load->library('Datatables');
		$this->load->model('remas_model');
		$data['data']=$this->remas_model->anggota();
		echo json_encode($data);
	}

	public function data()
	{
		$this->load->model('remas_model');
		$data['remas_artikel']=$this->remas_model->artikel();
		$this->load->view('artikel',$data);
	}

	public function tambahArtikel()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');

			$this->load->model('remas_model');
			if ($this->form_validation->run()==false)
			{
				$this->load->view('boot');
				$this->load->view('tambah_artikel');
			}
			else
			{

				$this->remas_model->insertArtikel();
				$this->load->view('header_anggota');
			}
	}

	public function tambahPengumuman()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('tema', 'tema', 'trim|required');

			$this->load->model('remas_model');
			if ($this->form_validation->run()==false)
			{
				$this->load->view('header_admin');
				$this->load->view('pengumuman_admin');
			}
			else
			{
					$this->remas_model->insertPengumuman();
					$this->load->view('header_admin');
					$this->load->model('remas_model');
					$data['pengumuman']=$this->remas_model->pengumuman();
					$this->load->view('pengumuman_admin',$data);
			}
	}

	public function create()
	{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');

			$this->load->model('remas_model');
			if ($this->form_validation->run()==false)
			{
				$this->load->view('boot');
				$this->load->view('tambah_remas');		
			}
			else
			{
				$config['upload_path']		= './assets/upload/';
				$config['allowed_types']	= 'gif|jpg|png';
				$config['max_size']			= 1000000000;
				$config['max_width']		=10240;
				$config['max_height']		=7680;

				$this->load->library('upload',$config);
				if(! $this->upload->do_upload('foto'))
				{
					$error=array('error'=>$this->upload->display_errors());
					$this->load->view('boot');
					$this->load->view('tambah_remas', $error);
				}
				else
				{
					$image_data=$this->upload->data();

					$configer=array
					(
						'image_library'=>'gd2',
						'source_image'=>$image_data['full_path'],
						'maintain_ratio'=>TRUE,
						'width'=>250,
						'height'=>250,);

					$this->load->library('image_lib',$config);

					$this->image_lib->clear();
					$this->image_lib->initialize($configer);
					$this->image_lib->resize();

					$this->remas_model->insertremas();
					$this->load->view('remas_sukses');
				}

			}
	}

	public function update($no)
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('kelamin', 'gender', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('ttl', 'ttl', 'trim|required');
		$this->form_validation->set_rules('instansi', 'instansi', 'trim|required');
		

		$data['anggota']=$this->remas_model->getRemas($no);

		if($this->form_validation->run()==false)
		{
			$this->load->view('edit_remas', $data);
		}
		else
		{
			$config['upload_path']		= './assets/upload/';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 1000000000;
			$config['max_width']		=10240;
			$config['max_height']		=7680;

			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('foto'))
			{
				$error=array('error'=>$this->upload->display_errors());
				$this->load->view('edit_remas', $error);
			}
			else
			{
				$image_data = $this->upload->data();
				$configer = array (
					'image_library' => 'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 250,
					'height' => 250,
					);
				$this->load->library('image_lib', $config);

				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$this->remas_model->updateByNo($no);
				$this->load->view('header_admin');
				$this->load->view('anggota_ajax_admin');
			}


		}
	}

	public function delete($no)
	{
		$data['anggota'] = $this->db->get('anggota')->result();
		$this->remas_model->delete($no);
		$this->load->view('header_admin');
		$this->load->view('anggota_ajax_admin',$data);
	}
	public function deletePengumuman($no)
	{
		$this->remas_model->deletePengumuman($no);


		$this->load->view('header_admin');

		$this->load->model('remas_model');

		$data['pengumuman_admin']=$this->remas_model->pengumuman();
		$this->load->view('pengumuman_admin',$data);

	}
	public function deleteArtikel($no)
	{
		$this->remas_model->deleteArtikel($no);


		$this->load->view('header_admin');

		$this->load->model('remas_model');

		$data['remas_artikel']=$this->remas_model->artikel();

		$this->load->view('artikel_admin',$data);
	}



}

/* End of file wisata.php */
/* Location: ./application/controllers/wisata.php */
 ?>
