<div class="container-fluid" style="margin-bottom: 250px">
	<div id="content">
	    <!-- Begin Page Content -->
	    <div class="container-fluid">

	        <!-- Page Heading -->
	        <div class="top-bar">	
	        	<h1 class="h3 mb-2 text-gray-800">USER</h1>
	        	<a href="user/tambah_admin" class="btn-tambah-user">
	        		<button type="button" class="btn btn-primary">+ Tambah Admin</button>
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
	                                <th>Username</th>
	                                <th>Nama User</th>
	                                <th>Role</th>
	                                <th>&nbsp;</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php
	                        	$no=1;
	                        	foreach ($user as $user) : 
	                        		if (($user->role == 1) || ($user->role == 2)) { ?>

	                        	<tr>
	                        		<td><?php echo $no++ ?></td>
	                                <td><?php echo $user->username ?></td>
	                                <td><?php echo $user->nama_user ?></td>
	                                <td>
	                                	<?php if ($user->role == 1) {
	                                	echo 'Admin';
	                                } else echo 'User'; ?>
	                                </td>
	                                <td onclick="javascript: return confirm('Yakin Untuk Menghapus Data Ini?')">
	                                	<?php if ($user->role == 1) {
	                                		echo anchor('owner/user/delete/' .$user->id_user, '<div class="btn btn-danger btn-sm"><li class="fa fa-trash"></div>');
	                                	} ?>
	                                </td>
	                            </tr>
	                        	<?php }; endforeach; ?>

	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>

	    </div>
	    <!-- /.container-fluid -->

	</div>
</div>