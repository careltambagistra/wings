<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="https://www.ukrim.ac.id" class="brand-link">
		<img src="<?= base_url(); ?>assets_dashboard/dist/img/bca-f-logo.png" alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">GISTRA Cell</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url(); ?>assets_dashboard/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
					alt="User Image">
			</div>
			<div class="info">
				<a class="d-block">ADMIN</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview">
					<a href="<?= site_url('ProductList') ?>" class="nav-link">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Product List
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
