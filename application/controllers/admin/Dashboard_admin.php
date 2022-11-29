<?php 

class Dashboard_admin extends CI_Controller{

	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);

		if ($this->session->userdata('role')!=1) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Melakukan <strong>Login!</strong>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('auth/login');
		}
	}

	public function index() {
		$this->load->view('admin/templates/header');
		$this->load->view('admin/dasboard');
	}

	
}