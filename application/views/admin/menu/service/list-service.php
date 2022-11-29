<div class="container-fluid" style="margin-bottom: 250px">
	<div id="content">
	    <!-- Begin Page Content -->
	    <div class="container-fluid">

	        <!-- Page Heading -->
	        <div class="top-bar">	
	        	<h1 class="h3 mb-2 text-gray-800">SERVICE</h1>
	        	<a href="<?php echo base_url() ?>admin/service/tambah_service" class="btn-tambah-user">
	        		<button type="button" class="btn btn-primary">+ Tambah Service</button>
	        	</a>
	        </div>
	        <!-- DataTales Example -->
	        <div class="card shadow mb-4">
	            <div class="card-body">
	                <div class="table-responsive">
	                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                        <thead>
	                            <tr>
	                                <th>Kode Tiket</th>
	                                <th>Nama</th>
	                                <th>Barang</th>
	                                <th>Nomor WA</th>
	                                <th>Alamat</th>
	                                <th>Tanggal</th>           
	                                <th>Keluhan</th>           
	                                <th>Gambar</th>           
	                                <th>Biaya</th>           
	                                <th>Status</th>           
	                                <th> </th>	                                
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php  
	                        	foreach($service as $service) : ?>

	                        	<tr>
	                                <td>MDC-SERV-<?php echo $service->id_service ?></td>
	                                <td><?php echo $service->nama ?></td>
	                                <td><?php echo $service->barang ?></td>
	                                <td class="img-btn">0<?php echo $service->no_wa ?>
	                                </td>
	                                <td><?php echo $service->alamat ?></td>
	                                <td>
	                                	<?php
											$tanggal = $service->tanggal;

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
	                                <td><?php echo $service->keluhan ?> </td>
	                                <td class="img-btn">
	                                	<a href="<?php echo base_url() ?>assets/uploads/foto/<?php echo $service->gambar ?>">
		                                	<img src="<?php echo base_url() ?>assets/uploads/foto/<?php echo $service->gambar ?>" width="50px">
	                                	</a>
	                                </td>
	                                <td>Rp <?php echo number_format($service->biaya,0,',','.')  ?> </td>
	                                <td class="img-btn">
	                                	<?php if ($service->status == 'Belum Diproses') { ?>
	                                		<span class="badge rounded-pill bg-danger"><?php echo $service->status ?></span>
	                                		<?php echo anchor('https://wa.me/62'.$service->no_wa. '?text=Pesanan dengan tiket MDC-SERV-'.$service->id_service.'%0AJenis Barang : '.$service->barang.'%0ASilahkan datangi Toko MDC di Simpur Center Lantai 3, Tanjung Karang, Bandar Lampung, Lampung untuk memeriksa kerusakan barang',  '<iconify-icon icon="logos:whatsapp-icon"></iconify-icon>') ?>
	                                	<?php } else if ($service->status == 'Sedang Diproses') { ?>
	                                		<span class="badge rounded-pill bg-primary"><?php echo $service->status ?></span>
	                                		<?php echo anchor('https://wa.me/62'.$service->no_wa. '?text=Pesanan dengan tiket MDC-SERV-'.$service->id_service.'%0AJenis Barang : '.$service->barang.'%0ADengan Harga : Rp '.number_format($service->biaya,0,',','.').'%0AStatus service : Sedang dikerjakan',  '<iconify-icon icon="logos:whatsapp-icon"></iconify-icon>') ?>

	                                		<?php } else if ($service->status == 'Validasi Service') { ?>
	                                		<span class="badge rounded-pill bg-warning"><?php echo $service->status ?></span>
	                                		<?php echo anchor('https://wa.me/62'.$service->no_wa. '?text=Pesanan dengan tiket MDC-SERV-'.$service->id_service.'%0AJenis Barang : '.$service->barang.'%0ADengan Harga : Rp '.number_format($service->biaya,0,',','.').'%0AStatus service : Jadi service ga kak??',  '<iconify-icon icon="logos:whatsapp-icon"></iconify-icon>') ?>

	                                	<?php } else { ?>
	                                		<span class="badge rounded-pill bg-success"><?php echo $service->status ?></span>
	                                		<?php echo anchor('https://wa.me/62'.$service->no_wa. '?text=Pesanan dengan tiket MDC-SERV-'.$service->id_service.'%0AJenis Barang : '.$service->barang.'%0ADengan Harga : Rp '.number_format($service->biaya,0,',','.').'%0AStatus service : Sudah selesai dikerjakan %0A Silahkan ambil barang ke toko!',  '<iconify-icon icon="logos:whatsapp-icon"></iconify-icon>') ?>
	                                	<?php } ?> 

	                            	</td>
	                                
	                                <td align="center">
	                                	<a href="<?php echo base_url('admin/service/detail/'.$service->id_service) ?>" target="_blank" style="text-decoration: none;" >
	                                		<div class="btn btn-sm btn-primary"><i class="fa-solid fa-circle-info"></i></iconify-icon></div>
	                                	</a>
	                                	<?php echo anchor('admin/service/edit/' .$service->id_service, '<div class="btn btn-secondary btn-sm"><li class="fa fa-edit"></li></div>') ?>
	                                	<span onclick="javascript: return confirm('Yakin Untuk Menghapus Data Ini?')">
	                                		<?php echo anchor('admin/service/delete/' .$service->id_service, '<div class="btn btn-danger btn-sm"><li class="fa fa-trash"></div>') ?>
	                                	</span>
	                                </td>
	                            </tr>
	                        	<?php endforeach; ?>
	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>

	    </div>
	    <!-- /.container-fluid -->

	</div>
</div>