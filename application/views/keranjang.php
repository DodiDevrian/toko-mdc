<div class="container" style="margin-top: 100px; margin-bottom: 250px;">
	<div class="title-kategori mb-3">
		<h3>Keranjang Belanja</h3>
	</div>
	<div class="list-group shadow-sm mb-4">
		<div class="list-group-item bg-light text-website b">
			<div class="row">
				<div class="col-sm-12 col-lg-1">
				</div>
				<div class="col-sm-12 col-lg-4">
					Produk
				</div>
				<div class="col-sm-12 col-lg-3">
					Harga
				</div>
				<div class="col-sm-12 col-lg-2">
					Jumlah
				</div>
				<div class="col-sm-12 col-lg-2">
					Total Harga
				</div>
			</div>
		</div>
		<?php $no=1; foreach ($this ->cart->contents() as $items) : ?>
		<div class="list-group-item">
			<div class="row my-4">
				<div class="col-sm-12 col-lg-1 mb-3">
					<p><?php echo $no++ ?></p>
				</div>
				<div class="col-sm-12 col-lg-4 mb-3">
					<div class="media">
						<img src="<?php echo base_url() ?>assets/uploads/<?php echo $items['gambar'] ?>" width="60" class="mr-3">
						<div class="media-body text-dark">
							<p><?php echo $items['name'] ?></p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-3 mb-3">
					<h6 class="text-website">Rp <?php echo number_format($items['price'],0,',','.')  ?></h6>
				</div>
				<div class="col-sm-12 col-lg-2 mb-3">
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-3">
								<p><?php echo $items['qty'] ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-2 mb-3">
					<h6 class="text-website">Rp <?php echo number_format($items['subtotal'],0,',','.')  ?></h6>
				</div>
			</div>
		</div>
		<?php endforeach; ?>

	</div>
	<div class="card card-body shadow-sm">
		<div class="row">
			<div class="col-lg-8"></div>
			<div class="col-lg-2">
				<h5>
					<span class="text-muted">Total Pesanan</span>
				</h5>
			</div>
			<div class="col-lg-2">
					<h5>
						<span class="badge bg-success">Rp <?php echo number_format($this->cart->total(),0,',','.')  ?></span>
					</h5>
			</div>
			<div class="col-lg-8 mt-3"></div>
			<div class="col-lg-2 mt-3">
				<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
					<div class="btn btn-sm btn-danger">Hapus</div>
				</a>
			</div>
			<div class="col-lg-2 mt-3">
				<a href="<?php echo base_url('dashboard/pembayaran') ?>">
					<div class="btn btn-sm btn-success">Pembayaran</div>
				</a>
			</div>
		</div>
	</div>
</div>