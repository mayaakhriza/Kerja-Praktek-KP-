<?php
  include "koneksi.php";

  //get data
  $id= $_POST['id'];
  $judul= $_POST['judul'];
  $penulis= $_POST['penulis'];
  $tahun= $_POST['year'];
  $genre= $_POST['genre'];
  $sinopsis= $_POST['mytextarea'];

  $input = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', tahun='$tahun', sinopsis='$sinopsis', genre='$genre' WHERE id='$id'" ) or die(mysqli_error($koneksi));

  if($input){
      echo "
      <script>
        alert('Data berhasil di update.');
        window.location='../index.php?p=buku';
      </script>
      ";
  }else{
      echo "
      <script>
        alert('Data gagal di update.');
        window.location='../edit.php?id=$id';
      </script>
      ";
  }

?>
