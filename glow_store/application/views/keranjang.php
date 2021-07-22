<div class="container-fluid">
	<h4>Keranjang</h4>

	<table class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Total</th>	
		</tr>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) :
		 ?>
		 	<tr>
		 		
		 		<td><?php echo $no++ ?></td>
		 		<td><?php echo $items['name'] ?></td>
		 		<td><?php echo $items['qty'] ?></td>
		 		<td align="right">Rp. <?php echo number_format($items['price'],2,',','.') ?></td>
		 		<td align="right"><?php echo number_format( $items['subtotal'],2,',','.')?></td>
		 	</tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="4"></td>
			<td align="right">Rp. <?php echo number_format($this->cart->total(),2,',','.') ?></td>
		</tr>
	</table>

	<div align="center">
		<a href="<?php echo base_url('Dashboard/index') ?>" ><div class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left "></i></div></a>
		<a  href="<?php echo base_url('Dashboard/hapus_keranjang') ?>" ><div  class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></div></a>
		<a  href="<?php echo base_url('Dashboard/pembayaran') ?>" ><div class="btn btn-sm btn-success"><i class="fas fa-cart-arrow-down "></i></div></a>
	</div>

</div>