<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_gudang extends CI_Model {

  // memasukkan data
  public function insert(){

    // $data adalah array yang menampung data dari name input $_POST[]
    $data = array(
      "id_gudang"   => $this->input->post('id_gudang', TRUE),
      "nama"        => $this->input->post('nama', TRUE),
      "ttl"         => $this->input->post('ttl', TRUE),
      "email"       => $this->input->post('email', TRUE),
      "alamat"      => $this->input->post('alamat', TRUE),
      "no_hp"       => $this->input->post('no_hp', TRUE),
      "no_ktp"      => $this->input->post('no_ktp', TRUE),
      "gudangname"  => $gudangname,
      "password"    => $password
    );
    $this->db->insert('pelanggan', $data); //proses menyimpan ke database
  }

  // menampilkan data
  public function get(){
    $data =  $this->db->get('pelanggan'); //proses untuk meminta data dari database
    return $data->result(); //menampilkan semua data dari database
  }

  // menampilkan data berdasarkan id gudang
  public function get_id($id){
    $data = $this->db->get_where('pelanggan', array('id_gudang'=>$id));
    return $data->first_row(); //menampilkan satu data sesuai dengan id data
  }

  // update data berdasarkan id gudang
  public function update($id){

    // gudangname generator
    $nama = strtolower($this->input->post('nama'));
    $nama_pisah = explode(" ", $nama);
    $gudangname = $nama_pisah[0].substr($nama_pisah[1], 0,2);

    // password generator
    $nama_awal = strtoupper(substr($nama_pisah[0], 0,2));
    $tgl = explode("-", $this->input->post('ttl'));
    $password = $tgl[0].$tgl[1].$tgl[2].$nama_awal;

    $data = array(
      "nama"      => $this->input->post('nama', TRUE),
      "ttl"       => $this->input->post('ttl', TRUE),
      "email"     => $this->input->post('email', TRUE),
      "alamat"    => $this->input->post('alamat', TRUE),
      "no_hp"     => $this->input->post('no_hp', TRUE),
      "no_ktp"    => $this->input->post('no_ktp', TRUE),
      "gudangname"  => $gudangname,
      "password"  => $password
    );
    $this->db->where('id_gudang', $id); //proses mencari data berdasarkan id
    $this->db->update('pelanggan', $data); //proses update
  }

  // hapus data berdasarkan id gudang
  public function delete($id){
    $this->db->where('id_gudang', $id); //proses mencari data berdasarkan id
    $this->db->delete('pelanggan'); //proses hapus
  }

  public function login($data){
    $gudangname = $data->gudangname;
    $password = $data->password;

    $data = $this->db->get_where('pelanggan', array('gudangname'=>$gudangname,'password'=>$password));

    return $data->first_row();
  }

  public function update_api($id, $data){

    // // gudangname generator
    // $nama = strtolower($data->nama);
    // $nama_pisah = explode(" ", $nama);
    // $gudangname = $nama_pisah[0].substr($nama_pisah[1], 0,2);
    //
    // // password generator
    // $nama_awal = strtoupper(substr($nama_pisah[0], 0,2));
    // $tgl = explode("-", $data->ttl);
    // $password = $tgl[0].$tgl[1].$tgl[2].$nama_awal;

    $update = array(
      "nama"      => $data->nama,
      "ttl"       => $data->ttl,
      "email"     => $data->email,
      "alamat"    => $data->alamat,
      "no_hp"     => $data->no_hp,
      "no_ktp"    => $data->no_ktp,
      "gudangname"  => $data->gudangname,
      "password"  => $data->password
    );
    $this->db->where('id_gudang', $id); //proses mencari data berdasarkan id
    $this->db->update('pelanggan', $update); //proses update
  }

}

/* End of file Model_gudang.php */
/* Location: ./application/models/Model_user.php */
