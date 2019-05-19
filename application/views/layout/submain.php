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

    <title>edit customer</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div id="page-content-wrapper">
            <!-- navbar -->
            <nav class="navbar navbar-expand navbar-info border-bottom">

                <!-- Logo -->
                <h3 class="navbar-brand">
                    <span id="logo">Blue</span>
                    <span id="logi">Sky</span>
                </h3>
                <!-- end of Logo -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <span class="mx-2 align-self-center">Minggu, 12-12-2020</span>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a href="#">
                                <i class="fas fa-bell fa-fw"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a href="#">
                                <i class="fas fa-user"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--end of navbar -->
        </div>
    </div>

    <?php 
        $this->load->view($main_view);
    ?>

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
    </script>
</body>

</html>