<?php
  include "koneksi.php";

  //data file
  $id= $_POST['id'];
  $file= $_FILES['file']['name'];
  $tmp_name= $_FILES['file']['tmp_name'];
  move_uploaded_file($tmp_name, '../file/'.$file);

  $input = mysqli_query($koneksi, "UPDATE buku SET file='$file', WHERE id='$id'" ) or die(mysqli_error($koneksi));

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
