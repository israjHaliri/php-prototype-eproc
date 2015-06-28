<?php 
include('../config/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>e Procurement</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/custom2.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
	 <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.css">
	<style type="text/css">th{background: #ffde00;} td{background: white;}</style>
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
	<section class="content">
		<div class="carousel-reviews broun-block">
		<div class="news">
			<div class="container">
				<div class="row">
					<table id="example" class="table table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>NO</th>
								<th>ID USER</th>
								<th>ID PENGADAAN</th>
							</tr>
						</thead>				
						<tbody>
							<?php 
							$no = 1;
							$query = mysqli_query($conn,"select * from pemenang p 
								inner join user u on p.user_id=u.id_user
								inner join pengadaan pe on p.pengadaan_id=pe.id_pengadaan order by id_pemenang") or die (mysqli_error($conn));
							while ($data = mysqli_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $data['id_user']; ?></td>
									<td><?php echo $data['id_pengadaan']; ?></td>
								</tr>
								<?php        
								$no++;
							}
							?>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer">
		<div class="col-md-12 copyright" align="center">
			<span><i class="glyphicon glyphicon-copyright-mark"></i>&nbsp;Copyright 2015</span>
		</div>
	</section>
</body>
<script src="../assets/js/jquery-2.1.3.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../assets/js/common-scripts.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap.js"></script>
<script>
  $(document).ready(function() {
    $('#example').dataTable({
      "lengthMenu":[ 5, 10, 25, 50, 100]
    });
  });
</script>
</html>
