<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model{

  // memasukkan data
  public function insert($data, $antri){

    $val = array(
      // "id_transaksi"      => $id_transaksi,
      "id_user"           => $data->id_user,
      "tanggal_transaksi" => date('Y-m-d'),
      "no_antrian"        => $antri,
      // "id_kasir"          => $this->session->userdata('id_kasir'),
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

    $this->db->order_by('id_transaksi', 'desc');
    $this->db->from('transaksi');
    $this->db->where('status_transaksi', "belum di bayar");
    // $this->db->where('tanggal_transaksi', date('Y-m-d'));
    $data = $this->db->get();

    return $data->result();
  }

  // menampilkan data berdasarkan id transaksi
  public function get_id($id){
    $data = $this->db->get_where('transaksi', array('id_transaksi'=>$id));
    return $data->first_row(); //menampilkan satu data sesuai dengan id data
  }

  // menampilkan data berdasarkan id user
  public function get_history($id){

    $this->db->order_by('id_transaksi', 'desc');
    $this->db->from('transaksi');
    $this->db->where('id_user', $id);
    $data = $this->db->get();

    return $data->result(); //menampilkan satu data sesuai dengan id data
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


  public function konfirmasi($id){
    $data = array(
      "id_kasir"          => $this->session->userdata('id_kasir'),
      "status_transaksi"  => "sudah di bayar"
    );

    $this->db->where('id_transaksi', $id);
    $this->db->update('transaksi', $data);
  }

  // ===========================================================================
  // DETAIl TRANSAKSI
  // ===========================================================================

  public function get_detail($id){

    $this->db->from('detail_transaksi');
    // $this->db->join('transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
    $this->db->join('barang', 'barang.id_barang = detail_transaksi.id_barang');
    $this->db->where('detail_transaksi.id_transaksi', $id);
    $data = $this->db->get();

    return $data->result();
  }

  public function insert_detail($data){

    $this->db->order_by('id_transaksi', 'desc');
    $this->db->from('transaksi');
    $data_transaksi = $this->db->get()->first_row();

    $id_transaksi = $data_transaksi->id_transaksi;

    foreach ($data as $key) {
      $real = array(
        // "id_detail"      => $key->,
        "id_transaksi"   => $id_transaksi,
        "id_barang"      => $key->id_barang,
        "harga_barang"   => $key->harga_barang,
        "jumlah_barang"  => $key->jumlah_barang
      );
      $this->db->insert('detail_transaksi', $real);
    }

    return $data_transaksi;
    // $this->db->insert_batch('detail_transaksi', $data);
  }

}

?>
