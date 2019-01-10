
<!DOCTYPE HTML>
<html>
  <head>
    <title>Daftar Akun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- js -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.js"> </script>

    <!-- CSS -->
    <link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!--static chart-->
    <style>
      body{
        font-family: 'Open Sans', sans-serif;
      }
    </style>
  </head>
  <body>

    <div class="login-page">
        <div class="login-main">
        	 <div class="login-head">
    				<h1>Daftar</h1>
    			</div>
    			<div class="login-block">

                <form action="prosesdaftar.php" method="post">

                    <input class="input" type="text" name="username" placeholder="Username"/>
                    <input class="input" type="password" name="password" placeholder="Password"/>
                    <button type="reset" class="submit">Batal</button><br><br>

    					<div class="forgot-top-grids">
    						<div class="forgot-grid">

    						</div>
    						<div class="clearfix"> </div>
    					</div>
                        <input type="submit" name="Sign In" value="Daftar">
              <h3>Sudah memiliki akun?<a href="login.php"> Masuk disini</a></h3>
            </form>
            <h5><a href="index.php">Go Back to Home</a></h5>
    			</div>
        </div>
      </div>
      <!--copy rights start here-->
      <div class="copyrights">
        <p>© 2018 <b style="color:#FC8213;"> Vel-Line</b>. All Rights Reserved |
          by Yeni Rosandi<a style="color:#68ae00;"> 1617051034 </a>Maya Akhriza<a style="color:#68ae00;"> 1617051017 </a>Nur Shabrina<a style="color:#68ae00;"> 1617051099</p>
      </div>
      <!--copy rights end here-->
      </body>
      </html>
