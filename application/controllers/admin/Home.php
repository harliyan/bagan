<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_foto');
		// $this->load->model('M_video');
		// $this->load->model('M_file');
		// $this->load->model('M_sambutan');
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
			'active_controller' => 'home',
			'active_function' => 'index',
			'sidebar' => 'sidebar',
		];
		$data['get_foto_count']	= $this->M_foto->get_foto_count();
		// $data['get_video_count']	= $this->M_video->get_video_count();
		// $data['get_sambutan_count']	= $this->M_sambutan->get_sambutan_count();
		// $data['get_file_count']	= $this->M_file->get_file_count();

		$this->load->view('adminlte3/adminlte/index', $data);
	}
}
