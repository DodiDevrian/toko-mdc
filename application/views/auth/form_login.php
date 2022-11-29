<link href="<?php echo base_url()?>assets/css/panel.css" rel="stylesheet">

<body class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?php echo base_url() ?>assets/img/logo.png" width="250" >
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>

                                    <?php echo $this->session->flashdata('pesan') ?>

                                    <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Username..." name="username">

                                            <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukkan Password..." name="password">
                                            <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary form-control" style="border-radius: 20px;">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('register') ?>">Belum punya akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>