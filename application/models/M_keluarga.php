<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_keluarga extends CI_Model
{

	public function tampil($limit, $start)
	{
		// $sql = " SELECT * FROM `tb_doc_sambutan` " ;
		// $data = $this->db->query($sql);
		// return $data->result();
		return $data = $this->db->get('tb_doc_sambutan', $limit, $start)->result();
	}

	public function keluarga()
	{
		$query = $this->db->get('tb_bagan');  // Produces: SELECT * FROM mytable
		return $query->result();
	}
}
