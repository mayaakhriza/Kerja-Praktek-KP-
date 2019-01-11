<!DOCTYPE HTML>
<html>
  <head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- js -->
    <script src="boostraplogin/js/jquery-2.1.1.min.js"></script>
    <script src="boostraplogin/js/bootstrap.js"> </script>

    <!-- CSS -->
    <link href="boostraplogin/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="boostraplogin/css/font-awesome.css" rel="stylesheet">
    <link href="boostraplogin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!--static chart-->
  </head>
  <body>
    <?php
  		require('koneksi.php');
  		session_start();
  		// Jika formulir ter-submit, masukkan data ke dalam basis data.
  		if (isset($_POST['username'])){

  			$username = stripslashes($_REQUEST['username']);
  			$username = mysqli_real_escape_string($koneksi,$username);
  			$password = stripslashes($_REQUEST['password']);
  			$password = mysqli_real_escape_string($koneksi,$password);

  		//Memeriksa apakah user sudah ada dalam basis data atau belum
  			$query = "SELECT * FROM akun WHERE username='$username' and password='".md5($password)."'";
  			$result = mysqli_query($koneksi,$query) or die(mysqli_error());
  			$rows = mysqli_num_rows($result);
  			if($rows==1){
  				$_SESSION['username'] = $username;
  				header("location: index.php"); // pindah ke halaman dashboard_user.php
  				}else{
  					echo "
            <script>
            alert('Password atau username salah');
            window.location= 'login.php';
            </script>
            ";
  					}
  		}else{
  	?>
    <div class="login-page">
        <div class="login-main">
        	 <div class="login-head">
    				<h1>Login</h1>
    			</div>
    			<div class="login-block">
    				<form action="" method="post" name="login">
    					<input type="text" name="username" placeholder="username" required>
    					<input type="password" name="password" class="lock" placeholder="Password" required>
    					<div class="forgot-top-grids">
    						<div class="forgot-grid">
    							<ul>
    								<li>
    									<input type="checkbox" id="brand1" value="">
    									<label for="brand1"><span></span>Remember me</label>
    								</li>
    							</ul>
    						</div>
    						<div class="clearfix"> </div>
    					</div>
    					<input type="submit" name="Sign In" value="Login">
              <h3>Tertarik jadi admin?<a href="daftar.php"> Daftar sekarang</a></h3>
            </form>
    			</div>
        </div>
      </div>
    <?php include "footer.php"; ?>
  <?php } ?>
  </body>
</html>
