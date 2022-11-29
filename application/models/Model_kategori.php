<?php 

class Model_kategori extends CI_Model{
	public function data_laptop($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'laptop'),$limit, $start);
	}

	public function data_proyektor($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'komponen'), $limit, $start);
	}

	public function data_aksesoris($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'aksesoris'), $limit, $start);
	}

	public function data_printer($limit, $start){
		return $this->db->get_where("produk",array('kategori' => 'printer'), $limit, $start);
	}
} 