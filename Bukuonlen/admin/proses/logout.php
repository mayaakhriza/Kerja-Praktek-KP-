<?php
session_start();
if(session_destroy()){
  echo "
  <script>
  alert('Anda berhasil logout!');
  window.location= '../login.php';
  </script>
  ";
}
?>
