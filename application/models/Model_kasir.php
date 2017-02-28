<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_kasir extends CI_Model {

  // memasukkan data
  public function insert(){

    // $data adalah array yang menampung data dari name input $_POST[]
    $data = array(
      "id_kasir" => $this->input->post('id_kasir', TRUE),
      "nama"     => $this->input->post('nama', TRUE),
      "ttl"      => $this->input->post('ttl', TRUE),
      "alamat"   => $this->input->post('alamat', TRUE),
      "no_hp"    => $this->input->post('no_hp', TRUE),
      "username" => $this->input->post('username', TRUE),
      "password" => $this->input->post('password', TRUE)
    );
    $this->db->insert('kasir', $data); //proses menyimpan ke database
  }

  // menampilkan data
  public function get(){
    $data =  $this->db->get('kasir'); //proses untuk meminta data dari database
    return $data->result(); //menampilkan semua data dari database
  }

  // menampilkan data berdasarkan id kasir
  public function get_id($id){
    $data = $this->db->get_where('kasir', array('id_kasir'=>$id));
    return $data->fisrt_row(); //menampilkan satu data sesuai dengan id data
  }

  // update data berdasarkan id kasir
  public function update($id){
    $data = array(
      "nama"     => $this->input->post('nama', TRUE),
      "ttl"      => $this->input->post('ttl', TRUE),
      "alamat"   => $this->input->post('alamat', TRUE),
      "no_hp"    => $this->input->post('no_hp', TRUE),
      "username" => $this->input->post('username', TRUE),
      "password" => $this->input->post('password', TRUE)
    );
    $this->db->where('id_kasir', $id); //proses mencari data berdasarkan id
    $this->db->update('kasir', $data); //proses update
  }

  // hapus data berdasarkan id kasir
  public function delete($id){
    $this->db->where('id_kasir', $id); //proses mencari data berdasarkan id
    $this->db->delete('kasir'); //proses hapus
  }

  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $data = $this->db->get_where('kasir', array('username'=> $username,'password'=>$password));

    return $data->first_row();
  }

}

/* End of file Model_kasir.php */
/* Location: ./application/models/Model_kasir.php */
