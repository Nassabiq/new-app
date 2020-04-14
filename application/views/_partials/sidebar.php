<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">New-App</div>
	</a>
	<!-- Divider -->
	<hr class="sidebar-divider my-0">
	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url(); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">
		<!-- Heading -->
		<div class="sidebar-heading">
			Interface
		</div>
		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link kasir" href="<?php echo site_url('Ckasir') ?>">
				<i class="fas fa-cash-register"></i>
				<span>Kasir</span>
			</a>
		</li>
		<!-- Nav Item - Utilities Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-chart-line"></i>
				<span>Laporan</span>
			</a>
			<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner">
					<h6 class="collapse-header">Laporan</h6>
					<a class="collapse-item" href="utilities-color.html">Penjualan</a>
					<a class="collapse-item" href="utilities-border.html">Pembelian</a>
					<a class="collapse-item" href="<?php echo site_url('Cproduk') ?>">Produk</a>
				</div>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider">
			<!-- Heading -->
			
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->