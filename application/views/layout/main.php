<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">


	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- googlefont style -->
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Nunito|Permanent+Marker" rel="stylesheet">

	<!-- style -->
	<link href="<?php echo base_url(); ?>css/master.css" rel="stylesheet">

	<title>admin</title>
</head>

<body>
	<div class="d-flex" id="wrapper">
		<!-- Sidebar -->
		<div class="border-right" id="sidebar-wrapper">
			<div class="sidebar-heading">
			</div>

			<div class="list-group">
				<a href="<?php echo base_url(); ?>index.php/customer" class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i>
					Customer</a>
				<a href="<?php echo base_url(); ?>index.php/member" class="list-group-item list-group-item-action"><i class="fas fa-user-friends"></i>
					Member</a>
				<a href="<?php echo base_url(); ?>index.php/keuangan" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i> Laporan
					Keuangan</a>
				<a href="<?php echo base_url(); ?>index.php/admin" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>
					Admin</a>
			</div>
		</div>
		<!--end of sidebar-->

		<div id="page-content-wrapper">
			<!-- navbar -->
			<nav class="navbar navbar-expand navbar-info border-bottom">

				<!-- Logo -->
				<h3 class="navbar-brand">
					<span id="logo">Blue</span>
					<span id="logi">Sky</span>
				</h3>
				<!-- end of Logo -->

				<!-- Menu -->
				<i class="fas fa-bars" id="menu-toggle"></i>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- end of Menu -->

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<span class="mx-2 align-self-center" id="waktu"></span>
						<li class="nav-item dropdown no-arrow mx-1">
							<a href="<?= base_url('index.php/logout') ?>">
								<i class="fas fa-sign-out-alt"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!--end of navbar -->

			<?php 
                $this->load->view($main_view);
            ?>

		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	

	<script>
		$("#menu-toggle").click(function (e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
		let time = new Date()
		let waktu = document.querySelector('#waktu').innerHTML = time.toDateString()
	</script>
</body>

</html>
