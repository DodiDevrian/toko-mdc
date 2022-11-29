<?php 

class Invoice extends CI_Controller{

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

	public function index(){
		$data['invoice'] = $this->Model_invoice->tampil_data();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/invoice/list_invoice', $data);
		$this->load->view('admin/templates/footer');
	}

	public function detail($id_invoice){
		$data['invoice'] = $this->Model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id_invoice);

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/invoice/detail_invoice', $data);
		$this->load->view('admin/templates/footer');
	}

	public function edit($id){
		$where = array('id' => $id);
		$data['invoice'] = $this->Model_invoice->edit_invoice($where, 'invoice')->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/invoice/edit_invoice', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update(){
		$id				= $this->input->post('id');
		$status			= $this->input->post('status');


		$data = array(
			'status'	=> $status
		);

		$where = array('id' => $id);

		$this->Model_invoice->update_data($where,$data, 'invoice');
		redirect('admin/invoice');
	}

}