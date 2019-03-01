<?php 
include '../data_user/pagination.php';
include('../config/connection.php');
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>"")
{
	$keyword=$_REQUEST['keyword'];
	$reload = "result.php?pagination=true&keyword=$keyword";
	$sql =  "SELECT * FROM berita WHERE title_berita LIKE '%$keyword%'  UNION  
	SELECT * FROM lelang WHERE title_lelang LIKE '%$keyword%'  UNION  
	SELECT * FROM pengadaan WHERE title_pengadaan LIKE '%$keyword%' ";
	$result = mysqli_query($conn,$sql);
}
else
{
	echo "please insert keyword";
}
      $rpp = 5; // jumlah record per halaman
      @$page = intval($_REQUEST["page"]);
      if($page<=0) $page = 1;  
      $tcount = mysqli_num_rows($result);
      $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
      $count = 0;
      $i = ($page-1)*$rpp;
      $no_urut = ($page-1)*$rpp;
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
      	<section id="main-content">
      		<section class="news">
      			<div class=" broun-block">
      				<div class="container">
      					<div class="row" align="">
      						<?php
      						while(($count<$rpp) && ($i<$tcount)) 
      						{
      							mysqli_data_seek($result,$i);
      							$data = mysqli_fetch_array($result);
      							?>
      							<div class="col-md-4 col-sm-6">
      								<div class="block-text rel zmin">
      									<?php echo '<a href="detail_berita.php?id='.base64_encode($data['id_berita']).'" >' ?><?php echo $data['title_berita'];?></a>
      									<div class="mark">
      										<img src="../assets/image/<?php echo $data ['image_berita']; ?>">
      									</div>
      									<p>
      										<?php $isi= $data['description_berita']; 
      										echo  substr($isi,0,500);
      										?>
      									</p>
      									<ins class="ab zmin sprite sprite-i-triangle block"></ins>
      								</div>
      								<div class="person-text rel">
      									<?php echo '<a href="detail_berita.php?id='.base64_encode($data['id_berita']).'" >' ?>Read More..</a>
      									<i><?php echo $data['date_publish_berita'];?></i>
      								</div>
      							</div>
      							<?php
      							$i++; 
      							$count++;
      						}
      						?>
      						<div class="col-md-12">
      							<div align="center"><?php echo paginate_one($reload, $page, $tpages); ?></div>
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