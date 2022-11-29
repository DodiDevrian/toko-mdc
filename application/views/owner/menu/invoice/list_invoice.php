
<div class="container-fluid" style="margin-bottom: 250px">
	<div id="content">
	    <!-- Begin Page Content -->
	    <div class="container-fluid">

	        <!-- Page Heading -->
	        <h1 class="h3 mb-2 text-gray-800">PEMBELIAN</h1>
	        <!-- DataTales Example -->
	        <div class="card shadow mb-4">
	            <div class="card-body">
	                <div class="table-responsive">
	                    <table id="table" class="table table-bordered display" style="width:100%">
	                        <thead>
	                            <tr>
	                                <th>No</th>
	                                <th>Kode Pembelian</th>
	                                <th>Nama Pembeli</th>
	                                <th>Alamat Pengiriman</th>
	                                <th>Tanggal Pemesanan</th>
	                                <th>Nomor HP</th>
	                                <th>Kurir</th>
	                                <th>Bukti Pembayaran</th>
	                                <th>Status</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php
	                            $no=1;
	                            foreach ($invoice as $inv) : ?>
	                            <tr>
	                            	<td><?php echo $no++ ?></td>
	                            	<td>MDC-INV-<?php echo $inv->id ?></td>
	                                <td><?php echo $inv->nama ?></td>
	                                <td><?php echo $inv->alamat ?></td>
	                                <td>
	                                	<?php
											$tanggal = $inv->tgl_pesan;

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
	                                <td><?php echo $inv->nomor ?></td>
	                                <td><?php echo $inv->kurir ?></td>
	                                <td><img src="<?php echo base_url() ?>assets/uploads/bukti/<?php echo $inv->gambar ?>" width="50px"></td>
	                                <td class="img-btn">
	                                	<?php if ($inv->status == 'Menunggu Validasi') { ?>
	                                		<span class="badge rounded-pill bg-danger"><?php echo $inv->status ?></span>
	                                		<?php echo anchor('https://wa.me/62'.$inv->nomor. '?text=Pembelian Produk Toko Media Data Computer Pada Tanggal '.$inv->tgl_pesan.' Dengan Rincian :%0A%0AKode Pembelian: MDC-INV-'.$inv->id.'%0ANama Lengkap: '.$inv->nama.'%0AAlamat : '.$inv->alamat.'%0AKurir : '.$inv->kurir.'%0A%0ASedang dilakukan validasi pembayaran, silahkan tunggu beberapa saat.',  '<iconify-icon icon="logos:whatsapp-icon"></iconify-icon>') ?> 
	                                	<?php }else { ?>
	                                		<span class="badge rounded-pill bg-success"><?php echo $inv->status ?></span>
	                                		<?php echo anchor('https://wa.me/62'.$inv->nomor. '?text=Pembelian Produk Toko Media Data Computer Pada Tanggal '.$inv->tgl_pesan.' Dengan Rincian :%0A%0AKode Pembelian: MDC-INV-'.$inv->id.'%0ANama Lengkap: '.$inv->nama.'%0AAlamat : '.$inv->alamat.'%0AKurir : '.$inv->kurir.'%0A%0APembayaran sudah tervalidasi.',  '<iconify-icon icon="logos:whatsapp-icon"></iconify-icon>') ?> 
	                                	<?php } ?>
	                                </td>
	                                <td>
	                                	<?php if ($inv->status == 'Selesai Validasi') { ?>
		                                	<a href="<?php echo base_url('owner/invoice/detail/'.$inv->id) ?>" target="_blank">
		                                		<div class="btn btn-sm btn-primary"><i class="fa-solid fa-circle-info"></i></iconify-icon></div>
		                                	</a>
		                                <?php } ?>
	                                </td>

	                            </tr>
	                        	<?php endforeach; ?>

	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>