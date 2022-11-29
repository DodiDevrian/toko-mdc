<style type="text/css">
	@media print {
		.no-print, .no-print * {
			display: none !important;
		}
	}
</style>
<div class="container bg-white p-3" style="margin-top: 100px; margin-bottom: 250px;">
	<div class="invoice-top">
		<h4>INVOICE PEMBELIAN</h4>
		<div class="mdc-logo">
			<img src="<?php echo base_url() ?>assets/img/logo.png" width="100" >
			<h4 class="mdc-invoice ml-3">Media Data Computer</h4>
		</div>
	</div>
	<p style="margin-top: 50px; margin-bottom: 5px;">Diterbitkan atas nama :</p>
	<div class="info-inv" style="margin-bottom: 20px;">
		<div class="info-invoice">
			<table>
				<tr>
					<td><b>Admin</b></td>
					<td>&emsp;: Juli Adi Umar</td>
				</tr>
				<tr>
					<td><b>Nomor</b></td>
					<td>&emsp;: <?php echo 'MDC-INV-'.$invoice->id ?></td>
				</tr>
				<tr>
					<td><b>Tanggal</b></td>
					<td>&emsp;: 
						<?php
							$tanggal = $invoice->tgl_pesan;

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
					<td>&emsp;: <?php echo $invoice->nama ?></td>
				</tr>
				<tr>
					<td><b>Alamat</b></td>
					<td>&emsp;: <?php echo $invoice->alamat ?></td>
				</tr>
				<tr>
					<td><b>Kurir</b></td>
					<td>&emsp;: <?php echo $invoice->kurir ?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="tabel-penjualan">
		<table class="table table-bordered table-hover table-striped">
			<tr>
				
				<th>Nama Produk</th>
				<th>Jumlah Barang</th>
				<th>Harga Barang</th>
				<th>Total Harga</th>
			</tr>
				<?php 
				$total = 0;
				foreach ($pesanan as $psn) : 
					$subtotal = $psn->jumlah * $psn->harga;
					$total += $subtotal; 
				?>
				<tr>
					<td><?php echo $psn->nama_produk ?></td>
					<td><?php echo $psn->jumlah ?></td>
					<td>Rp <?php echo number_format($psn->harga,0,',','.')  ?></td>
					<td>Rp <?php echo number_format($subtotal,0,',','.')  ?></td>
				</tr>

				<?php endforeach; ?>
				<tr>
            		<td colspan="2">&nbsp;</td>
            		<td><b>Total</b></td>
            		<td><b>Rp <?php echo number_format($total,0,',','.')  ?></b></td>
            	</tr>
		</table>
		
	</div>
	<div class="ttd-total mt-5">
		<div class="ttd" style="margin-left: 50px;">
			<div class="tgl-pesan">
				<b><?php
					$tanggal = $invoice->tgl_pesan;

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
		<div class="total">
			<table>
				<tr>
					<th>Kode Unik</th>
					<td>&emsp;</td>
					<td>&nbsp;</td>
					<td align="right"><b><?php echo $invoice->id_user ?></b></td>
					<td>&emsp;</td>
				</tr>
				<tr>
					<th>Total Bayar</th>
					<td>&emsp;</td>
					<td>&nbsp;</td>
					<td align="right"><b>Rp <?php $biaya = $total + $invoice->id_user; echo number_format($biaya,0,',','.') ?></b></td>
					<td>&emsp;</td>
				</tr>
			</table>
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