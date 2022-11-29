<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion sidebar-bar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center brand-fix" href="<?php echo base_url()?>dashboard">
                <div class="logo">
                    <img src="<?php echo base_url() ?>assets/img/logo.png" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3 title-logo">MEDIA DATA COMPUTER</div>
                <hr>
            </a>

            <div class="navbar-fix" style="margin-top: 70px">

                <!-- Nav Item - Dashboard -->
                <div class="navbar-content">
                    <li class="nav-item <?php echo menuAktif('dashboard') ?>">

                        <a class="nav-link" href="<?php echo base_url()?>dashboard">
                            <i class="fa-solid fa-house"></i>
                            <span>Dashboard</span></a>
                    </li>

                    <!-- Heading -->
                    <div class="sidebar-heading-s">
                        PRODUK :
                    </div>

                    
                    <!-- Nav Item - Charts -->
                    <li class="nav-item <?php echo menuAktif('laptop') ?>">
                        <a class="nav-link" href="<?php echo base_url()?>laptop">
                            <iconify-icon icon="emojione-monotone:laptop-computer"></iconify-icon>
                            <span>LAPTOP</span></a>
                    </li>

                    <li class="nav-item <?php echo menuAktif('proyektor') ?>">
                        <a class="nav-link" href="<?php echo base_url()?>proyektor">
                            <iconify-icon icon="teenyicons:usb-cable-solid"></iconify-icon>
                            <span>KOMPONEN</span></a>
                    </li>

                    <li class="nav-item <?php echo menuAktif('printer') ?>">
                        <a class="nav-link" href="<?php echo base_url()?>printer">
                            <iconify-icon icon="emojione-monotone:printer"></iconify-icon>
                            <span>PRINTER</span></a>
                    </li>

                    <!-- Nav Item - Tables -->
                    <li class="nav-item <?php echo menuAktif('aksesoris') ?>">
                        <a class="nav-link" href="<?php echo base_url()?>aksesoris">
                            <iconify-icon icon="emojione-monotone:headphone"></iconify-icon>
                            <span>AKSESORIS</span></a>
                    </li>

                    <!-- Divider -->

                    <?php if($this->session->userdata('username')) { ?>
                    <div class="sidebar-heading-s">
                        MENU :
                    </div>

                    <li class="nav-item <?php echo menuAktif('service') ?>">
                        <a class="nav-link" href="<?php echo base_url()?>service/service">
                            <iconify-icon icon="icon-park-outline:setting-laptop"></iconify-icon>
                            <span>FORM SERVICE</span>
                        </a>
                    </li>
                    <li class="nav-item <?php echo menuAktif('list_service') ?>">
                        <a class="nav-link" href="<?php echo base_url()?>service/list_service">
                            <iconify-icon icon="icon-park-outline:setting-laptop"></iconify-icon>
                            <span>LIST SERVICE</span>
                        </a>
                    </li>
                    <?php } ?>
                </div>

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="sidebar-toggler box-toglsdb">
                    <div class="text-center">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                </div>
            </div>
        </ul>