<div class="container-fluid">
	<div class="card">
	  <h5 class="card-header">Detail Produk</h5>
	  <div class="card-body">

	<?php foreach($barang as $brg): ?>
	   <div class="row">
	   	<div class="col-md-4">
	   		<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?> " class="card-img-top">
	   		
	   	</div>
	   <div class="col-md-8"> 
	   	<table class="table table-bordered">
	   		<tr>
	   			<td>Nama Produk</td>
	   			<td><strong><?php echo $brg->nama_brg ?></strong></td>
	   		</tr>
	   		<tr>
	   			<td>Harga</td>
	   			<td><strong>Rp. <?php echo number_format($brg->harga,2,',','.') ?></strong></td>
	   		</tr>
	   		<tr>
	   			<td>Stok sisa</td>
	   			<td><strong><?php echo $brg->stok?></strong></td>
	   		</tr>
	   	</table>
        <?php echo anchor('Dashboard/index/', '<div class="btn btn-secondary btn-sm"><i class="fas fa-arrow-circle-left"></i></div>') ?>
        <?php echo anchor('Dashboard/ke_keranjang/'. $brg->id_brg, '<div class="btn btn-primary btn-sm ml-2"><i class="fas fa-cart-plus"></i></div>') ?>

	   </div>
	   </div>
	<?php endforeach; ?>

 	 </div>
</div>
</div>