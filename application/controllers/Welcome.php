<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_kasir');
	}

	public function index(){

		$this->load->view('head');
		$this->load->view('homepage/homepage_index');
		$this->load->view('js');
	}

	public function halaman_utama(){
		$this->load->view('head');

	}

	public function login(){
		# code...
		$log = $this->Model_kasir->login();

		// print_r($log);

		if(count($log)>=1){
			echo "login sukses";

			$array = array(
				'id_kasir' => $log->id_kasir,
				'nama'		 => $log->nama,
				'username' => $log->username
			);

			$this->session->set_userdata($array);

			redirect('Transaksi', 'refresh');

		}else{

			echo "username atau password salah";
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome', 'refresh');
	}
}
