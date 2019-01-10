<?php
include "koneksi.php";

//get data
$nama= $_POST['nama'];
$jabatan= $_POST['jabatan'];
$no_hp= $_POST['no_hp'];
$tahun= $_POST['year'];
$tim= $_POST['tim'];
$email= $_POST['email'];
//data gambar
$cover= $_FILES['cover']['name'];
$name_cover= $_FILES['cover']['tmp_name'];
move_uploaded_file($name_cover, '../cover/'.$cover);

//data file
$file= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
move_uploaded_file($tmp_name, '../file/'.$file);

$input= mysqli_query($koneksi,
"INSERT INTO karyawan (nama, jabatan, no_hp, tahun, tim, email, cover, file)
VALUES('$nama', '$jabatan','$no_hp', '$tahun', '$tim','$email', '$cover', '$file')  ") or die (mysqli_error($koneksi));

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
