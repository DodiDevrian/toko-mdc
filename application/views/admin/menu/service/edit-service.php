<div class="bg-white shadow-sm p-3 mb-5 mt-2 bg-body rounded box-service">
	<div class="form">
	<h4 class="tittle-service">Edit Data Service</h4>
	<?php foreach($service as $service) : ?>
		<form action="<?php echo base_url(). 'admin/service/update' ?>" enctype="multipart/form-data" method="post">
			<div class="input-row">
				<label class="label-input">Biaya</label>
				<input type="hidden" name="id_service" value="<?php echo $service->id_service ?>">
				<input class="input-texta" type="text" name="biaya" value="<?php echo $service->biaya ?>">
			</div>
			<div class="upload-img">
				<label class="label-input">Status</label>
				<div class="box-kategori">
				  <select class="option-kategori" name="status" value="<?php echo $service->status ?>">
				  	<option value="" disable selected hidden>Status Service</option>
				    <option value="Belum Diproses"><button class="dropdown-item" type="button">Belum Diproses</button></option>
				    <option value="Validasi Service"><button class="dropdown-item" type="button">Validasi Service</button></option>
				    <option value="Sedang Diproses"><button class="dropdown-item" type="button">Sedang Diproses</button></option>
				    <option value="Selesai Diproses"><button class="dropdown-item" type="button">Selesai Diproses</button></option>
				  </select>
				</div>
			</div>
			<div class="row input-row">
				<button type="submit" class="col-auto btn btn-primary ms-auto mt-4 mb-5">Ubah Data</button>
			</div>
		</form>
	<?php endforeach; ?>
	</div>
</div>