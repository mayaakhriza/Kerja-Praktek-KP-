<?php
  include "koneksi.php";
  //get data
  $judul= $_POST['judul'];
  $penulis= $_POST['penulis'];
  $tahun= $_POST['year'];
  $genre= $_POST['genre'];
  $sinopsis= $_POST['mytextarea'];

  //untuk gambar
  $cover= $_FILES['cover'];
  //print_r($cover);
  $coverName=$_FILES['cover']['name'];
  $coverTmpName=$_FILES['cover']['tmp_name'];

  $coverExt=explode('.',$coverName);
  $coverActualExt=strtolower(end($coverExt));
  $coverNameNew=uniqid('', true).".".$coverActualExt;
  $coverDestination='../cover/'.$coverNameNew;

  $allowedCover=array('jpg','jpeg','png');

  //Untuk file
  $file= $_FILES['file'];
  //print_r($file);
  $fileName=$_FILES['file']['name'];
  $fileTmpName=$_FILES['file']['tmp_name'];
  $fileSize=$_FILES['file']['size'];
  $fileError=$_FILES['file']['error'];

  $fileExt=explode('.',$fileName);
  $fileActualExt=strtolower(end($fileExt));
  $fileNameNew=uniqid('', true).".".$fileActualExt;
  $fileDestination='../file/'.$fileNameNew;

  $allowedFile=array('pdf');
  if (in_array($fileActualExt, $allowedFile)) {
    if (in_array($coverActualExt, $allowedCover)) {
      if ($fileError===0) {
        if ($fileSize<20000) {
          move_uploaded_file($fileTmpName ,$fileDestination);
          move_uploaded_file($coverTmpName ,$coverDestination);
          //query
          $input= mysqli_query($koneksi,
          "INSERT INTO buku(judul, penulis, tahun, cover, file, sinopsis, genre) VALUES('$judul', '$penulis', '$tahun', '$coverNameNew', '$fileNameNew', '$sinopsis', '$genre')") or die (mysqli_error($koneksi));
          if ($input) {
            echo "<script>alert('File berhasil diupload.');</script>";
            header("Location: ../index.php?p=buku");
          }else {
            echo "<script>alert('File gagal diupload.');</script>";
            header("Location: ../index.php?p=buku");
          }
        }else {
          echo "<script>alert('File kamu terlalu besar! Max 20 Mb.');</script>";
          header("Location: ../index.php?p=buku");
        }
    }else{
      echo "<script>alert('Terjadi error saat mengupload!');</script>";
      header("Location: ../index.php?p=buku");
    }
  }else{
    echo "<script>alert('Tipe file tidak didukung! Only .jpg, .jpeg, .png');</script>";
    header("Location: ../index.php?p=buku");
  }
  }else{
    echo "<script>alert('Tipe file tidak didukung! Only .pdf');</script>";
    header("Location: ../index.php?p=buku");
  }
 ?>
