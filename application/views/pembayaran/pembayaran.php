<div class="container" style="margin-top: 100px; margin-bottom: 300px;">
	<?php 
	$jumlah = 0;

	if ($keranjang = $this->cart->contents()) {
		foreach ($keranjang as $item){
			$jumlah = $jumlah + $item['subtotal'];
		}
		$kode = $this->session->userdata('id_user');
		$total = $jumlah + $kode;
	
	 ?>
	<form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-8">
				<h3>Input Pengiriman</h3>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
					<input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
					<?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap Anda"></textarea>
					<?php echo form_error('alamat', '<div class="text-danger small">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Nomor Handphone</label>
					<input type="text" name="nomor" placeholder="Wajib Menggunakan Nomor WA Yang Aktif!" class="form-control">
					<?php echo form_error('nomor', '<div class="text-danger small">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control" name="kurir">
						<option value="" disable selected hidden>Pilih Jasa Pengiriman</option>
						<option value="JNE">JNE</option>
						<option value="JNT">JNT</option>
						<option value="SiCepat">SiCepat</option>
						<option value="GoSend">GoSend</option>
						<option value="Grap">Grab</option>
					</select>
					<?php echo form_error('kurir', '<div class="text-danger small">', '</div>') ?>
				</div>
				<div class="form-group">
					<label>Metode Pembayaran</label>
					<select class="form-control">
						<option disable selected hidden>Pilih Metode Pembayaran</option>
						<option>DANA - 085267228032</option>
						<option>BANK BSI - 71198526357</option>
					</select>
				</div>
				<div class="form-group">
					<label class="mt-4">Bukti Pembayaran</label>
					<input type="file" name="gambar">
					<?php echo form_error('gambar', '<div class="text-danger small">', '</div>') ?>
				</div>

			</div>

			<div class="col-lg-4">
				<div class="card card-body shadow-sm mb-4">
					<div class="mb-4">
						<div class="heading">
							<div class="h5 text-website">
								TRANSFER DANA
							</div>
							<div class="h5 text-primary">
								<p>Media Data Computer</p>
							</div>
						</div>

					</div>
					<div class="row d-flex justify-content-center mb-4">
						<div class="col-sm-10 col-lg-3">
							<img src="<?php echo base_url('assets/img/pembayaran/qr_dana.png') ?>" class="img-fluid">
						</div>
						<center class="col align-self-center">
							<div class="col">
								<div class="col-sm-12 col-lg-6">
									<img src="<?php echo base_url('assets/img/pembayaran/dana.png') ?>" class="img-fluid mb-2">
								</div>
								<div class="h5 b-text-website">
									NOMOR DANA
								</div>
								<div class="h5 text-primary">
									<p>0895336467003</p>
								</div>
								<div class="h5 b-text-website">
									NAMA AKUN : NUR SAAD
								</div>
							</div>
						</center>
					</div>
				
				</div>
				<div class="card card-body shadow-sm mb-4">
					<div class="mb-4">
						<div class="heading">
							<div class="h5 text-website">
								TRANSFER BANK	
							</div>
							<div class="h5 text-primary">
								<p>Media Data Computer</p>
							</div>
						</div>

					</div>
					<div class="row d-flex justify-content-center mb-4">
						<center class="col align-self-center">
							<div class="col">
								<div class="col-sm-12 col-lg-6">
									<img src="<?php echo base_url('assets/img/pembayaran/bank.png') ?>" class="img-fluid mb-2">
								</div>
								<div class="h5 b-text-website">
									NO REKENING
								</div>
								<div class="h5 text-primary">
									<p>294 0684814</p>
								</div>
								<div class="h5 b-text-website">
									NAMA AKUN : NUR SAAD
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	
		<div class="harga">
			<div class="row d-flex justify-content-end">
				<div class="h5 text-primary" style="text-align: right;">
					<?php 
						echo 'Rp '.number_format($total,0,',','.');
					 ?>
				</div>
			</div>
		</div>
		<div class="keterangan">
			<div class="text-danger fw-bold">
				<label>Catatan : Masukan kode unik diakhir nominal</label><br>
				<label>Kode Unik : <?php echo $this->session->userdata('id_user') ?></label>
			</div>
			
			<div class="row d-flex justify-content-center">
				<button type="submit" class="btn btn-primary btn-sm fs-5">
					Konfirmasi Pembayaran
				</button>
			</div>
		</div>
	</form>
	<?php
	}else{ ?>

	<div class="container" style="margin-top: 100px">
		<div class="alert alert-success text-center ">
			<p class="fs-3">Keranjang anda masih kosong, silahkan kembali belanja!</p>
			<a href="<?php echo base_url() ?>dashboard" class="mx-auto">
				<button class="btn btn-primary text-center">Kembali</button>
			</a>
		</div>
	</div>
	<?php
	} ?>
</div>