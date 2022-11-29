<?php 

class Model_invoice extends CI_Model{

	public function index(){
		date_default_timezone_set('Asia/Jakarta');
		$id_user 	= $this->input->post('id_user');
		$nama 		= $this->input->post('nama');
		$alamat 	= $this->input->post('alamat');
		$kurir 		= $this->input->post('kurir');
		$nomor 		= $this->input->post('nomor');
		$status 	= $this->input->post('status');
		$gambar		= $_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path']= './assets/uploads/bukti';
			$config ['allowed_types']= 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar Gagal Diupload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$invoice = array(
			'id_user'	=> $id_user,
			'nama'		=> $nama,
			'alamat'	=> $alamat,
			'kurir'		=> $kurir,
			'nomor'		=> $nomor,
			'status'	=> 'Menunggu Validasi',
			'tgl_pesan'	=> date('Y-m-d'),
			'gambar'	=> $gambar
		);

		$this->db->insert('invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice'	=> $id_invoice,
				'tgl_pesan'		=> date('Y-m-d'),
				'id_produk'		=> $item['id'],
				'nama_produk'	=> $item['name'],
				'jumlah'		=> $item['qty'],
				'harga'			=> $item['price']
			);

			$this->db->insert('pesanan', $data);
		}

		return TRUE;
	}

	public function tampil_data(){
		$result = $this->db->get('invoice');
		if ($result->num_rows() > 0) {
			return $result->result();
		}else {
			return FALSE;
		}
	}

	public function ambil_id_invoice($id_invoice){
		$result = $this->db->where('id', $id_invoice)
						   ->limit(1)
						   ->get('invoice');

		if ($result->num_rows() > 0) {
			return $result->row();
		}else {
			return FALSE;
		}
	}

	public function ambil_id_pesanan($id_invoice){
		$result = $this->db->where('id_invoice', $id_invoice)
						   ->get('pesanan');

		if ($result->num_rows() > 0) {
			return $result->result();
		}else {
			return FALSE;
		}
	}

	public function edit_invoice($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}