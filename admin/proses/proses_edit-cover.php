<?php
  include "koneksi.php";

  //data cover
  $id= $_POST['id'];
  $cover= $_FILES['cover']['name'];
  $name_cover= $_FILES['cover']['tmp_name'];
  move_uploaded_file($name_cover, '../cover/'.$cover);

  $input = mysqli_query($koneksi, "UPDATE karyawan SET cover='$cover' WHERE id='$id'" ) or die(mysqli_error($koneksi));

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
