<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_home');
  }

  public function index()
  {

    $data = [
      'active_controller' => 'about',
      'active_function' => 'index',
      'topbar' => 'topbar',
      'menu' => 'menu',
    ];

    $this->load->view('front/global/index', $data);
  }
}
