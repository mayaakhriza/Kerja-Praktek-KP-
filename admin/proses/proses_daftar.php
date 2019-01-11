<?php
include "koneksi.php";

$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);

$input=mysqli_query($koneksi, "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')");

if($input){
  echo "
  <script>
  alert('Anda berhasil mendaftar, silakan login terlebih dahulu.');
  window.location= '../login.php';
  </script>
  ";
}else{
  echo "
  <script>
  alert('Pendaftaran tidak dapat diproses.');
  window.location= '../signup.php';
  </script>
  ";
}
 ?>
