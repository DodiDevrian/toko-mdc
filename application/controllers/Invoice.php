<?php 

class Invoice extends CI_Controller{

	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);
		$this->load->helpers(['text']);
	}

	public function index(){
		$data['invoice'] = $this->Model_invoice->tampil_data();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('invoice/list_invoice', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id_invoice){
		$data['invoice'] = $this->Model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id_invoice);

		$this->load->view('templates/header');
		$this->load->view('invoice/detail_invoice', $data);
		$this->load->view('templates/footer');
	}

}