<?php 
	
class Model_service extends CI_Model{
	public function tampil_data(){
		return $this->db->get('service');
	}

	public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_service($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete_service($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function detail_service($id_service){
		$result = $this->db->where('id_service',$id_service)->get('service');
		if ($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
}