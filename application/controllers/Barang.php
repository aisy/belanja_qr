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

  public function get_json($id){

    $data = json_decode(json_encode($this->Model_barang->get_id($id), true));

    // print_r($data);

    $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT))
        ->_display();
        exit;

  }


  public function tambah(){
    // echo $this->input->post('masa_berlaku');
    $this->Model_barang->insert();
    redirect('barang', 'refresh');
  }

  public function ubah_data($id){

    $data['barang'] = $this->Model_barang->get_id($id);

    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('barang/barang_update', $data);
    $this->load->view('javascript');

    if(isset($_POST['ubah'])){
      // echo $id;
      $this->Model_barang->update($id);
      redirect('barang', 'refresh');
    }
  }

  public function hapus_data($id){
    $hapus = $this->Model_barang->delete($id);
    redirect('barang', 'refresh');
  }

}
