<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Model_barang');
        // $this->load->model('Model File');
        
    }

    public function index(){
        
        $data['barang'] = $this->Model_barang->get();
        
        $this->load->view('head');
        $this->load->view('header2');
        $this->load->view('gudang/gudang', $data);
        // $this->load->view('gudang/permintaan');
        $this->load->view('javascript');
        $this->load->view('dataTables');
        
    }

}

/* End of file Controllername.php */
