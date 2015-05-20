<?php

session_start(); // Starting Session
include('../config/connection.php');
if(isset($_POST['login'])){
	$user = mysqli_real_escape_string($conn,htmlentities($_POST['username']));
	$pass = mysqli_real_escape_string($conn,htmlentities(($_POST['password'])));
	
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
			echo '<script language="javascript">document.location="../admin/index.php";</script>';
		}
	}
}
?>

<?php
include('../config/connection.php');
if(isset($_SESSION['admin'])){
	header("location: ../admin/index.php");
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
					<img src="../assets/image/logo.png" align="left">
				</div>
				<div class="col-md-10 language" align="right">
					<div>
						<i class=" glyphicon glyphicon-globe"></i>
						<a href="" class="bahasa">( Bahasa</a>
						<a href="" class="english">English)</i></a>
					</div>
					<div>
						<div class="input-group search col-md-3">
							<input type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class=" glyphicon glyphicon-search"></i></button>
							</span>
						</div>
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
									<li><a href="index.html" class="btn btn-default">Home</a></li>
									<li><a href="news.html" class="btn btn-default">News</a></li>
									<li><a href="faqs.html" class="btn btn-default">FAQ's</a></li>
									<li><a href="register.html" class="btn btn-default">Supplier Registration</a></li>
									<li><a href="contact-us.html" class="btn btn-default">Contact Us</a></li>
									<li><a href="" data-toggle="modal" data-target="#myModal" class="btn btn-default">Login</a></li>
									<!-- <li class="dropdown">
										<a href="#" class="dropdown-toggle btn btn-default" data-toggle="dropdown" role="button" aria-expanded="false">Login&nbsp;<span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="" data-toggle="modal" data-target="#myModal">Option1</a></li>
											<li class="divider"></li>
											<li><a href="" >Option2</a></li>
										</ul>
									</li> -->
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
									<img src="../assets/image/logopln.png" class="img-circle">
								</div>
								<div class="col-md-12">
										<input type="text" class="form-control" name="username" placeholder="username">
								</div>
								<br>
								<div class="col-md-12">
										<input type="text" class="form-control" name="password" placeholder="password">
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
