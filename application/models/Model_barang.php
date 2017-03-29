<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_barang extends CI_Model {

  // memasukkan data
  public function insert(){

    // $data adalah array yang menampung data dari name input $_POST[]
    $data = array(
      "nama_barang"            => $this->input->post('nama_barang', TRUE),
      "distributor"            => $this->input->post('distributor', TRUE),
      "masa_berlaku"           => $this->input->post('masa_berlaku', TRUE),
      "tanggal_masuk_barang"   => $this->input->post('tanggal_masuk_barang', TRUE),
      "berat"                  => $this->input->post('berat', TRUE),
      "harga"                  => $this->input->post('harga', TRUE),
      "stok"                   => $this->input->post('stok', TRUE)
    );
    $this->db->insert('barang', $data); //proses menyimpan ke database
  }

  // menampilkan data
  public function get(){
    $data =  $this->db->get('barang'); //proses untuk meminta data dari database
    return $data->result(); //menampilkan semua data dari database
  }

  // menampilkan data berdasarkan id barang
  public function get_id($id){
    $data = $this->db->get_where('barang', array('id_barang'=>$id));
    return $data->first_row(); //menampilkan satu data sesuai dengan id data
  }

  // update data berdasarkan id barang
  public function update($id){
    $data = array(
      "id_barang"              => $this->input->post('id_barang', TRUE),
      "nama_barang"            => $this->input->post('nama_barang', TRUE),
      "distributor"            => $this->input->post('distributor', TRUE),
      "masa_berlaku"           => $this->input->post('masa_berlaku', TRUE),
      "tanggal_masuk_barang"   => $this->input->post('tanggal_masuk_barang', TRUE),
      "berat"                  => $this->input->post('berat', TRUE),
      "harga"                  => $this->input->post('harga', TRUE),
      "stok"                   => $this->input->post('stok', TRUE)
    );
    $this->db->where('id_barang', $id); //proses mencari data berdasarkan id
    $this->db->update('barang', $data); //proses update
  }

  // hapus data berdasarkan id barang
  public function delete($id){
    $this->db->where('id_barang', $id); //proses mencari data berdasarkan id
    $this->db->delete('barang'); //proses hapus
  }


}

/* End of file Model_kasir.php */
/* Location: ./application/models/Model_kasir.php */
