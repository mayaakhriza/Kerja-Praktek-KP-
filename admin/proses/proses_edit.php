<?php
  include "koneksi.php";

  //get data
  $id= $_POST['id'];
  $nama= $_POST['nama'];
  $jabatan= $_POST['jabatan'];
  $no_hp=$_POST['no_hp'];
  $tahun= $_POST['year'];
  $tim= $_POST['tim'];
  $email= $_POST['email'];

  $input = mysqli_query($koneksi, "UPDATE karyawan SET nama='$nama', jabatan='$jabatan', no_hp='$no_hp', tahun='$tahun', email='$email', tim='$tim' WHERE id='$id'" ) or die(mysqli_error($koneksi));

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
