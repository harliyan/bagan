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

	public function getDataKeluarga()
	{
		$sql = " SELECT * FROM `struktur_organisasi` ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	
	public function hapus($id)
	{
		$hasil = $this->db->query("DELETE FROM struktur_organisasi WHERE id='$id'");
		return $hasil;
	}

	public function edit($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		return $this->db->get()->result();
	}

	public function inputDataKeluarga($data, $table)
	{
		$this->db->insert($table, $data);

	}
	public function editDataKeluarga($id, $data, $table)
	{
		$this->db->where('id', $id);
		$this->db->update($table, $data);
	}
}
