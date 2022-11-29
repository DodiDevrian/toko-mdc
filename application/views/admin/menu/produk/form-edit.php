<div class="bg-white shadow-sm p-3 mt-2 bg-body rounded box-service" style="margin-bottom: 250px;">
	<div class="form">
	<h4 class="tittle-service">Edit Data Produk</h4>
	<?php foreach($barang as $brg) : ?>
		<form action="<?php echo base_url(). 'admin/produk/update' ?>" enctype="multipart/form-data" method="post">
			<div class="input-row">
				<label class="label-input">Nama Produk</label>
				<input type="hidden" name="id_produk" value="<?php echo $brg->id_produk ?>">
				<input class="input-texta" type="text" name="nama_produk" value="<?php echo $brg->nama_produk ?>">
			</div>
			<div class="input-row">
				<label class="label-input">Merek</label>
				<input class="input-texta" type="text" name="merek" value="<?php echo $brg->merek ?>">
			</div>
			<div class="input-row">
				<label class="label-input">Harga</label>
				<input class="input-texta" type="text" name="harga" value="<?php echo $brg->harga ?>">
			</div>
			<div class="input-row">
				<label class="label-input">Stok</label>
				<input class="input-texta" type="text" name="stok" value="<?php echo $brg->stok ?>">
			</div>
			<!-- <div class="upload-img">
				<label class="label-input">Gambar</label>
				<input class="img-btn" type="file" name="gambar" value="<?php echo $brg->gambar ?>">
				<p><i>(Disarankan gambar yang berbentuk persegi)</i></p>
			</div> -->
			<div class="upload-img">
				<label class="label-input">Masa Garansi</label>
				<div class="box-kategori">
				  <select class="option-kategori" name="masa_garansi" value="<?php echo $brg->masa_garansi ?>">
				  	<option value="" disable selected hidden>Pilih Garansi</option>
				  	<option value="3 Hari"><button class="dropdown-item" type="button">3 Hari</button></option>
				    <option value="1 Minggu"><button class="dropdown-item" type="button">1 Minggu</button></option>
				    <option value="6 Bulan"><button class="dropdown-item" type="button">6 Bulan</button></option>
				    <option value="1 Tahun"><button class="dropdown-item" type="button">1 Tahun</button></option>
				    <option value="2 Tahun"><button class="dropdown-item" type="button">2 Tahun</button></option>
				  </select>
				</div>
			</div>
			<div class="upload-img">
				<label class="label-input">Kategori</label>
				<div class="box-kategori">
				  <select class="option-kategori" name="kategori" value="<?php echo $brg->kategori ?>">
				  	<option value="" disable selected hidden>Pilih Kategori</option>
				    <option value="Laptop"><button class="dropdown-item" type="button">Laptop</button></option>
				    <option value="Komponen"><button class="dropdown-item" type="button">Komponen</button></option>
				    <option value="Printer"><button class="dropdown-item" type="button">Printer</button></option>
				    <option value="Aksesoris"><button class="dropdown-item" type="button">Aksesoris</button></option>
				  </select>
				</div>
			</div>
			<div>
				<label class="lebel-ckeditor">Keterangan Produk</label><br>
				<textarea id="details" class="input-areaa" name="detail_produk"><?php echo $brg->detail_produk ?></textarea>
			</div>
			<div class="row input-row">
				<button type="submit" class="col-auto btn btn-primary ms-auto mt-4 mb-5">Ubah Produk</button>
			</div>
		</form>
	<?php endforeach; ?>
	</div>
</div>

<script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('details');
</script>