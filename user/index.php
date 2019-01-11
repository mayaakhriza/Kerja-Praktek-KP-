<?php

include "koneksi.php";
session_start();
if(!isset($_SESSION['username'])){
  echo "
  <script>
  window.location= 'login.php';
  </script>
  ";
}

require_once 'header.php';
require_once 'content.php';
require_once 'footer.php';



?>