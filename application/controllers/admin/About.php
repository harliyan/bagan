<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_all');
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
			'active_controller' => 'about',
			'active_function' => 'index',
			'sidebar' => 'sidebar',
		];

		$this->load->view('adminlte3/adminlte/index', $data);
	}
}
