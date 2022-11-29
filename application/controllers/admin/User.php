<?php

class User extends CI_Controller{

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

		$data['user'] = $this->Model_user->tampil_data()->result();

		$this->load->view('admin/templates/header'); 
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/user/list-user',$data);
		$this->load->view('admin/templates/footer');
	}

	public function delete($id){
		$where = array('id_user' => $id);
		$this->Model_user->delete_user($where, 'user');
		redirect('admin/user');
	}

}