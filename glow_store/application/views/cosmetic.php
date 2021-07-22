<div class="container-fluid">
  <div class="row text-center">
    
    <?php foreach ($Cosmetic as $brg) : ?>

        <div class="card mr-2" style="width: 12rem;">
          <img src="<?php echo base_url(). '/uploads/'. $brg->gambar ?>" class="card-img-top mb-1" alt="...">
          <div class="card-body">
            <h5 class="card-title text-dark mb-2"><?php echo $brg->nama_brg ?></h5>
            <h6><span class="badge badge-pill bg-success text-light mb-2">Rp. <?php echo number_format($brg->harga, 2,',','.') ?></span></h6>
            <p></p>
            <?php echo anchor('Dashboard/ke_keranjang/'. $brg->id_brg, '<div class="btn btn-primary btn-sm mr-2"><i class="fas fa-cart-plus"></i></div>') ?>
            <?php echo anchor('Dashboard/detail/'. $brg->id_brg, '<div class="btn btn-warning btn-sm ml-2"><i class="fas fa-exclamation mr-1 ml-1"></i></div>') ?>
            
          </div>
        </div>           
            

    <?php endforeach; ?>

  </div>
</div>