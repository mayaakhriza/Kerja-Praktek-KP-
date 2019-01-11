<?php
  include "koneksi.php";

  //get data
  $id= $_POST['id'];
  $nama= $_POST['nama'];
  $email= $_POST['email'];
  $no_hp= $_POST['no_hp'];
  $jabatan= $_POST['jabatan'];
  $tahun= $_POST['year'];
  $tim= $_POST['tim'];

  $input = mysqli_query($koneksi, "UPDATE karyawan SET nama='$nama', email='$email', no_hp='$no_hp', jabatan='$jabatan', tahun='$tahun', tim='$tim' WHERE id='$id'" ) or die(mysqli_error($koneksi));

  if($input){
      echo "
      <script>
        alert('Data berhasil di update.');
        window.location='../index.php?p=karyawan';
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
