<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kasir extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_kasir');
  }

  public function index(){

      $data['kasir']=$this->Model_kasir->get();

      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('kasir/kasir',$data);
      $this->load->view('javascript');
      $this->load->view('dataTables');
  }

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
