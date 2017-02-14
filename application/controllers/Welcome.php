<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('head');
		$this->load->view('homepage/homepage_index');
		$this->load->view('js');
	}
}
