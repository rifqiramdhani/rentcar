<div class="sidebar">
	<nav class="sidebar-nav">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url($level.'/page/dashboard') ?>">
					<i class="nav-icon fas fa-tachometer-alt"></i> Dashboard
				</a>
			</li>
			<li class="nav-title">MAIN NAVIGATION</li>
			<li class="nav-item">
				<a class="nav-link " href="<?= base_url($level. '/page/mobil') ?>">
					<i class="nav-icon fas fa-car"></i> Mobil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="<?= base_url($level. '/page/transaksi') ?>">
					<i class="nav-icon fas fa-file-invoice"></i> Transaksi</a>
			</li>

			<li class="nav-item nav-dropdown ">
				<a class="nav-link nav-dropdown-toggle" href="#">
					<i class="nav-icon fas fa-balance-scale"></i> Perbandingan</a>
				<ul class="nav-dropdown-items">

					<li class="nav-item">
						<a class="nav-link " href="?page=perbandingankriteria">
							<i class="nav-icon fas fa-clipboard-check"></i> Kriteria
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="?page=perbandingansubkriteria">
							<i class="nav-icon fas fa-clipboard-check"></i> Subkriteria
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</div>