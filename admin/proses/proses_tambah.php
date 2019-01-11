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
$dokumen= $_FILES['dokumen']['name'];
$tmp_name= $_FILES['dokumen']['tmp_name'];
move_uploaded_file($tmp_name, '../dokumen/'.$dokumen);

$input= mysqli_query($koneksi,
"INSERT INTO karyawan (nama, jabatan, no_hp, tahun, tim, email, cover, dokumen)
VALUES('$nama', '$jabatan','$no_hp', '$tahun', '$tim','$email', '$cover', '$dokumen')  ") or die (mysqli_error($koneksi));

if($input){
  echo "
  <script>
  alert('Dokumen berhasil diupload!');
  window.location='../index.php?p=buku';
  </script>
  ";
}else{
  echo "
  <script>
  alert('Error! Tidak dapat mengupload dokumen.');
  window.location='../index.php?p=buku';
  </script>
  ";
}
 ?>
