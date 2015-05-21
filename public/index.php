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
									<li><a href="news.html" class="btn btn-default">All News</a></li>
									<li><a href="faqs.html" class="btn btn-default">FAQ's</a></li>
									<li><a href="register.html" class="btn btn-default">Supplier Registration</a></li>
									<li><a href="contact-us.html" class="btn btn-default">Contact Us</a></li>
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
	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 btn-download">
						<div class="col-md-12">
							<a href="" class="btn btn-default">							
								<i class=" glyphicon glyphicon-download-alt">&nbsp;Syarat & Kondisi</i>
							</a>
						</div>
						<div class="col-md-12">
							<a href="" class="btn btn-default">							
								<i class=" glyphicon glyphicon-download-alt">&nbsp;Pakta Integritas</i>
							</a>
						</div>
					</div>
					<div class="col-md-5"><img src="../assets/image/cs.png"></div>
					<div class="col-md-4">
						<h2>Eproc</h2>
						<p>
							LPSE is organisation is organisationis organisationis organisationis organisation
							is organisationis organisationis organisationis organisationis organisationis organisation.is organisationis organisationis organisationis organisationis organisationis organisation.organisation.is organisationis organisationis.
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
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description.
													</div>
													<div class="col-md-12 kind-news">Invitation</div>
												</div>
											</li>
										</a>
									</ul>
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description Description
													</div>
													<div class="col-md-12 kind-news">Invitation</div>
												</div>
											</li>
										</a>
									</ul>
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description Description
													</div>
													<div class="col-md-12 kind-news">Invitation</div>
												</div>
											</li>
										</a>
									</ul>
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item">
													<div class="col-md-12 desc-news" >Selengkapnya..</div>
												</div>
											</li>
										</a>
									</ul>
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
													<h3>Deskripsi</h3>
													<a href="" class="btn btn-default">Selengkapnya...</a>
												</div>
											</div>
											<div class="item">
												<img src="../assets/image/image1.jpg" alt="...">
												<div class="carousel-caption">
													<h3>Deskripsi</h3>
													<a href="" class="btn btn-default" >Selengkapnya...</a>
												</div>
											</div>
											<div class="item">
												<img src="../assets/image/image1.jpg" alt="...">
												<div class="carousel-caption">
													<h3>Deskripsi</h3>
													<a href="" class="btn btn-default">Selengkapnya...</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane invitation" id="pengadaan">
							<div class="col-md-12 tab-post">
								<div class="col-sm-12 ">
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description Description
														Description Description Description Description description Description
													</div>
													<div class="col-md-12 date-news">21-21-2021</div>
													<div class="col-md-12 kind-news">pengadaan</div>
												</div>
											</li>
										</a>
									</ul>
								</div>
								<div class="col-sm-12 ">
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item2">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description Description
														Description Description Description Description description Description
													</div>
													<div class="col-md-12 date-news">21-21-2021</div>
													<div class="col-md-12 kind-news">pengadaan</div>
												</div>
											</li>
										</a>
									</ul>
								</div>
								<div class="col-sm-12 ">
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description Description
														Description Description Description Description description Description
													</div>
													<div class="col-md-12 date-news">21-21-2021</div>
													<div class="col-md-12 kind-news">pengadaan</div>
												</div>
											</li>
										</a>
									</ul>
								</div>
								<div class="col-sm-12 ">
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item2">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description Description
														Description Description Description Description description Description
													</div>
													<div class="col-md-12 date-news">21-21-2021</div>
													<div class="col-md-12 kind-news">pengadaan</div>
												</div>
											</li>
										</a>
									</ul>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane invitation" id="lelang">
							<div class="col-md-12 tab-post">
								<div class="col-sm-12 ">
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description Description
														Description Description Description Description description Description
													</div>
													<div class="col-md-12 date-news">21-21-2021</div>
													<div class="col-md-12 kind-news">lelang</div>
												</div>
											</li>
										</a>
									</ul>
								</div>
								<div class="col-sm-12 ">
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item2">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description Description
														Description Description Description Description description Description
													</div>
													<div class="col-md-12 date-news">21-21-2021</div>
													<div class="col-md-12 kind-news">lelang</div>
												</div>
											</li>
										</a>
									</ul>
								</div>
								<div class="col-sm-12 ">
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description Description
														Description Description Description Description description Description
													</div>
													<div class="col-md-12 date-news">21-21-2021</div>
													<div class="col-md-12 kind-news">lelang</div>
												</div>
											</li>
										</a>
									</ul>
								</div>
								<div class="col-sm-12 ">
									<ul>
										<a href="">
											<li>
												<div class="col-md-12 news-item2">
													<div class="col-md-12 title-news "><i class=" glyphicon glyphicon-file"></i>&nbsp;Title News</div>
													<div class="col-md-12 desc-news">
														Description Description Description Description description Description
														Description Description Description Description description Description
													</div>
													<div class="col-md-12 date-news">21-21-2021</div>
													<div class="col-md-12 kind-news">lelang</div>
												</div>
											</li>
										</a>
									</ul>
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
