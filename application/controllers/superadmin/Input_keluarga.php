<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_keluarga extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_foto');
		$this->load->model('M_keluarga');
		if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
			return redirect('logout');
		} else {
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'superadmin') {
				return redirect('logout');
			}
		}
	}

	public function index()
	{
		$data = [
			'active_controller' => 'input_keluarga',
			'active_function' => 'index_admin',
			'sidebar' => 'sidebar_admin'
		];
		$data['doc_foto']  = $this->M_foto->tampil_admin();
		$data['get_foto_count']	= $this->M_foto->get_foto_count();
		$data['keluarga']   = $this->M_keluarga->getDataKeluarga();
		$this->load->view('adminlte3/adminlte/index', $data);
	}

	public function list()
	{
		$data = [
			'active_controller' => 'input_keluarga',
			'active_function' => 'list',
			'sidebar' => 'sidebar_admin'
		];
		$data['doc_foto']  = $this->M_foto->tampil_admin();
		$data['get_foto_count']	= $this->M_foto->get_foto_count();
		$data['keluarga']   = $this->M_keluarga->getDataKeluarga();
		$this->load->view('adminlte3/adminlte/index', $data);
	}


	public function tambah()
	{
		$this->load->view('admin/input_foto');
	}

	public function tambah_aksi()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp|tiff';
		$config['max_size']             = 80000;
		$config['max_width']            = 80000;
		$config['max_height']           = 80000;

		$this->load->library('upload', $config);
		$this->upload->do_upload('path_foto');


		$data = array(
			'id' => $this->input->post('id'),
			'judul' => $this->input->post('judul'),
			'caption' => $this->input->post('caption'),
			'google_photo_link' => $this->input->post('google_photo_link'),
			'image_name' => $this->upload->data('file_name'),
			'image_type' => $this->upload->data('image_type'),
			'image_size_str' => $this->upload->data('image_size_str'),

		);
		$this->M_foto->input_data($data, 'tb_doc_foto');
		$this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
		redirect('superadmin/input_foto');
	}

	public function edit($id)
	{

		$tb_telecenter = $this->M_keluarga->edit('struktur_organisasi', $id);

		$data['tb_telecenter'] = $tb_telecenter;
		$data['active_controller'] = 'input_keluarga';
		$data['active_function'] = 'edit_admin';
		$data['sidebar'] = 'sidebar_details';
		$data['keluarga']   = $this->M_keluarga->getDataKeluarga();

		$this->load->view('adminlte3/adminlte/index', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		var_dump($id);
		$tag_ = trim('tag'.$this->input->post('tags'));
		$data = array(
			'title' => $this->input->post('title'),
			'nama' => $this->input->post('nama'),
			'parent_id' => $this->input->post('parent_id'),
			'status' => $this->input->post('status'),
			'status_hidup' => $this->input->post('status_hidup'),
			'tags' => $this->input->post('tags') == 0 ? null : $tag_,
			'status_pernikahan' => $this->input->post('status_pernikahan')
			
		);

		$where = array(
			'id' => $id
		);

		$this->M_keluarga->update($where, $data, 'struktur_organisasi');
		redirect('superadmin/input_keluarga/list');
	}

	public function hapus($id)
	{
		$this->M_keluarga->hapus($id);
		$this->session->set_flashdata('success', 'Data Berhasil dihapus');
		redirect('superadmin/input_keluarga/list'); //redirect
	}

	public function tambah_keluarga()
	{
		
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp|tiff';
		$config['max_size']             = 80000;
		$config['max_width']            = 80000;
		$config['max_height']           = 80000;

		$this->load->library('upload', $config);
		$this->upload->do_upload('foto');

		$tag_ = trim('tag'.$this->input->post('tags'));
		$data = array(
			'title' => $this->input->post('title'),
			'nama' => $this->input->post('nama'),
			'parent_id' => $this->input->post('parent_id'),
			'status' => $this->input->post('status'),
			'status_hidup' => $this->input->post('status_hidup'),
			'status_pernikahan' => $this->input->post('status_pernikahan'),
			'tags' => $this->input->post('tags') == 0 ? null : $tag_,
			'foto' => $_FILES['foto']['name'],
		);

		$this->M_keluarga->inputDataKeluarga($data, 'struktur_organisasi');

		if($this->input->post('tags') == 0){
			$id = $this->db->insert_id();
			$dataupdate = array(
				'tags' => trim('tag'.$id),
			);
			$this->M_keluarga->editDataKeluarga($id,$dataupdate, 'struktur_organisasi');
		}
		
		$this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
		redirect('superadmin/input_keluarga');
	}

}
	//end input data
