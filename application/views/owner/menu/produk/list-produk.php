<div class="container-fluid" style="margin-bottom: 250px;">
	<div id="content">
	    <!-- Begin Page Content -->
	    <div class="container-fluid">

	        <!-- Page Heading -->
	        <div class="top-bar">	
	        	<h1 class="h3 mb-2 text-gray-800">PRODUK</h1>
	        </div>
	        <!-- DataTales Example -->
	        <div class="card shadow mb-4">
	            <div class="card-body">
	                <div class="table-responsive">
	                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                        <thead>
	                            <tr>
	                                <th>No</th>
	                                <th>Nama Barang</th>
	                                <th>Merek</th>
	                                <th>Harga</th>
	                                <th>Stok</th>
	                                <th>Garansi</th>
	                                <th>Kategori</th>
	                                <th>Gambar</th>
	                                
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php  
	                        	$no=1;
	                        	foreach($barang as $brg) : ?>
	                        	<tr>
	                                <td><?php echo $no++ ?></td>
	                                <td><?php echo $brg->nama_produk ?></td>
	                                <td><?php echo $brg->merek ?></td>
	                                <td>Rp. <?php echo number_format($brg->harga,0,',','.') ?></td>
	                                <td><?php echo $brg->stok ?></td>
	                                <td><?php echo $brg->masa_garansi ?></td>
	                                <td><?php echo $brg->kategori ?></td>
	                                <td class="img-btn" style="border-bottom: 1px solid #e3e6f0; border-right: 1px solid #e3e6f0;">
	                                	<img src="<?php echo base_url() ?>assets/uploads/<?php echo $brg->gambar ?>" width="50px"  >
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