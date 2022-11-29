<?php 
	
class Model_produk extends CI_Model{
	public function tampil_data($limit, $start){
		return $this->db->get('produk', $limit, $start);
	}

	public function tampil_data_keranjang(){
		return $this->db->get('produk');
	}

	public function tampil_data_admin(){
		return $this->db->get('produk');
	}

	public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_produk($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete_produk($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id){
		$result = $this->db->where('id_produk', $id) 
						   ->limit(1) 
						   ->get('produk');	

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_produk($id_produk){
		$result = $this->db->where('id_produk',$id_produk)->get('produk');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->like('nama_produk',$keyword);
		
		return $this->db->get()->result();
	}
	
}