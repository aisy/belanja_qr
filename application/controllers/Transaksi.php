<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_transaksi');
    $this->load->model('Model_antrian');
  }

  public function index(){


    $data['transaksi'] = $this->Model_transaksi->transaksi_belum();
      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('transaksi/transaksi', $data);
      $this->load->view('javascript');
      $this->load->view('dataTables');
  }

  // ===========================================================================
  // SERVICES
  // ===========================================================================

  public function Post(){

    $dataBarang = json_decode(file_get_contents('php://input'));

    $val2 = $dataBarang->items;

    $antri = $this->Model_antrian->post();

    $this->Model_transaksi->insert($dataBarang, $antri);
    $this->Model_transaksi->insert_detail($val2);

    // print_r($dataBarang);
    // print_r($val2);

    echo json_encode(array('status'=>'sukses','nomor_antrian'=>$antri));
  }

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
