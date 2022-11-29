<div class="container-fluid" style="margin-top: 100px;">
	<div id="content">
	    <!-- Begin Page Content -->
	    <div class="container-fluid">

	        <!-- Page Heading -->
	        <div class="top-bar">	
	        	<h1 class="h3 mb-2 text-gray-800">SERVICE</h1>
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
	                                <th>Alamat</th>
	                                <th>Barang</th>
	                                <th>Keluhan</th>           
	                                <th>Biaya</th>           
	                                <th>Status</th>           
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php foreach($service as $service) : ?>

		                        	<?php if ($service->id_user == $this->session->userdata('id_user')) { ?>
		                        	
		                        	<tr>
		                        		<td>MDC-SERV-<?php echo $service->id_service ?></td>
		                                <td><?php echo $service->nama ?></td>
		                                <td><?php echo $service->alamat ?></td>
		                                <td><?php echo $service->barang ?></td>
		                                <td><?php echo character_limiter($service->keluhan, 40) ?> </td>
		                                <td>Rp <?php echo number_format($service->biaya,0,',','.')  ?> </td>
		                                <td>
		                                	<?php if ($service->status == 'Belum Diproses') { ?>
		                                		<span class="badge rounded-pill bg-danger"><?php echo $service->status ?></span>
		                                	<?php } else if ($service->status == 'Sedang Diproses') { ?>
		                                		<span class="badge rounded-pill bg-primary"><?php echo $service->status ?></span>

		                                	<?php } else if ($service->status == 'Validasi Service') { ?>
		                                		<span class="badge rounded-pill bg-warning"><?php echo $service->status ?></span>

		                                	<?php } else { ?>
		                                		<span class="badge rounded-pill bg-success"><?php echo $service->status ?></span>
		                                	<?php } ?> 

		                            	</td>
		                            </tr>
		                       		<?php } ?>
	                        	<?php endforeach; ?>

	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>

	    </div>

	</div>
</div>