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
	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 btn-download">
						<div class="col-md-12">

							<?php
							$dwnld="Syarat & Kententuan"; 
							$sql_eproc = mysqli_query($conn,"SELECT * FROM pakta_integritas ORDER BY date_publish ASC") or die (mysql_error('Tabel tidak ditemukan'));
							$data_eproc = mysqli_fetch_array($sql_eproc)
							?>
							<?php echo '<a class="btn btn-default" href="'.$data_eproc['file'].'"><i class=" glyphicon glyphicon-download-alt">&nbsp;'.$dwnld.'</a>' ?></i>

						</div>
					</div>
					<div class="col-md-5"><img src="../assets/image/cs.png"></div>
					<div class="col-md-4">
						<?php
						$show = mysqli_query($conn,"SELECT * FROM eproc");
						$data = mysqli_fetch_assoc($show);
						?>
						<h2><?php $isi= $data['title']; 
							echo  substr($isi,0,15);
							?></h2>
							<p>
								<?php $isi=$data['description']; 
								echo  substr($isi,0,165);
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="content2">
			<div class="container-fluid">
				<div class="col-md-12">
					<div role="tabpanel">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">Berita Terbau</a></li>
							<li role="presentation"><a href="#pengadaan" aria-controls="pengadaan" role="tab" data-toggle="tab">Pengadaan</a></li>
							<li role="presentation"><a href="#lelang" aria-controls="lelang" role="tab" data-toggle="tab">Pengumuman hasil Lelang</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="news">
								<div class="col-md-12 tab-post">
									<div class="col-sm-5 news-desc">
										<?php 
										$query = mysqli_query($conn,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 3") or die (mysql_error('Tabel tidak ditemukan'));
										while ($data = mysqli_fetch_array($query)){
											?>
											<ul>
												<?php echo '<a href="detail_berita.php?id='.base64_encode($data['id_berita']).'" >' ?>
												<li>
													<div class="col-md-12 news-item">
														<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;<?php $isi= $data['title_berita']; 
															echo  substr($isi,0,30);
															?></div>
															<div class="col-md-12 desc-news">
																<?php $isi= $data['description_berita']; 
																echo  substr($isi,0,60);
																?>
															</div>
															<div class="col-md-12 kind-news">Berita</div>
														</div>
													</li>
												</a>
											</ul>
											<?php        
										}
										?>
									</div>
									<div class="col-sm-7 news-slide">
										<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-example-generic" data-slide-to="1"></li>
												<li data-target="#carousel-example-generic" data-slide-to="2"></li>
											</ol>

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="../assets/image/image1.jpg" alt="...">
													<div class="carousel-caption">
													</div>
												</div>
												<div class="item">
													<img src="../assets/image/image2.jpg" alt="...">
													<div class="carousel-caption">
													</div>
												</div>
												<div class="item">
													<img src="../assets/image/image3.jpg" alt="...">
													<div class="carousel-caption">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane invitation" id="pengadaan">
								<div class="col-md-12 tab-post">
									<div class="col-sm-12">
										<?php 
										$query = mysqli_query($conn,"SELECT * FROM pengadaan ORDER BY id_pengadaan DESC LIMIT 5") or die (mysql_error('Tabel tidak ditemukan'));
										while ($data = mysqli_fetch_array($query)){
											?>
											<ul>
												<?php echo '<a href="detail_pengadaan.php?id='.base64_encode($data['id_pengadaan']).'" >' ?>
												<li>
													<div class="col-md-12 news-item2">
														<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;<?php $isi= $data['title_pengadaan'];
															echo  substr($isi,0,30);
															?></div>
															<div class="col-md-12 desc-news">
																<?php $isi= $data['description_pengadaan']; 
																echo  substr($isi,0,200);
																?>
															</div>
															<div class="col-md-12 date-news"><?php echo $data['date_publish_pengadaan']; ?></div>
															<div class="col-md-12 kind-news">Pengadaan</div>
														</div>
													</li>
												</a>
											</ul>
											<?php        
										}
										?>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane invitation" id="lelang">
								<div class="col-md-12 tab-post">
									<div class="col-sm-12">
										<?php 
										$query = mysqli_query($conn,"SELECT * FROM lelang ORDER BY id_lelang DESC LIMIT 5") or die (mysql_error('Tabel tidak ditemukan'));
										while ($data = mysqli_fetch_array($query)){
											?>
											<ul>
												<?php echo '<a href="detail_lelang.php?id='.base64_encode($data['id_lelang']).'" >' ?>
												<li>
													<div class="col-md-12 news-item2">
														<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;<?php $isi=$data['title_lelang'];
															echo  substr($isi,0,30);
															?></div>
															<div class="col-md-12 desc-news">
																<?php $isi=$data['description_lelang']; 
																echo  substr($isi,0,200);
																?>
															</div>
															<div class="col-md-12 date-news"><?php echo $data['date_publish_lelang']; ?></div>
															<div class="col-md-12 kind-news">lelang</div>
														</div>
													</li>
												</a>
											</ul>
											<?php        
										}
										?>
									</div>
								</div>
							</div>
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
	<script type="text/javascript" src="../assets/js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/custom.js"></script>
	</html>
