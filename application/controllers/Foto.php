<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') or exit('No direct script access allowed');

class Foto extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->helper('url');
    $this->load->model('M_home');
    $this->load->model('M_foto');
  }

  public function index()
  {
    $keyword = null;
    if ($this->input->post('search')) {
      $keyword = $this->input->post('keyword');
    }

    $data = [
      'active_controller' => 'foto',
      'active_function' => 'index',
      'topbar' => 'topbar',
      'menu' => 'menu',
    ];

    $coba = 2;
    $data['page']           = $this->uri->segment(3);                    
    $config['base_url']     = site_url('foto/index');                     
    $config['total_rows']   = $this->db->count_all('tb_doc_foto');        
    $config['per_page']     = 6;                                          
    $choice                 = $config["total_rows"] / $config["per_page"];
    $config["num_links"]    = floor($coba);

    if ($keyword == null) {
      $data['doc_foto']  = $this->M_foto->tampil($config['per_page'], $data['page']);
    } else {
      $data['doc_foto']  = $this->M_foto->search($keyword);
    }

    $data['get_foto_count'] = $this->M_foto->get_foto_count();

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $this->pagination->initialize($config);

    //Bikin pagination di bawah berdasarkan fungsi create_links 
    $data['pagination'] = $this->pagination->create_links();

    $this->load->view('front/global/index', $data);
  }


  public function details($id)
  {
    $tb_doc_foto = $this->M_foto->getDetail('tb_doc_foto', $id);  

    $data_header['meta_title'] = $tb_doc_foto->judul;
    $data_header['meta_image'] = base_url('uploads/'. $tb_doc_foto -> image_name);    
    $data_header['meta_site_name'] = site_url();    
    $data_header['meta_desc'] = $tb_doc_foto->caption;    
    

    $data['data_header']= $data_header;
    $data['tb_doc_foto'] = $tb_doc_foto;
    $data['active_controller'] = 'foto';
    $data['active_function'] = 'details';
    $data['topbar'] = 'topbar_details';
    $data['menu'] = 'menu_details';
    $this->load->view('front/global/index', $data);
  }

   public function download($id)
  {
    $tb_doc_foto = $this->M_foto->download('tb_doc_foto', $id);

    $data['tb_doc_foto'] = $tb_doc_foto;
    $data['active_controller'] = 'foto';
    $data['active_function'] = 'download';
    $data['topbar'] = 'topbar_details';
    $data['menu'] = 'menu_details';


    $this->load->view('front/global/index', $data);
  }

   public function tambah_aksi()
  {
    $id = $this->input->post('id');
    $google_photo_link = $this->input->post('google_photo_link');
    $data = array(
      'id_record' => $this->input->post('id_record'),
      'id' => $this->input->post('id'),
      'judul' => $this->input->post('judul'),
      // 'image_name' => $this->input->post('image_name'),
      'google_photo_link' => $this->input->post('google_photo_link'),
      'nik' => $this->input->post('nik'),
    );

    $this->M_foto->input_nik($data, 'tb_record_foto');
    redirect($google_photo_link);

    // echo site_url('articel/' . $id . '/' . url_title($title));
  }
}
