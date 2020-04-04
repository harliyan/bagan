<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') or exit('No direct script access allowed');

class Keluarga extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_keluarga');
    $this->load->model('M_foto');
  }


  public function index()
  {
    $data = [
      'active_controller' => 'keluarga',
      'active_function' => 'index',
      'topbar' => 'topbar',
      'menu' => 'menu',
    ];
    $data['doc_foto']  = $this->M_foto->tampil_admin();
    $data['get_foto_count'] = $this->M_foto->get_foto_count();
    $data['keluarga']   = $this->M_keluarga->getDataKeluarga();
     $this->load->view('front/global/index', $data);
  }
}
