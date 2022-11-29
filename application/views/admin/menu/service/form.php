<div class="bg-white shadow-sm p-3 bg-body rounded box-service" style="margin-bottom: 250px;">
	<div class="form">
	<h4 class="tittle-service">SERVICE</h4>
		<form action="<?php echo base_url(). 'admin/service/tambah_data' ?>" enctype="multipart/form-data" method="post">
			<div class="form-group">
				<label class="label-input">Nama Lengkap</label>
				<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>">
				<input class="form-control" type="text" name="nama">
				<?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
			</div>
			<div class="form-group">
				<label class="label-input">Alamat</label>
				<input class="form-control" type="text" name="alamat">
				<?php echo form_error('alamat', '<div class="text-danger small">', '</div>') ?>
			</div>
			<div class="form-group">
				<label class="label-input">No. WhatsApp</label>
				<input class="form-control" type="text" name="no_wa">
				<?php echo form_error('no_wa', '<div class="text-danger small">', '</div>') ?>
			</div>
			<div class="form-group">
				<label class="label-input">Barang Service</label>
				<select class="form-control" name="barang">
					<option disable selected>Pilih Barang</option>
					<option value="Laptop">Laptop</option>
					<option value="Komponen">Komponen</option>
					<option value="Printer">Printer</option>
					<option value="Aksesoris">Aksesoris</option>
				</select>
				<?php echo form_error('barang', '<div class="text-danger small">', '</div>') ?>
			</div>
			<div class="upload-img">
				<label class="label-input">Foto Kerusakan</label>
				<input class="img-btn" type="file" name="gambar">
				<?php echo form_error('gambar', '<div class="text-danger small">', '</div>') ?>
			</div>
			<div class="form-group">
				<label class="label-input">Keluhan</label>
				<textarea class="form-control" name="keluhan"></textarea>
				<?php echo form_error('keluhan', '<div class="text-danger small">', '</div>') ?>
			</div>


			<div class="form-group" align="right">
				<button type="submit" class="col-auto btn btn-primary ms-auto mt-4 mb-5">Service</button>
			</div>
		</form>
	</div>
</div>