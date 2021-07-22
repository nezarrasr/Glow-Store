<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"><a href="<?php echo base_url('Dashboard/index') ?>" ><div class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left "></i></div></a></div>
		<div class="col-md-8">
		<div class="btn btn-sm btn-success">
		<?php 
		$grandtotal=0;
		if($keranjang = $this->cart->contents())
		{
			foreach($keranjang as $item){
				$grandtotal = $grandtotal + $item['subtotal'];
			}
			echo "<h4>Total pembayaran : Rp.". number_format($grandtotal,2,',','.');
		
		 ?>	
		 </div><br><br>
		 <h3>Input Alamat Pengiriman dan Pembayaran</h3>

		 <form method="post" action="<?php echo base_url() ?>Dashboard/pesanan">
		 	<div class="form-group">
		 		<label>Nama Lengkap</label>
		 		<input type="text" name="nama" placeholder="Nama Anda" class="form-control" required="">
		 	</div>
		 	<div class="form-group">
		 		<label>Alamat Lengkap</label>
		 		<input type="text" name="alamat" placeholder="Alamat Anda" class="form-control" required="">
		 	</div>
		 	<div class="form-group">
		 		<label>Nomor Hp.</label>
		 		<input type="text" name="no_hp" placeholder="Nomor Handphone Anda" class="form-control" required="">
		 	</div>
		 	<div class="form-group">
		 		<label>Jasa Pengiriman</label>
		 		<select class="form-control" required="">
		 			<option>JNE</option>
		 			<option>J&T</option>
		 			<option>Gojek</option>
		 			<option>Grab</option>
		 		</select>
		 	</div>
		 	<div class="form-group">
		 		<label>Pilih Bank</label>
		 		<select class="form-control" required="">
		 			<option>BCA - XXXXXXX</option>
		 			<option>BNI - XXXXXXX</option>
		 			<option>BRI - XXXXXXX</option>
		 		</select>
		 	</div>

			
		 	<button type="submit" class="btn btn-sm btn-success ml-4 mt-3">Pesan</button>
		 	
				
		 	
		 <?php 
		}else
		{

			echo "<h4>Anda belum melakukan pemesanan :(";

		}
		 ?>
				 
		</div>
		
		<div class="col-md-2"></div>
	</div>
</div>