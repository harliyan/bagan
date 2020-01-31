<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_foto extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_foto');
		if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
			return redirect('logout');
		} else {
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'admin') {
				return redirect('logout');
			}
		}
	}

	public function index()
	{
		$data = [
			'active_controller' => 'input_foto',
			'active_function' => 'index',
			'sidebar' => 'sidebar'
		];
		$data['doc_foto']  = $this->M_foto->tampil_admin();
		$data['get_foto_count']	= $this->M_foto->get_foto_count();
		$this->load->view('adminlte3/adminlte/index', $data);
	}

	public function tambah()
	{
		$this->load->view('admin/input_foto');
	}

	public function tambah_aksi()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 8000;
		$config['max_width']            = 6000;
		$config['max_height']           = 6000;

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
		$encode_data = json_encode($data);
		// echo $encode_data;

		$this->M_foto->input_data($encode_data, 'tb_doc_foto');
		$this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
		redirect('admin/input_foto');
	}

	public function edit($id)
	{

		$tb_telecenter = $this->M_foto->edit('tb_doc_foto', $id);

		$data['tb_telecenter'] = $tb_telecenter;
		$data['active_controller'] = 'input_foto';
		$data['active_function'] = 'edit';
		$data['sidebar'] = 'sidebar_details';

		$this->load->view('adminlte3/adminlte/index', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		// var_dump($id_telecenter);
		// die();
		$judul = $this->input->post('judul');
		$caption = $this->input->post('caption');


		$data = array(
			'id' => $id,
			'judul' => $judul,
			'caption' => $caption,

		);

		$where = array(
			'id' => $id
		);

		$this->M_foto->update($where, $data, 'tb_doc_foto');
		redirect('admin/input_foto');
	}

	public function hapus($id)
	{
		$this->M_foto->hapus($id);
		$this->session->set_flashdata('success', 'Data Berhasil dihapus');
		redirect('admin/input_foto'); //redirect
	}
}
	//end input data
