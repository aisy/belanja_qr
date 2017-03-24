<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail extends CI_Model{

  // memasukkan data
  public function insert(){

    // $data adalah array yang menampung data dari name input $_POST[]
    $data = array(
      "id_detail"      => $this->input->post('id_detail', TRUE),
      "id_transaksi"   => $this->input->post('nama', TRUE),
      "id_barang"      => $this->input->post('ttl', TRUE),
      "harga_barang"   => $this->input->post('alamat', TRUE),
      "jumlah_barang"  => $this->input->post('no_hp', TRUE),
      
    );
    $this->db->insert('detail', $data); //proses menyimpan ke database
  }

  // menampilkan data
  public function get(){
    $data =  $this->db->get('detail'); //proses untuk meminta data dari database
    return $data->result(); //menampilkan semua data dari database
  }

  public function detail_belum(){
    $data = $this->db->get_where('detail', array('status_detail'=>'belum', 'tanggal_detail'=>date('Y-m-d')));

    return $data->result();
  }

  // menampilkan data berdasarkan id detail
  public function get_id($id){
    $data = $this->db->get_where('detail', array('id_detail'=>$id));
    return $data->fisrt_row(); //menampilkan satu data sesuai dengan id data
  }

  // update data berdasarkan id detail
  public function update($id){
    $data = array(
      "id_detail"      => $this->input->post('id_detail', TRUE),
      "id_transaksi"   => $this->input->post('nama', TRUE),
      "id_barang"      => $this->input->post('ttl', TRUE),
      "harga_barang"   => $this->input->post('alamat', TRUE),
      "jumlah_barang"  => $this->input->post('no_hp', TRUE),
    );
    $this->db->where('id_detail', $id); //proses mencari data berdasarkan id
    $this->db->update('detail', $data); //proses update
  }

  // hapus data berdasarkan id detail
  public function delete($id){
    $this->db->where('id_detail', $id); //proses mencari data berdasarkan id
    $this->db->delete('detail'); //proses hapus
  }

}

?>
