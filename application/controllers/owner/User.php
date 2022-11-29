<?php

class User extends CI_Controller{

	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);

		if ($this->session->userdata('role')!=0) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Melakukan <strong>Login!</strong>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('auth/login');
		}
	}

	public function index() {

		$data['user'] = $this->Model_user->tampil_data()->result();

		$this->load->view('owner/templates/header'); 
		$this->load->view('owner/templates/sidebar');
		$this->load->view('owner/templates/navbar');
		$this->load->view('owner/menu/user/list-user',$data);
		$this->load->view('owner/templates/footer');
	}

	public function tambah_admin(){
		$this->load->view('owner/templates/header'); 
		$this->load->view('owner/templates/sidebar');
		$this->load->view('owner/templates/navbar');
		$this->load->view('owner/menu/user/form');
		$this->load->view('owner/templates/footer');
	}

	public function tambah_data(){
		$this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]');
		$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('owner/templates/header'); 
			$this->load->view('owner/templates/sidebar');
			$this->load->view('owner/templates/navbar');
			$this->load->view('owner/menu/user/form');
			$this->load->view('owner/templates/footer');
		}else {
			$data = array(
				'id_user'		=> '',
				'nama_user'		=> $this->input->post('nama_user'),
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password_1'),
				'role'			=> 1
			);

			$this->db->insert('user', $data);
			redirect('owner/user');
		}
	}

	public function delete($id){
		$where = array('id_user' => $id);
		$this->Model_user->delete_user($where, 'user');
		redirect('owner/user');
	}

}