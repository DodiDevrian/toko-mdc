<?php

class Aksesoris extends CI_Controller{

	public function __construct(){
		parent ::__construct();

		$this->load->helpers(['menuAktif']);
		$this->load->helpers('text');
	}

	public function index() {

		$config['base_url'] 	= site_url('aksesoris/index');
		$config['total_rows'] 	= $this->db->where('kategori','Aksesoris')->from("produk")->count_all_results();
		$config["per_page"]		= 12;
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
		$data['aksesoris'] = $this->Model_kategori->data_aksesoris($config["per_page"], $data['page'])->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('produk/aksesoris', $data);
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
		redirect('aksesoris');
	}
}