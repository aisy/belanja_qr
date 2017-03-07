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

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
