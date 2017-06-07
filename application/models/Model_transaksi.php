<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model{

  // memasukkan data
  public function insert($data){

    

    $val = array(
      "id_transaksi"      => $data->id_transaksi,
      "id_user"           => $data->id_user,
      "tanggal_transaksi" => $data->tanggal_transaksi,
      "no_antrian"        => $data->no_antrian,
      "id_kasir"          => $this->session->userdata('id_kasir'),
      "status_transaksi"  => "belum di bayar",
      "total_harga"       => $data->total_harga
    );

    // $data adalah array yang menampung data dari name input $_POST[]

    $this->db->insert('transaksi', $val); //proses menyimpan ke database
  }

  // menampilkan data
  public function get(){
    $data =  $this->db->get('transaksi'); //proses untuk meminta data dari database
    return $data->result(); //menampilkan semua data dari database
  }

  public function transaksi_belum(){
    $data = $this->db->get_where('transaksi', array('status_transaksi'=>'belum', 'tanggal_transaksi'=>date('Y-m-d')));

    return $data->result();
  }

  // menampilkan data berdasarkan id transaksi
  public function get_id($id){
    $data = $this->db->get_where('transaksi', array('id_transaksi'=>$id));
    return $data->fisrt_row(); //menampilkan satu data sesuai dengan id data
  }

  // update data berdasarkan id transaksi
  public function update($id){
    $data = array(
      "nama"     => $this->input->post('nama', TRUE),
      "ttl"      => $this->input->post('ttl', TRUE),
      "alamat"   => $this->input->post('alamat', TRUE),
      "no_hp"    => $this->input->post('no_hp', TRUE),
      "username" => $this->input->post('username', TRUE),
      "password" => $this->input->post('password', TRUE)
    );
    $this->db->where('id_transaksi', $id); //proses mencari data berdasarkan id
    $this->db->update('transaksi', $data); //proses update
  }

  // hapus data berdasarkan id transaksi
  public function delete($id){
    $this->db->where('id_transaksi', $id); //proses mencari data berdasarkan id
    $this->db->delete('transaksi'); //proses hapus
  }

  // ===========================================================================
  // DETAIl TRANSAKSI
  // ===========================================================================


  public function insert_detail($data){
    $this->db->insert_batch('detail_transaksi', $data);
  }

}

?>
