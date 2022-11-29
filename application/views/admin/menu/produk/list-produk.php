<div class="container-fluid" style="margin-bottom: 250px;">
	<div id="content">
	    <!-- Begin Page Content -->
	    <div class="container-fluid">

	        <!-- Page Heading -->
	        <div class="top-bar">	
	        	<h1 class="h3 mb-2 text-gray-800">PRODUK</h1>
	        	<a href="produk/tambah_produk" class="btn-tambah-user">
	        		<button type="button" class="btn btn-primary">+ Tambah Produk</button>
	        	</a>
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
	                                <th></th>
	                                
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
	                                <td class="img-btn">
	                                	<img src="<?php echo base_url() ?>assets/uploads/<?php echo $brg->gambar ?>" width="50px">
	                                		<?php echo anchor('admin/produk/edit_gambar/' .$brg->id_produk, '<i class="fa-solid fa-upload"></i>') ?>

	                                </td>
	                                <td align="center">
	                                	<?php echo anchor('admin/produk/edit/' .$brg->id_produk, '<div class="btn btn-secondary btn-sm"><li class="fa fa-edit"></li></div>') ?>
	                                	<span onclick="javascript: return confirm('Yakin Untuk Menghapus Data Ini?')">
	                                		<?php echo anchor('admin/produk/delete/' .$brg->id_produk, '<div class="btn btn-danger btn-sm"><li class="fa fa-trash"></div>') ?>
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
	</div>
</div>