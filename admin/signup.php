<!DOCTYPE HTML>
<html>
  <head>
    <title>Admin Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- js -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.js"> </script>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!--static chart-->
    <style>
    .signup-block input[type="email"] {
      font-size: 0.9em;
      padding: 10px 20px;
      width: 100%;
      color:#686967;
      outline: none;
      border: 1px solid #D3D3D3;
       border-radius: 5px;
    -ms-border-radius: 5px;
    -moz-border-radius: 5px;
    -o-border-radius: 5px;
      background:#F5F5F5;
      margin: 0em 0em 1.5em 0em;
    }
    </style>
  </head>
  <body>
    <!--inner block start here-->
    <div class="signup-page-main">
      <div class="signup-main">
        <div class="signup-head">
          <h1>Sign Up</h1>
        </div>
        <div class="signup-block">
    			<form name="daftar" action="proses/proses_daftar.php" method="post">
    				<input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
    				<input type="password" name="password" class="lock" placeholder="Password" required>
    				<div class="forgot-top-grids">
    					<div class="forgot-grid">
                <ul>
    							<li>
    								<input type="checkbox" id="brand1" value="">
    								<label for="brand1"><span></span>I agree to the terms</label>
    							</li>
    						</ul>
    					</div>
    					<div class="clearfix"> </div>
    				</div>
    				<input type="submit" name="Daftar" value="Sign up"> </input>
    			</form>
    				<div class="sign-down">
    				<h4>Sudah punya akun? <a href="login.php"> Login disini.</a></h4>
            <!-- UNDER CONSTRUCTION! Nanti homenya yang client -->
    				  <h5><a href="index.html">Go Back to Home</a></h5>
    				</div>
    			</div>
        </div>
    </div>
  </body>
  <?php include "footer.html" ?>
</html>
