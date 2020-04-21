<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view("_partials/head.php");  ?>
	</head>
	<body>
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Sidebar -->
			<?php $this->load->view("_partials/sidebar.php"); ?>
			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">
				<!-- Main Content -->
				<div id="content">
					<?php $this->load->view("_partials/navbar.php"); ?>
					<div class="container">
						
						<h4>Kasir</h4>
						<hr>
						
						<form method="post" >
							
							<div class="form-row py-2 mb-1" style="background-color: #b9edec;">
								<div class="form-group col-sm-3 col-form-label col-form-label-sm my-0">
									<label for="inputAddress">No Transaksi</label>
									<input type="text" class="form-control form-control-sm" id="inputAddress" value="<?php echo $idtransaksi ?> " placeholder="No Transaksi" readonly="">
								</div>
								<div class="form-group col-sm-2 col-form-label col-form-label-sm m-0">
									<label for="inputAddress2">Tanggal Transaksi</label>
									<input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Tanggal Transaksi" value="<?php echo $tglpenjualan  ?> " readonly>
								</div>
								<div class="form-group col-sm-3 col-form-label col-form-label-sm my-0">
									<label for="inputAddress">Nama Pelanggan</label>
									<input type="text" class="form-control form-control-sm" id="pelanggan" placeholder="Nama Pelanggan">
								</div>
							</div>
						</form>
							<div class="form-row">
								<div class="input-group col-sm-2 input-group-sm mt-1">
									<!-- ID Produk -->
									<select class="custom-select" name="idproduk" id="idproduk"  required>
										<option>Nama Barang</option>
										<?php foreach ($produk as $row): ?>
										<option value="<?php echo $row['idproduk']; ?>"> <?php echo $row['namaproduk']; ?> </option>
										<?php endforeach; ?>
									</select>
								</div>
								
								<div class="form-group col-sm-2 col-form-label col-form-label-sm">
									<!-- Nama Barang -->
									<input type="text" class="form-control form-control-sm" id="namaproduk" placeholder="ID Produk" readonly>
								</div>
								<input type="hidden" class="form-control form-control-sm" id="namaproduk2" readonly>
								<div class="form-group col-sm-2 col-form-label col-form-label-sm">
									<!-- Harga Barang -->
									<input type="text" class="form-control form-control-sm" id="hargaproduk" placeholder="Harga" readonly>
								</div>
								<div class="form-group col-sm-1 col-form-label col-form-label-sm">
									<!-- QTY -->
									<input type="number" class="form-control form-control-sm" id="qty" name="qty" placeholder="Qty">
								</div>
								<div class="form-group col-sm-3 col-form-label col-form-label-sm">
									<button type="submit" class="add_cart btn btn-primary btn-sm" data-idproduk="<?php echo $row['idproduk'];  ?>" data-namaproduk="<?php echo $row['namaproduk']; ?>" data-hargaproduk="<?php echo $row['hargaproduk']; ?>">Submit</button>
								</div>
							</div>
						
						<hr>
						<div class="row">
							<div class="col-sm-8">
								<table class="table table-sm">
									<thead class="thead-light table-bordered">
										<tr>
											<th scope="col">No</th>
											<th scope="col">Id Barang</th>
											<th scope="col">Nama Barang</th>
											<th scope="col">Harga/pcs</th>
											<th scope="col">Qty</th>
											<th scope="col">Subtotal</th>
											<th scope="col">#</th>
										</tr>
									</thead>
									<tbody id="detail_cart">
										<?php 
											$no = 1;
											$total = 0;
											if(!empty($this->cart->contents())): ?>
												
												<?php foreach ($this->cart->contents() as $items): ?>
													<?php $subtotal = $items['qty']*$items['price'];?>
													<tr>
														<td><small><?php echo $no++; ?></small></td>
														<td><small><?php echo $items['id']; ?></small></td>
														<td><small><?php echo $items['name']; ?></small></td>
														<td><small><?php echo number_format($items['price']); ?></small></td>	
														<td><small><?php echo $items['qty']; ?></small></td>	
														<td><small><?php echo number_format($subtotal) ?></small></td>
														<td><a href="<?php echo site_url('ckasir/del_cart/'.$items['rowid']); ?>" class="btn btn-danger btn-sm"> <i class="fas fa-window-close"></i></a></td>

														
													</tr>
												<?php endforeach; ?>
											<?php endif; ?>
									</tbody>
								</table>
							</div>
							<div class="col-sm">
							<div class="form-group col-sm-10 col-form-label col-form-label-sm my-0">
									<!-- Jumlah Pembayaran -->
									<label for="">Jumlah Bayar</label>
									<input type="text" class="form-control form-control-sm" id="bayar" placeholder="Bayar">
								</div>
								<div class="form-group col-sm-10 col-form-label col-form-label-sm my-0">
									<!-- Total -->
									<label for="">Total Harga</label>
									<input type="text" class="form-control form-control-sm" id="totalharga" placeholder="Total" value="<?php echo  $this->cart->total();?>">
								</div>
								<div class="form-group col-sm-10 col-form-label col-form-label-sm">
									<!-- Total -->
									<label for="">Kembalian</label>
									<input type="text" class="form-control form-control-sm" id="kembali" readonly>
								</div>
								<div class="form-group col-sm-10 col-form-label col-form-label-sm mx-2">
									<!-- button -->
									<a class="btn btn-info btn-sm" href=""><i class="fas fa-print mr-1"></i> Cetak</a>
									<a class="btn btn-secondary btn-sm" href="<?php echo	site_url('ckasir/cancel_cart');?>"><i class="fas fa-print mr-1"></i> Batal</a>
								</div>
							</div>
								
						</div>
					</div>
				</div>
				<!-- End of Main Content -->
			</div>
			<!-- End of Content Wrapper -->
		</div>
		<!-- End of Page Wrapper -->
		<!-- Scroll to Top Button-->
		<?php $this->load->view("_partials/toTop.php");  ?>
		<!-- Logout Modal-->
		<?php $this->load->view("_partials/modal.php"); ?>
		<?php $this->load->view("_partials/js.php"); ?>
		
		<script>
			$(document).ready(function(){

			//AUTOFILL FORM

			$("#idproduk").on('change', function() {
				
				var idproduk = $("#idproduk").val();
				$.ajax({
					url : "<?php echo site_url('ckasir/cek_ajax');?>",
					method : "POST",
					data : {
						'idproduk' : idproduk

					},
					datatype : "json",
					success: function (data) {
						var arr = JSON.parse(data);
						var id = '';
						for (var index = 0; index < arr.length; index++) {
							id = arr[index];
							// console.log(id.idproduk);
							if (id.idproduk == idproduk) {
								if (id.namaproduk == arr[index].namaproduk) {
									$("#namaproduk2").val(id.namaproduk);	
								}
								$("#namaproduk").val(id.idproduk);
								// console.log(id.idproduk);
								if (id.hargaproduk == arr[index].hargaproduk) {
									$("#hargaproduk").val(id.hargaproduk);	
								}
									
							}
						}
					}

				});
			});
			
			// ADD CART
			$('.add_cart').click(function(){
				var idproduk = $('#idproduk').val();
				var namaproduk = $('#namaproduk2').val();
				var hargaproduk = $('#hargaproduk').val();
				var qty = $('#qty').val();

				$.ajax({
					url : "<?php echo site_url('ckasir/add_cart') ?>",
					method : "POST",
					data : {
						'idproduk' : idproduk,
						'namaproduk' : namaproduk,
						'hargaproduk' : hargaproduk,
						'qty' : qty
					},
					success : function(data){
						// $('#detail_cart').html(datacart);
						console.log(data);
						document.location.href="<?php echo site_url('ckasir'); ?>";
					}
				});
			});

			//Kembalian
			// $('#bayar').autoNumeric('init');
			// $('#totalharga').autoNumeric('init');
			// $('#kembali').autoNumeric('init');


			$('#bayar').keyup(function(){
				var bayar = $('#bayar').val();
				var totalharga = $('#totalharga').val();
				
				if (bayar != null) {
					$('#kembali').val(bayar-totalharga);	
				}
				
			});

			


		});
		</script>
	</body>
</html>