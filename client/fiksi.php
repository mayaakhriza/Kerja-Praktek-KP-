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

        <style media="screen">
          h1, h2, h3, img{
            padding: 40px 0px;
          }
        </style>
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
																	  <li><a href="index.php">Beranda</a></li>
                                    <li><a href="buku.php">Buku</a></li>
                                    <li><a href="komedi.php">Komedi</a></li>
                                    <li class="active"><a href="fiksi.php">Fiksi <span class="sr-only">(current)</span></a></li>
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

<div class="container">
  <?php
    include "koneksi.php";
    $db=mysqli_connect("localhost","root","","pdt");
    $sql= "SELECT * FROM buku WHERE genre='fiksi' ORDER BY id DESC";
    $result= mysqli_query($db, $sql);

    if(mysqli_num_rows($result) > 0){
      while ($row= mysqli_fetch_array($result)){
        echo "<center> <h2 style=\"font-family: 'Kaushan Script', cursive;\">"."<b>"."<a style=\"color:black; decoration:none;\" href='isi.php?id=".$row['id']."'>".ucwords($row["judul"])."</b>"."</h2>"."<br></centre>";
        echo "<b style=\"font-size:15px;\" class=\"label label-success\">".$row["penulis"]." || ".$row["genre"]."</b>"."<br>";
        echo "<center>"."<img style=\"margin: 5px; width: 20%;\" src='../admin/cover/".$row['cover']."'>"."</center>"."<br>"; //baris 2
        echo "<p align=justify>".substr($row["sinopsis"],0,350)."</p>";
      }
    }else{
      echo "Tidak ada e-book disini";
    }
  ?>

</div>

<?php include "footer.php" ?>
