<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_foto');
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
			'active_controller' => 'home',
			'active_function' => 'index_admin',
			'sidebar' => 'sidebar_admin',
		];
		$data['get_foto_count']	= $this->M_foto->get_foto_count();

		$this->load->view('adminlte3/adminlte/index', $data);
	}
}
