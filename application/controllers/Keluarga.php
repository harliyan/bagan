<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') or exit('No direct script access allowed');

class Keluarga extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_keluarga');
  }

  public function index()
  {

    $data = [
      'active_controller' => 'keluarga',
      'active_function' => 'index',
      'topbar' => 'topbar',
      'menu' => 'menu',
    ];

    $data['keluarga']   = $this->M_keluarga->keluarga();

    $this->load->view('front/global/index', $data);
  }
}
