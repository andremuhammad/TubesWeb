<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class remas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function insertArtikel()
	{
		$artikel=array(
			'judul'=>$this->input->post('judul'),
			'artikel'=>$this->input->post('artikel')
			);
		$this->db->insert('artikel',$artikel);
	}

	public function insertPengumuman()
	{
		$pengumuman=array(
			'tema'=>$this->input->post('tema'),
			'tanggal'=>$this->input->post('tanggal'),
			'hari'=>$this->input->post('hari'),
			'tempat'=>$this->input->post('tempat'),
			'waktu'=>$this->input->post('waktu'),
			'kepada'=>$this->input->post('kepada')
			);
		$this->db->insert('pengumuman',$pengumuman);
	}

	public function insertremas()
	{
		$anggota=array(
		'nama'=>$this->input->post('nama'),
		'ttl'=>$this->input->post('ttl'),
		'kelamin'=>$this->input->post('kelamin'),
		'status'=>$this->input->post('status'),
		'instansi'=>$this->input->post('instansi'),
		'motto'=>$this->input->post('motto'),
		'foto'=>$this->upload->data('file_name'),
		'password'=>$this->input->post('password')
		);
		$this->db->insert('anggota',$anggota);
	}

	public function updateByNo($no)
	{
		$data=array
		(
			'nama'=>$this->input->post('nama'),
			'ttl'=>$this->input->post('ttl'),
			'kelamin'=>$this->input->post('kelamin'),
			'status'=>$this->input->post('status'),
			'instansi'=>$this->input->post('instansi'),
			'motto'=>$this->input->post('motto'),
			'foto'=>$this->upload->data('file_name'),
			'password'=>$this->input->post('password')

		);
		$this->db->where('no',$no);
		$this->db->update('anggota',$data);
	}

	public function getRemas($no)
	{
		$this->db->where('no',$no);
		$query=$this->db->get('anggota');
		return $query->result();
	}

	public function getPengumuman($no)
	{
		$this->db->where('no',$no);
		$query=$this->db->get('pengumuman');
		return $query->result();
	}
public function getAnggota($no)
	{
		$this->db->where('no',$no);
		$query=$this->db->get('anggota');
		return $query->result();
	}
	public function getBiodataQueryArray()
	{
		$query=$this->db->query("SELECT*FROM anggota");
		return $query->result_array();
	}

	public function getBiodataQueryObject()
	{
		$query=$this->db->query("SELECT*FROM anggota");
		return $query->result();
	}

	public function artikel()
	{
		$query=$this->db->query("SELECT*FROM artikel ORDER BY no desc");
		return $query->result();
	}

	public function pengumuman()
	{
		$query=$this->db->query("SELECT*FROM pengumuman ORDER BY no desc");
		return $query->result();
	}
	public function anggota()
	{
		$query=$this->db->query("SELECT*FROM anggota ORDER BY no desc");
		return $query->result();
	}

	public function delete($no)
	{
		$this->db->where('no',$no);
		$this->db->delete('anggota');
	}

	public function deletePengumuman($no)
	{
		$this->db->where('no',$no);
		$this->db->delete('pengumuman');
	}

	public function deleteArtikel($no)
	{
		$this->db->where('no',$no);
		$this->db->delete('artikel');
	}	
	
}

 ?>