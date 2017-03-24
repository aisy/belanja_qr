<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {

  // memasukkan data
  public function insert(){

    // $data adalah array yang menampung data dari name input $_POST[]
    $data = array(
      "id_user" => $this->input->post('id_user', TRUE),
      "nama"     => $this->input->post('nama', TRUE),
      "ttl"      => $this->input->post('ttl', TRUE),
      "alamat"   => $this->input->post('alamat', TRUE),
      "no_hp"    => $this->input->post('no_hp', TRUE),
      "username" => $this->input->post('username', TRUE),
      "password" => $this->input->post('password', TRUE)
    );
    $this->db->insert('pelanggan', $data); //proses menyimpan ke database
  }

  // menampilkan data
  public function get(){
    $data =  $this->db->get('pelanggan'); //proses untuk meminta data dari database
    return $data->result(); //menampilkan semua data dari database
  }

  // menampilkan data berdasarkan id user
  public function get_id($id){
    $data = $this->db->get_where('pelanggan', array('id_user'=>$id));
    return $data->fisrt_row(); //menampilkan satu data sesuai dengan id data
  }

  // update data berdasarkan id user
  public function update($id){
    $data = array(
      "nama"     => $this->input->post('nama', TRUE),
      "ttl"      => $this->input->post('ttl', TRUE),
      "alamat"   => $this->input->post('alamat', TRUE),
      "no_hp"    => $this->input->post('no_hp', TRUE),
      "username" => $this->input->post('username', TRUE),
      "password" => $this->input->post('password', TRUE)
    );
    $this->db->where('id_user', $id); //proses mencari data berdasarkan id
    $this->db->update('pelanggan', $data); //proses update
  }

  // hapus data berdasarkan id user
  public function delete($id){
    $this->db->where('id_user', $id); //proses mencari data berdasarkan id
    $this->db->delete('pelanggan'); //proses hapus
  }

}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */
