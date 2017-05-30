<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {

  // memasukkan data
  public function insert($username, $password){

    // $data adalah array yang menampung data dari name input $_POST[]
    $data = array(
      "id_user"   => $this->input->post('id_user', TRUE),
      "nama"      => $this->input->post('nama', TRUE),
      "ttl"       => $this->input->post('ttl', TRUE),
      "alamat"    => $this->input->post('alamat', TRUE),
      "no_hp"     => $this->input->post('no_hp', TRUE),
      "no_ktp"    => $this->input->post('no_ktp', TRUE),
      "username"  => $username,
      "password"  => $password
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
    return $data->first_row(); //menampilkan satu data sesuai dengan id data
  }

  // update data berdasarkan id user
  public function update($id){

    // username generator
    $nama = strtolower($this->input->post('nama'));
    $nama_pisah = explode(" ", $nama);
    $username = $nama_pisah[0].substr($nama_pisah[1], 0,2);

    // password generator
    $nama_awal = strtoupper(substr($nama_pisah[0], 0,2));
    $tgl = explode("-", $this->input->post('ttl'));
    $password = $tgl[0].$tgl[1].$tgl[2].$nama_awal;

    $data = array(
      "nama"      => $this->input->post('nama', TRUE),
      "ttl"       => $this->input->post('ttl', TRUE),
      "alamat"    => $this->input->post('alamat', TRUE),
      "no_hp"     => $this->input->post('no_hp', TRUE),
      "no_ktp"    => $this->input->post('no_ktp', TRUE),
      "username"  => $username,
      "password"  => $password
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
