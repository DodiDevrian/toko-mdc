<div class="slider-top slider-bg">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url()?>assets/img/banner/banner1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url()?>assets/img/banner/banner2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url()?>assets/img/banner/banner3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>

<div class="container margin-bot">

    <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="mt-5 col-lg-3">
                <div class="card" style="width: 18rem; height: 542px;">
                    <img src="<?php echo base_url() ?>assets/uploads/<?php echo $brg->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center flex-bedge">
                        <div class="reg1">
                            <h5 class="card-title text-start"><?php echo character_limiter($brg->nama_produk, 45); ?></h5>
                            </span><br>
                        </div>
                        <div class="reg1 text-start">
                                <?php if ($brg->stok > 0) {
                                    echo "<span class='badge rounded-pill bg-success text-start mt-2'>Ready</span>";
                                }else{
                                    echo "<span class='badge rounded-pill bg-danger text-start mt-2'>Kosong</span>";
                                }
                                ?>
                            <p class="text-start harga">Rp  <?php echo number_format($brg->harga)  ?></p>
                            <?php if($this->session->userdata('username')) { ?>
                                <?php if ($brg->stok > 0) {
                                    echo anchor('dashboard/keranjang/'. $brg->id_produk, '<div class="btn btn-primary bg-gradient">Tambah Keranjang</div>');
                                }else{
                                    echo '<div class="btn btn-primary bg-gradient" data-toggle="modal" data-target="#stok0">Tambah Keranjang</div>';
                                }
                                ?>
                            <?php } ?>
                            <?php echo anchor('dashboard/detail/'. $brg->id_produk, '<div class="btn btn-success bg-gradient">Detail</div>') ?>
                        </div>
                    </div>
                </div>  
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col mt-5"><?php echo $pagination; ?></div>
</div>

<div class="modal fade" id="stok0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stok Abis</h5>
      </div>
      <div class="modal-body">
        Maaf, Stok Barang Habis
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>