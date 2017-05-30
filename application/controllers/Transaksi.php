<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_transaksi');
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

    $this->Model_transaksi->insert($dataBarang);
    // $this->Model_transaksi->insert_detail($val2);

    print_r($dataBarang);
    // print_r($val2);
  }

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
