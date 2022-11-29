<style type="text/css">
	@media print {
		.no-print, .no-print * {
			display: none !important;
		}
	}
</style>
<div class="container bg-white p-3" style="margin-top: 100px; margin-bottom: 250px;">
	<div class="invoice-top">
		<h4>INVOICE SERVICE</h4>
		<div class="mdc-logo">
			<img src="<?php echo base_url() ?>assets/img/logo.png" width="100" >
			<h4 class="mdc-invoice ml-3">Media Data Computer</h4>
		</div>
	</div>
	<p style="margin-top: 50px; margin-bottom: 5px;">Diterbitkan atas nama :</p>
	<div class="info-inv" style="margin-bottom: 20px;">
		<?php foreach($service as $srv) : ?>
			<div class="info-invoice">
				<table>
					<tr>
						<td><b>Admin</b></td>
						<td>&emsp;: Juli Adi Umar</td>
					</tr>
					<tr>
						<td><b>Nomor</b></td>
						<td>&emsp;: <?php echo 'MDC-SERV-'.$srv->id_service ?></td>
					</tr>
					<tr>
						<td><b>Tanggal</b></td>
						<td>&emsp;: 
							<?php
								$tanggal = $srv->tanggal;

								switch (date('m', strtotime($tanggal))) {
									case '01':
										$bulan = 'Januari';
										break;
									case '02':
										$bulan = 'Februari';
										break;
									case '03':
										$bulan = 'Maret';
										break;
									case '04':
										$bulan = 'April';
										break;
									case '05':
										$bulan = 'Mei';
										break;
									case '06':
										$bulan = 'Juni';
										break;
									case '07':
										$bulan = 'Juli';
										break;
									case '08':
										$bulan = 'Agustus';
										break;
									case '09':
										$bulan = 'September';
										break;
									case '10':
										$bulan = 'Oktober';
										break;
									case '11':
										$bulan = 'November';
										break;
									case '12':
										$bulan = 'Desember';
										break;
									
									default:
										$bulan = 'Tidak diketahui';
										break;
								}

								echo date('d', strtotime($tanggal)). ' '. $bulan. ' '. date('Y', strtotime($tanggal));
							?>
						</td>
					</tr>
				</table>
			</div>
			<div class="info-pembeli">
				<table>
					<tr>
						<td><b>Pembeli</b></td>
						<td>&emsp;: <?php echo $srv->nama ?></td>
					</tr>
					<tr>
						<td><b>Alamat</b></td>
						<td>&emsp;: <?php echo $srv->alamat ?></td>
					</tr>
					<tr>
						<td><b>Nomor HP</b></td>
						<td>&emsp;: <?php echo $srv->no_wa ?></td>
					</tr>
				</table>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="tabel-penjualan">
		<table class="table table-bordered table-hover table-striped">
			<tr>
				
				<th>Barang</th>
				<th>Keluhan</th>
				<th>Biaya</th>
			</tr>
				<?php foreach ($service as $srv) : ?>
				<tr>
					<td><?php echo $srv->barang ?></td>
					<td><?php echo $srv->keluhan ?></td>
					<td>Rp <?php echo number_format($srv->biaya,0,',','.')  ?></td>
				</tr>
				<?php endforeach; ?>
		</table>
		
	</div>
	<div class="ttd-total mt-5">
		<div class="ttd" style="margin-left: 50px;">
			<div class="tgl-pesan">
				<b><?php
					$tanggal = $srv->tanggal;

					switch (date('m', strtotime($tanggal))) {
						case '01':
							$bulan = 'Januari';
							break;
						case '02':
							$bulan = 'Februari';
							break;
						case '03':
							$bulan = 'Maret';
							break;
						case '04':
							$bulan = 'April';
							break;
						case '05':
							$bulan = 'Mei';
							break;
						case '06':
							$bulan = 'Juni';
							break;
						case '07':
							$bulan = 'Juli';
							break;
						case '08':
							$bulan = 'Agustus';
							break;
						case '09':
							$bulan = 'September';
							break;
						case '10':
							$bulan = 'Oktober';
							break;
						case '11':
							$bulan = 'November';
							break;
						case '12':
							$bulan = 'Desember';
							break;
						
						default:
							$bulan = 'Tidak diketahui';
							break;
					}

					echo date('d', strtotime($tanggal)). ' '. $bulan. ' '. date('Y', strtotime($tanggal));
				?></b>
			</div>
			<div class="ttd-aad">
				<img src="<?php echo base_url() ?>assets/img/ttd/ttd.png" width="150">
			</div>
			<p align="center"><b>Nur Saad</b></p>
		</div>
	</div>
	<div class="no-print">
		<button type="button" class="btn btn-primary" onclick="printPage()">Cetak Invoice</button>
    </div>
</div>

<script>
   function printPage() {
      window.print();
   }
</script>