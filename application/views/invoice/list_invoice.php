<div class="container-fluid" style="margin-top: 100px; margin-bottom: 250px">
	<div id="content">
	    <!-- Begin Page Content -->
	    <div class="container-fluid">

	        <!-- Page Heading -->
	        <h1 class="h3 mb-2 text-gray-800">PEMBELIAN</h1>
	        <!-- DataTales Example -->
	        <div class="card shadow mb-4">
	            <div class="card-body">
	                <div class="table-responsive">
	                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
	                                <th>&nbsp;</th>

	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php
	                            $no=1;
	                            foreach ($invoice as $inv) : 
	                            	if ($inv->id_user == $this->session->userdata('id_user')) { ?>
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
	                                <td>
	                                	<?php if ($inv->status == 'Menunggu Validasi') { ?>
	                                		<span class="badge rounded-pill bg-danger"><?php echo $inv->status ?></span> 
	                                	<?php }else { ?>
	                                		<span class="badge rounded-pill bg-success"><?php echo $inv->status ?></span>
	                                	<?php } ?>
	                                </td>
	                                <td>
	                                	<?php if ($inv->status == 'Selesai Validasi') { ?>
		                                	<a href="<?php echo base_url('invoice/detail/'.$inv->id) ?>" target="_blank">
		                                		<div class="btn btn-sm btn-primary"><i class="fa-solid fa-circle-info"></i></iconify-icon></div>
		                                	</a>
		                                <?php } ?>
	                                </td>

	                            </tr>
	                        	<?php }; endforeach; ?>

	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

