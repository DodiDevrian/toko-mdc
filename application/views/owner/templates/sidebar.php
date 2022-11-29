<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion sidebar-bar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="logo">
                    <img src="<?php echo base_url() ?>assets/img/logo.png" height="30px" height="30px">
                </div>
                <div class="sidebar-brand-text mx-3 title-logo">MEDIA DATA COMPUTER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item <?php echo menuAktif('dashboard_owner') ?>">

                <a class="nav-link" href="<?php echo base_url()?>owner/dashboard_owner">
                    <i class="fa-solid fa-house"></i>
                    <span>PANEL</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading-s">
                MENU :
            </div>

            
            <!-- Nav Item - Charts -->
            <li class="nav-item <?php echo menuAktif('produk') ?>">
                <a class="nav-link" href="<?php echo base_url()?>owner/produk">
                    <iconify-icon icon="emojione-monotone:laptop-computer"></iconify-icon>
                    <span>PRODUK</span></a>
            </li>

            <li class="nav-item <?php echo menuAktif('user') ?>">
                <a class="nav-link" href="<?php echo base_url()?>owner/user">
                    <iconify-icon icon="bxs:user-account"></iconify-icon>
                    <span>USER</span></a>
            </li>

            <li class="nav-item <?php echo menuAktif('service') ?>">
                <a class="nav-link" href="<?php echo base_url()?>owner/service">
                    <iconify-icon icon="heroicons:wrench-screwdriver-20-solid"></iconify-icon>
                    <span>SERVICE</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?php echo menuAktif('invoice') ?>">
                <a class="nav-link" href="<?php echo base_url()?>owner/invoice">
                    <iconify-icon icon="fa6-solid:money-check-dollar"></iconify-icon>
                    <span>PEMBELIAN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        