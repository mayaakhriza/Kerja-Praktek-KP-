<?php
include "koneksi.php";

//get data
$judul= $_POST['judul'];
$penulis= $_POST['penulis'];
$tahun= $_POST['year'];
$genre= $_POST['genre'];
$sinopsis= $_POST['mytextarea'];
//data gambar
$cover= $_FILES['cover']['name'];
$name_cover= $_FILES['cover']['tmp_name'];
move_uploaded_file($name_cover, '../cover/'.$cover);

//data file
$file= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
move_uploaded_file($tmp_name, '../file/'.$file);

$input= mysqli_query($koneksi,
"INSERT INTO buku(judul, penulis, tahun, cover, file, sinopsis, genre)
VALUES('$judul', '$penulis', '$tahun', '$cover', '$file', '$sinopsis', '$genre')") or die (mysqli_error($koneksi));

if($input){
  echo "
  <script>
  alert('File berhasil diupload!');
  window.location='../index.php?p=buku';
  </script>
  ";
}else{
  echo "
  <script>
  alert('Error! Tidak dapat mengupload file.');
  window.location='../index.php?p=buku';
  </script>
  ";
}
 ?>
