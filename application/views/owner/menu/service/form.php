<div class="bg-white shadow-sm p-3 bg-body rounded box-service" style="margin-bottom: 250px;">
	<div class="form">
	<h4 class="tittle-service">SERVICE</h4>
		<form action="<?php echo base_url(). 'admin/service/tambah_data' ?>" enctype="multipart/form-data" method="post">
			<div class="input-row">
				<label class="label-input">Nama</label>
				<input class="input-texta" type="text" name="nama">
			</div>
			<div class="input-row">
				<label class="label-input">Alamat</label>
				<input class="input-texta" type="text" name="alamat">
			</div>
			<div class="input-row">
				<label class="label-input">No. WhatsApp</label>
				<input class="input-texta" type="text" name="no_wa">
			</div>
			<div class="input-row">
				<label class="label-input">Barang Service</label>
				<input class="input-texta" type="text" name="barang">
			</div>
			<div class="upload-img">
				<label class="label-input">Foto Kerusakan</label>
				<input class="img-btn" type="file" name="gambar">
			</div>
			<div class="input-keluhan">
				<label class="label-input">Keluhan</label>
				<textarea class="input-areaa" name="keluhan"></textarea>
			</div>


			<div class="row input-row">
				<button type="submit" class="col-auto btn btn-primary ms-auto mt-4 mb-5">Service</button>
			</div>
		</form>
	</div>
</div>