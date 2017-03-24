<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_barang');
  }

  function index(){

    $data['barang'] = $this->Model_barang->get();

    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('barang/barang', $data);
    $this->load->view('javascript');
    $this->load->view('dataTables');
  }


  public function tambah(){
    // echo $this->input->post('masa_berlaku');
    $this->Model_barang->insert();

  }

}
