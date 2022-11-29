<div class="bg-white shadow-sm p-3 mb-5 mt-2 bg-body rounded box-service">
	<div class="form">
	<h4 class="tittle-service">Edit Status Pembayaran</h4>
	<?php foreach($invoice as $inv) : ?>
		<form action="<?php echo base_url(). 'admin/invoice/update' ?>" enctype="multipart/form-data" method="post">
			<div class="upload-img">
				<label class="label-input">Status</label>
				<input type="hidden" name="id" value="<?php echo $inv->id ?>">
				<div class="box-kategori">
				  <select class="option-kategori" name="status" value="<?php echo $inv->status ?>">
				  	<option value="" disable selected hidden>Status Pembayaran</option>
				    <option value="Menunggu Validasi"><button class="dropdown-item" type="button">Menunggu Validasi</button></option>
				    <option value="Selesai Validasi"><button class="dropdown-item" type="button">Selesai Validasi</button></option>
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