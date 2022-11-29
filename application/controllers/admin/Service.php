<?php

class Service extends CI_Controller{

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
		$data['service'] = $this->Model_service->tampil_data()->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/service/list-service',$data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah_service(){

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/service/form');
		$this->load->view('admin/templates/footer');
	}

	public function tambah_data(){

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required',[
				'required' => 'Nama Lengkap wajib diisi!']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required',[
				'required' => 'Alamat wajib diisi!']);
		$this->form_validation->set_rules('no_wa', 'Nomor WhatsApp', 'required',[
				'required' => 'Nomor WhatsApp wajib diisi!']);
		$this->form_validation->set_rules('barang', 'Barang', 'required',[
				'required' => 'Barang wajib diisi!']);
		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required',[
				'required' => 'Keluhan wajib diisi!']);
		if (empty($_FILES['gambar']['name'])){
		    $this->form_validation->set_rules('gambar', 'Gambar', 'required',[
				'required' => 'Gambar wajib diisi!']);
		}

		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('admin/templates/navbar');
			$this->load->view('admin/menu/service/form');
			$this->load->view('admin/templates/footer');
		}else{

			date_default_timezone_set('Asia/Jakarta');

			$nama			= $this->input->post('nama');
			$alamat			= $this->input->post('alamat');
			$no_wa			= $this->input->post('no_wa');
			$barang			= $this->input->post('barang');
			$keluhan		= $this->input->post('keluhan');
			$status			= $this->input->post('status');

			$gambar			= $_FILES['gambar']['name'];
			if ($gambar =''){}else{
				$config ['upload_path']= './assets/uploads/foto';
				$config ['allowed_types']= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo "Gambar Gagal Diupload";
				}else{
					$gambar=$this->upload->data('file_name');
				}
			}

			$data = array(
				'nama'		=> $nama,
				'alamat'	=> $alamat,
				'no_wa'		=> $no_wa,
				'tanggal'	=> date('Y-m-d H:i:s'),
				'barang'	=> $barang,
				'keluhan'	=> $keluhan,
				'status'	=> 'Belum Diproses',
				'gambar'	=> $gambar
			);

			$this->Model_service->tambah_data($data, 'service');
			redirect('admin/service');
		}

	}

	public function edit($id){
		$where = array('id_service' => $id);
		$data['service'] = $this->Model_service->edit_service($where, 'service')->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/menu/service/edit-service', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update(){
		$id				= $this->input->post('id_service');
		$status			= $this->input->post('status');
		$biaya			= $this->input->post('biaya');

		$data = array(
			'status'	=> $status,
			'biaya'		=> $biaya
		);

		$where = array('id_service' => $id);

		$this->Model_service->update_data($where,$data, 'service');
		redirect('admin/service');
	}

	public function delete($id){
		$where = array('id_service' => $id);
		$this->Model_service->delete_service($where, 'service');
		redirect('admin/service');
	}

	public function detail($id_service){
		$data['service'] = $this->Model_service->detail_service($id_service);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/menu/service/detail', $data);
		$this->load->view('admin/templates/footer');
	}
}