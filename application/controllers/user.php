<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function __construct(){
    parent::__construct();
    $this->load->model('Model_user');
  }

  public function index(){

      $data['user']=$this->Model_user->get();

      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('user/user',$data);
      $this->load->view('javascript');
      $this->load->view('dataTables');
  }

  public function tambah(){

    // username generator
    $nama = strtolower($this->input->post('nama'));
    $nama_pisah = explode(" ", $nama);
    $username = $nama_pisah[0].substr($nama_pisah[1], 0,2);

    // password generator
    $nama_awal = strtoupper(substr($nama_pisah[0], 0,2));
    $tgl = explode("-", $this->input->post('ttl'));
    $password = $tgl[0].$tgl[1].$tgl[2].$nama_awal;

    $this->Model_user->insert($username, $password);

    

  }
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
