
<?php
if(!empty($_POST["add"]))
{
	include('../config/connection.php');
	$nama		= $_POST['nama'];
	$alamat		=$_POST['alamat'];
	$password   =base64_encode($_POST['password']);
	$nama_perusahaan_penyedia   = $_POST['nama_perusahaan_penyedia'];
	$no_pkp   = $_POST['no_pkp'];
	$bentuk_usaha   = $_POST['bentuk_usaha'];
	$npwp   = $_POST['npwp'];
	$status		= $_POST['status'];

	$input = mysqli_query($conn,"INSERT INTO supplier VALUES (NULL, '$nama', '$alamat','$password','$nama_perusahaan_penyedia','$no_pkp','$bentuk_usaha','$npwp','$status')") or die(mysqli_error());
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
		header("Location:register.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/custom2.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
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
						<i class=" glyphicon glyphicon-user"></i>(123) 456-7890
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
									<li><a href="index.php" class="btn btn-default">Home</a></li>
									<li><a href="news.php" class="btn btn-default">All News</a></li>
									<li><a href="faqs.php" class="btn btn-default">FAQ's</a></li>
									<li><a href="register.php" class="btn btn-default">Supplier Registration</a></li>
									<li><a href="contact-us.php" class="btn btn-default">Contact Us</a></li>
									<li><a href="login.php" class="btn btn-default">Login</a></li>
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
	<section class="register">
		<div class="container">
			<form action="register.php" method="post"  enctype="multipart/form-data">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<table>
						<div class="form-group">
							<label>Nama</label> 	
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="form-group">
							<label>ALamat</label> 	
							<textarea name="alamat" rows="10" cols="80" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Password</label>   
							<input type="password" name="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Perusahaan Penyedia</label>   
							<input type="text" name="nama_perusahaan_penyedia" class="form-control">
						</div>
						<div class="form-group">
							<label>No PKP</label>   
							<input type="text" name="no_pkp" class="form-control">
						</div>
						<div class="form-group">
							<label>Bentuk Usaha</label>   
							<input type="text" name="bentuk_usaha" class="form-control">
						</div>
						<div class="form-group">
							<label>NPWP</label>   
							<input type="text" name="npwp" class="form-control">
						</div>
						<div class="form-group">
							<label>Status&nbsp;:&nbsp;</label><br>
							<select name="status" required class="btn btn-default">
								<option value="aktif">aktif</option>
								<option value="non-aktif">non-aktif</option>
							</select>
						</div>
						<div class="form-group">
							<input type="submit" name="add" value="Simpan" class="btn btn-success">
						</div>
					</table>
				</div>
				<div class="col-md-2"></div>
			</form>
		</div>
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
								<img src="../assets/image/logopln.png" class="img-circle">
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