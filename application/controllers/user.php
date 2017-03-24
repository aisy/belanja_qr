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
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
