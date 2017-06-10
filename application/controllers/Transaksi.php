<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_transaksi');
    $this->load->model('Model_antrian');
  }

  public function index(){

    $data['transaksi'] = $this->Model_transaksi->transaksi_belum();

      $this->load->view('head');
      $this->load->view('header');
      $this->load->view('transaksi/transaksi', $data);
      $this->load->view('javascript');
      $this->load->view('dataTables');
  }

  // ===========================================================================
  // SERVICES
  // ===========================================================================

  public function Post(){

    $dataBarang = json_decode(file_get_contents('php://input'));

    $val2 = $dataBarang->items;

    $antri = $this->Model_antrian->post();

    $this->Model_transaksi->insert($dataBarang, $antri);
    $this->Model_transaksi->insert_detail($val2);

    // print_r($dataBarang);
    // print_r($val2);

    echo json_encode(
      array(
        'status'=>'sukses',
        'nomor_antrian'=>$antri,
        'tanggal_transaksi'=>date("Y-m-d"))
    );
  }

  public function history($id){

    $data = $this->Model_transaksi->get_history($id);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($data, JSON_PRETTY_PRINT))
      ->_display();
      exit;

  }

  public function detail_transaksi($id){
    $data = array(
        "content"=>$this->Model_transaksi->get_id($id),
        "detail"=>$this->Model_transaksi->get_detail($id)
    );

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($data, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
