<?php

class Dashboard extends CI_Controller{

	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);
		$this->load->helpers('text');
		$this->load->model('Model_kategori');
		$this->load->model('Model_auth');
		$this->load->model('Model_user');
	}

	public function index() {

		$config['base_url'] 	= site_url('dashboard/index');
		$config['total_rows'] 	= $this->db->count_all('produk');
		$config["per_page"]		= 8;
		$config['uri_segment'] 	= 3;
		$choice					= $config["total_rows"] / $config['per_page'];
		$config['num_links']	= floor($choice);

		$config['first_link']		= 'First';
		$config['last_link']		= 'Last';
		$config['next_link']		= 'Next';
		$config['prev_link']		= 'Prev';
		$config['full_tag_open']	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']	= '</ul></nav></div>';

		$config['num_tag_open']		= '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']	= '</span></li>';

		$config['cur_tag_open']		= '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']	= '</span></li>';

		$config['next_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']	= '<span aria-hidden="true">&raquo</span></span></li>';

		$config['prev_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']	= '</span>Next</li>';

		$config['first_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close']	= '</span></li>';

		$config['last_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']	= '</span></li>';

		$this->pagination->initialize($config);
		$data['page']			= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['pagination'] = $this->pagination->create_links();

		$data['barang'] = $this->Model_produk->tampil_data($config["per_page"], $data['page'])->result();
		

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function keranjang($id){
		$barang = $this->Model_produk->find($id);

		$data = array(
	        'id'      => $barang->id_produk,
	        'gambar'  => $barang->gambar,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_produk
		);

		$this->cart->insert($data);
		redirect('dashboard');

	}

	public function detail_keranjang(){
		$data['barang'] = $this->Model_produk->tampil_data_keranjang()->result();
		$data['user'] = $this->Model_user->tampil_data()->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('keranjang', $data);
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('dashboard');
	}

	public function detail($id_produk){
		$data['barang'] = $this->Model_produk->detail_produk($id_produk);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	}

	public function pembayaran(){
		$data['user'] = $this->Model_user->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('pembayaran/pembayaran', $data);
		$this->load->view('templates/footer');
	}

	public function proses_pesanan(){

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required',['required' => 'Nama Lengkap wajib diisi!']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required',['required' => 'Alamat wajib diisi!']);
		$this->form_validation->set_rules('kurir', 'Kurir', 'required',['required' => 'Kurir wajib diisi!']);
		$this->form_validation->set_rules('nomor', 'Nomor WhatsApp', 'required',['required' => 'Nomor WhatsApp wajib diisi!']);
		if (empty($_FILES['gambar']['name'])){
		    $this->form_validation->set_rules('gambar', 'Bukti', 'required',[
				'required' => 'Bukti Pembayaran wajib upload!']);
		}

		if ($this->form_validation->run() == FALSE){
			$data['user'] = $this->Model_user->tampil_data()->result();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/navbar');
			$this->load->view('pembayaran/pembayaran', $data);
			$this->load->view('templates/footer');
		}else{
			$is_processed = $this->Model_invoice->index();
			if ($is_processed) {
				$this->cart->destroy();

				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('templates/navbar');
				$this->load->view('pembayaran/proses_pesanan');
				$this->load->view('templates/footer');
				
			}else {
				echo "Maaf, Pesanan Anda Gagal Diproses!";
			}
		}
	}

	public function search(){

		$keyword = $this->input->post('keyword');
		$data['barang'] = $this->Model_produk->get_keyword($keyword);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('search', $data);
		$this->load->view('templates/footer');
	}
}