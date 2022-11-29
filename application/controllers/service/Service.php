<?php

class Service extends CI_Controller{

	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);
		$this->load->helpers('text');
	}
	
	public function index() {

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('service/form');
		$this->load->view('templates/footer');
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
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/navbar');
			$this->load->view('service/form');
			$this->load->view('templates/footer');
		}else{

			date_default_timezone_set('Asia/Jakarta');

			$id_user		= $this->input->post('id_user');
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
				'id_user'	=> $id_user,
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
			redirect('service/list_service');
		}

	}
}