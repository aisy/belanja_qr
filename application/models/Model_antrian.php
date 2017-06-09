<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_antrian extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function post(){

    //menentukan tanggal
    $tgl        = date('Y-m-d');

    //memeriksa apakah nomor antrian sesuai jumlah data berdasarkan tanggal
    $totalAntri = count($this->db->get_where('antrian', array('tgl'=>$tgl))->result());

    // menambah nilai+1 untuk antrian
    $antri = $totalAntri+1;

    // memasukkan data antri ke db
    $data = array(
      'tgl'           => $tgl,
      'nomor_urut' => $antri
    );
    $this->db->insert('antrian', $data);

    return $antri;
  }

}
