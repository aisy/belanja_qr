<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kasir extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_kasir');
  }

  public function index(){
      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('kasir/kasir');
      $this->load->view('javascript');
  }

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
