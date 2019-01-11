<?php
$host= "localhost";
$username= "root";
$password= "";
$db= "pdt";
$koneksi= mysqli_connect($host, $username, $password) or die ("Gagal terkoneksi!");
mysqli_select_db($koneksi, $db) or ("Database tidak tersedia");
?>
