<?php 

class List_service extends CI_Controller{
	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);
		$this->load->helpers('text');
	}

	public function index() {
		$data['service'] = $this->Model_service->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('service/list-service', $data);
		$this->load->view('templates/footer');
	}

}