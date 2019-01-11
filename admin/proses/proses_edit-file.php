<?php
  include "koneksi.php";

  //data file
  $id= $_POST['id'];
  $dokumen= $_FILES['dokumen']['name'];
  $name_file= $_FILES['dokumen']['tmp_name'];
  move_uploaded_file($name_file, '../dokumen/'.$dokumen);

  $input = mysqli_query($koneksi, "UPDATE karyawan SET dokumen='$dokumen' WHERE id='$id'" ) or die(mysqli_error($koneksi));

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
