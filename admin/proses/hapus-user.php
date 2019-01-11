<?php
  include "koneksi.php";
  $id= $_GET['id'];

  $hapus= mysqli_query($koneksi, "DELETE FROM akun WHERE id='$id'") or die(mysqli_error($koneksi));

  if($hapus){
      echo "
      <script>
        alert('Data berhasil di hapus.');
        window.location='../index.php?p=user';
      </script>
      ";
  }else{
      echo "
      <script>
        alert('Data gagal di hapus.');
        window.location='../index.php?p=user';
      </script>
      ";
  }

?>
