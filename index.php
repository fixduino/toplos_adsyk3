

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Pertamina DPPU Adisucipto</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	<style type="text/css">
	 body { 
		 /*background: #CD382D; cloud2 twinkle_twinkle_@2X.png*/
	  background-image: url("./assets/img/refuler.jpeg");
	  background-size: 100%;
    /*background-color: #018AFE;*/
	 }
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>
		<div class="vertical-align-middle">
			<div class="vertical">
				<div class="auth-box">
					<div class="content">
						<div class="header">
							<div class="logo text-center"><img src="assets/img/logo2.png" alt="Pertamina"></div>
							<p class="lead">Login</p>

						</div>
						<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>
				<!--		<form action="login_act.php" methode="post">
							<div class="input-group">
								<label for="signin-email" class="control-label sr-only">Username</label>
								<input type="text" class="form-control" id="uname"  placeholder="Username">
							</div>
							<div class="input-group">
								<label for="signin-password" class="control-label sr-only">Password</label>
								<input type="password" class="form-control" id="pass" placeholder="Password">
							</div>
							<div class="input-group">			
							<input type="submit" class="btn btn-primary" value="Login">
							</div>
							</form>
				-->

							<!--
							<div class="form-group clearfix">
								<label class="fancy-checkbox element-left">
									<input type="checkbox">
									<span>Remember me</span>
								</label>
								<span class="helper-text element-right">Don't have an account? <a href="page-register.html">Register</a></span>
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							<div class="bottom">
								<span class="helper-text"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
							</div> -->


							<form action="login_act.php" method="post">
							<div class="col-md-4 col-md-offset-4 kotak">
								<div class="panel-heading  text-center" style="padding:15px; background:#fff;"><b>Welcome to Pertamina Adisucipto</b></div>
								<div class="panel-body" style="background: #fff">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="text" class="form-control" placeholder="Username" name="uname">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" class="form-control" placeholder="Password" name="pass">
									</div>
									<div class="input-group">			
										<input type="submit" class="btn btn-primary" value="Login">
									</div>
								</div>
							</div>
							</form> 
			
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER 
	
	<div class="container">
		
		<div class="panel panel-default">
			<form action="login_act.php" method="post">
				<div class="col-md-4 col-md-offset-4 kotak">
					<div class="panel-heading  text-center" style="padding:15px; background:#fff;"><b>Welcome to PBSS Semarang</b></div>
					 <div class="panel-body" style="background: #fff">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" class="form-control" placeholder="Username" name="uname">
						</div>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="password" class="form-control" placeholder="Password" name="pass">
						</div>
						<div class="input-group">			
							<input type="submit" class="btn btn-primary" value="Login">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	-->
</body>

</html>
