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

    // upload image
    $config['upload_path'] = './gambar_produk/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']  = '10000';
    // $config['max_width']  = '1024';
    // $config['max_height']  = '768';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('gambar-upload')){
      $error = array('error' => $this->upload->display_errors());
      // print_r($error);
    }
    else{
      $data = array('upload_data' => $this->upload->data());
      // echo "success";
    }

    // proses upload data barang
    $this->Model_barang->insert();

    // cek id_barang
    $this->db->order_by('id_barang', 'desc');
    $this->db->from('barang');
    $data_barang = $this->db->get()->first_row();

    $id_barang = $data_barang->id_barang;

    // library qr code
    $this->load->library('ciqrcode');

    $params['data'] = base_url('barang/get_json/').$id_barang;
    $params['level'] = 'H';
    $params['size'] = 10;
    $params['savename'] = FCPATH.'qrcode/'.$id_barang.'.png';
    $this->ciqrcode->generate($params);

    // redirect('barang', 'refresh');
  }

  public function ubah_data($id){

    $data['barang'] = $this->Model_barang->get_id($id);

    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('barang/barang_update', $data);
    $this->load->view('javascript');

    if(isset($_POST['ubah'])){
      // echo $id;

      $config['upload_path'] = './gambar_produk/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '10000';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('gambar-upload')){
        $error = array('error' => $this->upload->display_errors());
        // print_r($error);
      }
      else{
        $data = array('upload_data' => $this->upload->data());
        // echo "success";
      }

      $this->Model_barang->update($id);
      redirect('barang', 'refresh');
    }
  }

  public function hapus_data($id){
    $hapus = $this->Model_barang->delete($id);
    redirect('barang', 'refresh');
  }

}
