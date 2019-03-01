<?php
if(!empty($_POST["kirim"]))
{
	include('../config/connection.php');
	$nama		= $_POST['nama'];
	$email		=$_POST['email'];
	$subject   = $_POST['subject'];
	$message   = $_POST['message'];

	$input = mysqli_query($conn,"INSERT INTO contact_us(nama,email,subject,pesan) VALUES('$nama', '$email', '$subject', '$message')") or die(mysqli_error());
	if(!$input)
	{
		?>
		<script type="text/javascript">
			alert("Gagal Simpan Data,Mohon Verifikasi Kembali Data");
		</script>
		<?php 
	} 
	else 
	{
		header("Location:contact-us.php");
	}

	$formcontent="From: $nama \n Message: $message";
	$recipient = "israj.haliri@gmail.com";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You!";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
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
	<section class="sendme">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="well well-sm">
						<form action="" method="post"  enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name"d name="nama" placeholder="Enter name" required="required" />
									</div>
									<div class="form-group">
										<label for="email">Email Address</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
											<input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<select id="subject" name="subject" class="form-control" required="required">
											<option value="bisnis" selected="">bisnis</option>
											<option value="komplen">complain</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Message</label>
										<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
										placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<input type="submit" name="kirim" value="Simpan" class="btn btn-default pull-right">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<form>
						<legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
						<address>
							<strong></strong><br>
							Jkarta<br>
							kebayoran baru jakarta<br>
							12160<br>
							<abbr title="Phone">Phone :</abbr>1234567890
						</address>
						<address>
							<strong>Our Email</strong><br>
							<a href="mailto:#">xxxx@xxx.co.id</a>
						</address>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section id="map1" class="gmap3">
	</section>
	<section class="footer">
		<div class="col-md-12 copyright" align="center">
			<span><i class="glyphicon glyphicon-copyright-mark"></i>&nbsp;Copyright 2015</span>
		</div>
	</section>
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
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
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-tag"></i></button>
									</span>
									<input type="text" class="form-control" placeholder="username">
								</div><!-- /input-group -->
							</div>
							<br>
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-lock"></i></button>
									</span>
									<input type="text" class="form-control" placeholder="password">
								</div><!-- /input-group -->
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Login</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</body>
<script type="text/javascript" src="../assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="../assets/js/wow.js"></script>
<script type="text/javascript" src="../assets/js/custom.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../assets/js/gmap3.js"></script>
</html>