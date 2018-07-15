<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class CetakModel extends CI_Model {

public function view()
{
	$this->db->select("kepada,tema,DATE_FORMAT(tanggal,'%d-%m-%y') as tanggal,hari,tempat,waktu");
	$query=$this->db->get('pengumuman');
	return $query->result();
}	

public function view_row($no)
{
	$this->db->select("kepada,tema,DATE_FORMAT(tanggal,'%d-%m-%y') as tanggal,hari,tempat,waktu");
	$this->db->where('no',$no);
	$query=$this->db->get('pengumuman');
	return $query->result();


}

}

/* End of file cetak_model.php */
/* Location: ./application/models/cetak_model.php */
 ?>