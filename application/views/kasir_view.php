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
						<form method="post" action="">
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
									<input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Nama Pelanggan">
								</div>
							</div>
							<div class="form-row">
								<div class="input-group col-sm-2 input-group-sm mt-1">
									<!-- <label for="inputEmail4">Nama Barang</label> -->
									<select class="custom-select" name="namaproduk" id="namaproduk" onchange="getIdProduk()" required>
										<option>Nama Barang</option>
										<?php foreach ($produk as $row): ?>
										<option value="<?php echo $row->idproduk;?>"> <?php echo $row->namaproduk; ?> </option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group col-sm-2 col-form-label col-form-label-sm">
									<!-- <label for="inputEmail4">Nama Barang</label> -->
									<input type="text" class="form-control form-control-sm" id="idbarang" placeholder="id Barang" readonly>
								</div>
								<div class="form-group col-sm-2 col-form-label col-form-label-sm">
									<!-- <label for="inputPassword4">Harga</label> -->
									<input type="text" class="form-control form-control-sm" id="hargaproduk" placeholder="Harga" readonly>
								</div>
								<div class="form-group col-sm-1 col-form-label col-form-label-sm">
									<!-- <label for="inputPassword4">Jumlah</label> -->
									<input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="Qty">
								</div>
								<div class="form-group col-sm-3 col-form-label col-form-label-sm">
									<button type="submit" class="btn btn-primary btn-sm">Submit</button>
								</div>
							</div>
						</form>
						<hr>
						<div class="row">
							<div class="col-sm-8">
								<table class="table table-sm">
									<thead class="thead-light table-bordered">
										<tr>
											<th scope="col">No</th>
											<th scope="col">Id Barang</th>
											<th scope="col">Nama Barang</th>
											<th scope="col">Jumlah</th>
											<th scope="col">Harga</th>
											<th scope="col">#</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div>
							<div class="col-sm">
								One of three columns
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
			function getIdProduk() {
				const tes = document.getElementById('namaproduk').value;
				document.getElementById('idbarang').value=tes;
				// document.getElementById('hargaproduk').value=tes;
			}
		</script>
	</body>
</html>