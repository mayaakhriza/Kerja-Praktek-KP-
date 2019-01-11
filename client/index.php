<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vel-Line</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target="#header">
        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand custom_navbar-brand" href="index.php"><img src="img/vel.png" style="padding: 0px;width:180px"alt=""></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active"><a href="index.php">Beranda <span class="sr-only">(current)</span></a></li>
                                    <li><a href="karyawan.php">Keryawan</a></li>
                                    <li><a href="komedi.php">Komedi</a></li>
                                    <li><a href="fiksi.php">Fiksi</a></li>
                                    <li><a href="roman.php">Roman</a></li>
                                    <li><a href="thriller.php">Thriller</a></li>
                                    <?php
                                    if(!isset($_SESSION['username']))
                                      echo "<li> <a href='login.php'>Login</a></li>";
                                    else {
                                      echo "<li> <a href='logout.php'>Keluar</a></li>";
                                    }
                                     ?>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->

<!--Start of slider section-->
<section id="slider">
		<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
						<div class="item active">
								<div class="slider_overlay">
										<img src="img/img1.jpg" alt="...">
										<div class="carousel-caption">
												<div class="slider_text">
														<h3>Vel-Line</h3>
														<h2>Jendela-Jendela Ilmu</h2>
														<p>Bacalah Buku Maka Kau Genggam Dunia</p>
														<a href="buku.php" class="custom_btn">Baca Sekarang</a>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!--End of Carousel Inner-->
		</div>
</section>
<!--end of slider section-->



<!--Start of welcome section-->
<section id="welcome">
		<div class="container">
				<div class="row">
						<div class="col-md-12">
								<div class="wel_header">
										<h2>Selamat Datang di Vel-Line</h2>
										<p>Sistem Membaca Buku Secara Online</p>
								</div>
						</div>
				</div>
				<!--End of row-->
				<div class="row">
						<div class="col-md-3">
								<div class="item">
										<div class="single_item">
												<div class="item_list">
														<div class="welcome_icon">
																<i class="fa fa-heart-o"></i>
														</div>
														<h4>Roman</h4>
												</div>
										</div>
								</div>
						</div>
						<!--End of col-md-3-->
						<div class="col-md-3">
								<div class="item">
										<div class="single_item">
												<div class="item_list">
														<div class="welcome_icon">
																<i class="fa fa-optin-monster"></i>
														</div>
														<h4>Thriller</h4>
												</div>
										</div>
								</div>
						</div>
						<!--End of col-md-3-->
						<div class="col-md-3">
								<div class="item">
										<div class="single_item">
												<div class="item_list">
														<div class="welcome_icon">
																<i class="fa fa-space-shuttle"></i>
														</div>
														<h4>Fiksi</h4>
												</div>
										</div>
								</div>
						</div>
						<!--End of col-md-3-->
						<div class="col-md-3">
								<div class="item">
										<div class="single_item">
												<div class="item_list">
														<div class="welcome_icon">
																<i class="fa fa-reddit-alien"></i>
														</div>
														<h4>Komedi</h4>
												</div>
										</div>
								</div>
						</div>
						<!--End of col-md-3-->
				</div>
				<!--End of row-->
		</div>
		<!--End of container-->
</section>
<!--end of welcome section-->
<?php include "footer.php" ?>
