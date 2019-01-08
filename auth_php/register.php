<?php
require_once "core/init.php";

$error = '';

//redirect kalau user sudah login
if( isset($_SESSION['user']) ) header('Location: index.php');

//validasi register
if( isset($_POST['submit']) ){
  $nama = $_POST['username'];
  $pass = $_POST['password'];

  if(!empty(trim($nama)) && !empty(trim($pass)) ){

    if( cek_nama($nama) == 0 ){
      //memasukkan ke database
      if(register_user($nama, $pass)) redirect_login($nama);
      else $error =  'gagal daftar';

    }else $error =  ' nama sudah ada, tidak bisa daftar ';

  }else $error =  'tidak boleh kosong';
}


require_once "view/header.php";
?>


<form action="register.php" method="post">
  <label for="">Nama</label> <br>
  <input type="text" name="username"> <br><br>

  <label for="">Password</label> <br>
  <input type="password" name="password">  <br><br>

  <input type="submit" name="submit" value="daftar">
  <br>
  <? if($error != ''){ ?>
    <div id="error">
      <?= $error; ?>
    </div>
  <? } ?>

</form>


<? require_once "view/footer.php"; ?>
