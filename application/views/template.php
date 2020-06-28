<!-- load header from template -->
<?php $this->load->view('template/header') ?>

<!-- load navbar from template -->
<?php $this->load->view('template/navbar') ?>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	<!-- load navbar from template -->
	<div class="app-body">
		<!-- load dynamic sidebar -->
		<?php $this->load->view($level . '/sidebar') ?>

		<!-- Your content will be here-->
		<main class="main">
			<!-- Breadcrumb-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Admin</li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- load dynamic content  -->
			<?= $contents; ?>
		</main>

	</div>

	<!-- load footer from template -->
	<?php $this->load->view('template/footer') ?>