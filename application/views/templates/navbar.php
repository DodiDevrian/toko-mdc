<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

	    <!-- Topbar -->
	    <div class="head-menu">
	        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow navbar-fix">

	            <!-- Sidebar Toggle (Topbar) -->
	            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	                <i class="fa fa-bars"></i>
	            </button>

	            <!-- Topbar Search -->
	            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?php echo base_url() ?>dashboard/search" method="post">
	                <div class="input-group">
	                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Produk..."
	                        aria-label="Search" aria-describedby="basic-addon2" name="keyword" value="<?php echo set_value('keyword'); ?>">
	                    <div class="input-group-append">
	                        <button class="btn btn-primary" type="submit">
	                            <i class="fas fa-search fa-sm"></i>
	                        </button>
	                    </div>
	                </div>
	            </form>

	            <!-- Topbar Navbar -->
	            <ul class="navbar-nav ml-auto">

	                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
	                <li class="nav-item dropdown no-arrow d-sm-none">
	                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
	                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="fas fa-search fa-fw"></i>
	                    </a>
	                    <!-- Dropdown - Messages -->
	                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
	                        aria-labelledby="searchDropdown">
	                        <form class="form-inline mr-auto w-100 navbar-search" action="<?php echo base_url('dashboard/search') ?>">
	                            <div class="input-group">
	                                <input type="text" class="form-control bg-light border-0 small"
	                                    placeholder="Cari Produk" aria-label="Search"
	                                    aria-describedby="basic-addon2">
	                                <div class="input-group-append">
	                                    <button class="btn btn-primary" type="button">
	                                        <i class="fas fa-search fa-sm"></i>
	                                    </button>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </li>

	                <!-- Nav Item - Alerts -->
	                <?php if ($this->session->userdata('role')==2) {

	                 ?>
	                <li class="nav-item dropdown no-arrow mx-1">
	                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
	                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        	<div class="icon-navbar">
	                        		<iconify-icon icon="bxs:shopping-bags" width="30" height="30"></iconify-icon>
	                        		<span class="badge badge-danger badge-counter"><?php echo $this->cart->total_items() ?></span>
	                        	</div>
	                        <!-- Counter - Alerts -->
	                    </a>
	                    <!-- Dropdown - Alerts -->
	                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
	                        aria-labelledby="alertsDropdown">
	                        <h6 class="dropdown-header">
	                            Keranjang
	                        </h6>
	                        <?php foreach ($this ->cart->contents() as $items) : ?>
	                        <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url()?>dashboard/detail_keranjang">
	                            <div class="mr-3">
	                                <div class="icon-circle bg-primary">
	                                    <img class="ml-1" src="<?php echo base_url() ?>assets/uploads/<?php echo $items['gambar'] ?>" width="60" class="mr-3">
	                                </div>
	                            </div>
	                            <div>
	                                <div class="small text-gray-500">Rp <?php echo number_format($items['price'],0,',','.')  ?> x <?php echo $items['qty'] ?></div>
	                                <span class="font-weight-bold"><?php echo character_limiter($items['name'], 45) ?></span>
	                            </div>
	                        </a>
	                    <?php endforeach; ?>
	                        <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url()?>dashboard/detail_keranjang">Tampilkan Semua Data Keranjang</a>
	                    </div>
	                </li>

	                <!-- Nav Item - Messages -->
	                <li class="nav-item dropdown no-arrow mx-1">
	                    <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>invoice" >
	                        <iconify-icon icon="mdi:invoice-check" width="25" height="25"></iconify-icon>
	                    </a>
	                </li>
	            <?php } ?>
	            </ul>
	            <div class="topbar-divider d-none d-sm-block"></div>

	                <ul class="nav navbar-nav navbar-right">
	                	<?php if($this->session->userdata('username')) { ?>
	                		<li class="nav-item dropdown no-arrow">
			                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
			                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('username') ?></span>
			                        <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/undraw_profile.svg">
			                    </a>
			                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
			                        aria-labelledby="userDropdown">
			                        <div class="dropdown-divider"></div>
			                        <a class="dropdown-item" href="<?php echo base_url() ?>auth/logout" data-toggle="modal" data-target="#logoutModal">
			                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
			                            Logout
			                        </a>
			                    </div>
			                </li>
	                	<?php }else{ ?>
	                		<a class="dropdown-item" href="<?php echo base_url() ?>auth/login">
	                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
	                            Login
	                        </a>
	                		<!-- <li><?php echo anchor('auth/login', 'Login'); ?></li> -->
	                	<?php } ?>
	                </ul>

	        </nav>
	        
	    </div>