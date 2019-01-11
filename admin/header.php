<?php
include "proses/koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
  echo "
  <script>
  window.location= 'login.php';
  </script>
  ";
}

 ?>
<!DOCTYPE HTML>
<html>
  <head>
  <title>Dashboard Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- js -->
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> <!-- fixed bar  -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.js"> </script>
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

  <!-- CSS -->
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body>
    <div class="page-container">
     <div class="left-content">
  	   <div class="mother-grid-inner">
         <!--header-->
         <div class="header-main">
           <div class="header-left">
             <div class="logo-name">
               <a href="index.html"> <h1 style="margin-top:20px;">Vel-Line</h1> </a>
             </div>
           </div>
           <div class="header-right">
             <div class="profile_details">
               <ul>
                 <li class="dropdown profile_details_drop">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <div class="profile_img">
                       <span class="prfil-img"><img src="images/p1.png" alt=""> </span>
                       <!-- Nanti mau diedit lagi -->
                       <div class="user-name">
                         <?php $username=$_SESSION['username']; ?>
                         <p><?php echo $username?></p>
        								 <span>Administrator</span>
                       </div>
                       <i class="fa fa-angle-down lnr"></i>
        							 <i class="fa fa-angle-up lnr"></i>
                       <div class="clearfix"></div>
                     </div>
                   </a>
                   <ul class="dropdown-menu drp-mnu">
                     <li> <a href="profile.php"><i class="fa fa-cog"></i> Settings</a> </li>
        						 <li> <a href="proses/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                   </ul>
                 </li>
               </ul>
             </div>
           </div>
         </div>
        <!--heder end-->

        <!-- script-for sticky-nav -->
        <script>
    		$(document).ready(function() {
    			 var navoffeset=$(".header-main").offset().top;
    			 $(window).scroll(function(){
    				var scrollpos=$(window).scrollTop();
    				if(scrollpos >=navoffeset){
    					$(".header-main").addClass("fixed");
    				}else{
    					$(".header-main").removeClass("fixed");
    				}
    			 });
    		});
      </script>
      <!-- /script-for sticky-nav -->
      </div>
    </div>

    <!--slider menu-->
    <div style="height: 115vh;"class="sidebar-menu">
      <div class="logo">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> </div>
        <div class="menu">
        <ul id="menu" >
          <li id="menu-home" ><a href="index.php?p=home"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
          <li id="menu-academico" ><a href="index.php?p=karyawan"><i class="fa fa-book"></i><span>Panel Karyawan</span></a></li>
          <li id="menu-academico" ><a href="index.php?p=user"><i class="fa fa-user"></i><span>Panel User</span></a></li>
          <!-- <li id="menu-academico" ><a href="index.php?p=profil"><i class="fa fa-cogs"></i><span>Profile</span></a></li> -->
        </ul>
      </div>
    </div>
    	<div class="clearfix"> </div>
    </div>
    <!--slide bar menu end here-->

    <!-- Script menu slide -->
    <script>
    var toggle = true;
    $(".sidebar-icon").click(function() {
      if (toggle)
      {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({"position":"absolute"});
      }
      else
      {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
          $("#menu span").css({"position":"relative"});
        }, 400);
      }
      toggle = !toggle;
    });
    </script>
