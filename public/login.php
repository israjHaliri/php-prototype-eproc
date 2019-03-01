<?php

session_start(); // Starting Session
include('../config/connection.php');
if(isset($_POST['login'])){
	$user = mysqli_real_escape_string($conn,htmlentities($_POST['username']));
	$pass = mysqli_real_escape_string($conn,htmlentities(base64_encode($_POST['password'])));
	
// To protect MySQL injection for Security purpose
	$user = stripslashes($user);
	$pass = stripslashes($pass);

	
	$sql = mysqli_query($conn,"SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysqli_error());
	if(mysqli_num_rows($sql) == 0)
	{
		echo '<script language="javascript">alert("Mohon Verifikasi Kembali Data");</script>';
	}
	else
	{
		$row = mysqli_fetch_assoc($sql);
		if($row['level'] == "admin")
		{
			$_SESSION['admin']=$user;
			echo '<script language="javascript">document.location="../dashboard_admin/index.php";</script>';
		}
	}
}
?>

<?php
include('../config/connection.php');
if(isset($_SESSION['admin'])){
	header("location: ../dashboard_admin/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>e Procurement</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/custom2.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
</head>
<body>
	<section class="head1">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-2">
                    <img src="../assets/image/image1.jpg" align="left">
				</div>
				<div class="col-md-10 language" align="right">
					<div>
						<i class=" glyphicon glyphicon-user"></i>123456789
					</div>
					<div>
					<form action="result.php" method="post"  enctype="multipart/form-data">
						<div class="input-group search col-md-3">
						
								<input type="text" class="form-control" name="keyword">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class=" glyphicon glyphicon-search"></i></button>
								</span>
							
						</div>
						</form>
					</div>
				</div>
				<div class="col-md-12">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.php" class="btn btn-default">Home</a></li>
									<li><a href="news.php" class="btn btn-default">All Winner</a></li>
									<li><a href="faqs.php" class="btn btn-default">FAQ's</a></li>
									<li><a href="register.php" class="btn btn-default">Supplier Registration</a></li>
									<li><a href="contact-us.php" class="btn btn-default">Contact Us</a></li>
									<li><a href="login.php" class="btn btn-default">Login</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="segitiga-atas"></section>
	<section id="myModal">
		<div class="modal-dialog">
			<form action="login.php" method="post">
				<div class="modal-content">
					<div class="modal-header" align="center">
						<h4 class="modal-title">Login</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="col-md-12 img-login" align="center">
                                    <img src="../assets/image/image1.jpg" class="img-circle">
								</div>
								<div class="col-md-12">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="text" class="form-control" name="username" placeholder="username">
									</div>
								</div>
								<br>
								<div class="col-md-12">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" class="form-control" name="password" placeholder="password">
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
					<div class="modal-footer">
						<a href="index.php"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></a>
						<button type="submit" name="login" class="btn btn-primary">Login</button>
					</div>
				</div><!-- /.modal-content -->
			</form>
		</div><!-- /.modal-dialog -->
	</section>
	<section class="footer">
		<div class="col-md-12 copyright" align="center">
			<span><i class="glyphicon glyphicon-copyright-mark"></i>&nbsp;Copyright 2015</span>
		</div>
	</section>
</body>
<script type="text/javascript" src="../assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/custom.js"></script>
</html>
