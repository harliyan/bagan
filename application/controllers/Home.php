<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_home');
    $this->load->model('M_keluarga');
  }

  public function index()
  {

    $data = [
      'active_controller' => 'home',
      'active_function' => 'dashboard',
      'topbar' => 'topbar',
      'menu' => 'menu',
    ];

    $data['kecamatan']    = "home";
    $data['keluarga']   = $this->M_keluarga->keluarga();

    $this->load->view('front/global/index', $data);
  }
}
