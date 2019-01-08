<?php
  include "proses/koneksi.php";
  include "header.php";

  if(isset($_GET['p'])){
    if($_GET['p']=="home")
      include "home.php";
    else if($_GET['p']=="buku")
      include "panelkaryawan.php";
    else if($_GET['p']=="user")
      include "paneluser.php";
    // else if($_GET['p']=="profil")
    //   include "profile.php";
  }else {
    include "home.php";
  }

include "footer.html";
?>
