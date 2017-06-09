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
    redirect('User', 'refresh');
  }

  public function update($id){

    $data['update'] = $this->Model_user->get_id($id);

    print_r($data['update']);

    if(isset($_POST['update'])){
      $this->Model_user->update($id);
      redirect('User', 'refresh');
    }

    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('user/user_update', $data);
    $this->load->view('javascript');

  }

  public function hapus($id){
    $this->Model_user->delete($id);
    redirect('User', 'refresh');
  }

  // API login
  public function login(){

    $dataLogin = json_decode(file_get_contents('php://input'));

    $data = $this->Model_user->login($dataLogin);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($data, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function get_user($id){

    $data = $this->Model_user->get_id($id);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($data, JSON_PRETTY_PRINT))
      ->_display();
      exit;

  }

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
