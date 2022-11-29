<div class="bg-white shadow-sm p-3 mb-5 mt-2 bg-body rounded box-service">
	<div class="form">
	<h4 class="tittle-service">Tambah Data Produk</h4>
		<form action="<?php echo base_url(). 'admin/produk/tambah_data' ?>" enctype="multipart/form-data" method="post">
			<div class="input-row">
				<label class="label-input">Nama Produk</label>
				<input class="input-texta" type="text" name="nama_produk">
				<div class="invalid-feedback">Gagal</div>
			</div>
			<div class="input-row">
				<label class="label-input">Merek</label>
				<input class="input-texta" type="text" name="merek">
			</div>
			<div class="input-row">
				<label class="label-input">Harga</label>
				<input class="input-texta" type="text" name="harga">
			</div>
			<div class="input-row">
				<label class="label-input">Stok</label>
				<input class="input-texta" type="text" name="stok">
			</div>
			<div class="upload-img">
				<label class="label-input">Gambar</label>
				<input class="img-btn" type="file" name="gambar">
				<p><i>(Disarankan gambar yang berbentuk persegi)</i></p>
			</div>
			<div class="upload-img">
				<label class="label-input">Masa Garansi</label>
				<div class="box-kategori">
				  <select class="option-kategori" name="masa_garansi">
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
				  <select class="option-kategori" name="kategori">
				  	<option value="" disable selected hidden>Pilih Kategori</option>
				    <option value="Laptop"><button class="dropdown-item" type="button">Laptop</button></option>
				    <option value="Komponen"><button class="dropdown-item" type="button">Komponen</button></option>
				    <option value="Printer"><button class="dropdown-item" type="button">Printer</button></option>
				    <option value="Aksesoris"><button class="dropdown-item" type="button">Aksesoris</button></option>
				  </select>
				</div>
			</div>
			<div class="input-keluhan">
				<label class="lebel-ckeditor">Keterangan Produk</label>
			</div>
				<textarea id="details" class="input-areaa" name="detail_produk"></textarea>
			<div class="row input-row">
				<button type="submit" class="col-auto btn btn-primary ms-auto mt-4" style="margin-bottom: 150px;">Tambah Produk</button>
			</div>
		</form>
	</div>
</div>

<script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('details');
</script>