<?php
session_start();

if(!isset($_SESSION['admin'])){

  echo '<script language="javascript">alert("Anda harus Login!"); document.location="../public/index.php";</script>';
}
?>
<?php
include('../config/connection.php');
@$username = ($_SESSION['admin']);
$show = mysqli_query($conn,"SELECT image FROM user WHERE username='$username'");
if(mysqli_num_rows($show) == 0)
{
// echo '<script>window.history.back()</script>';
}
else
{
  $data = mysqli_fetch_assoc($show);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/custom-admin.css" rel="stylesheet">
  <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>
  <section id="container" >
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="glyphicon glyphicon-align-justify fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">
        </div>
      </div>
      <a class="logo">
        <b>DASH<span>BOARD</span></b>
      </a>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </header>
  </section>
  <aside>
    <div id="sidebar"  class="nav-collapse ">
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><img class="img-thumbnail" width="100" src="../assets/image/<?php echo $data ['image']; ?>"/></p>
        <h5 class="centered"><?php echo $_SESSION['admin'] ?></h5>
        <li class="mt">
          <a class="active" href="../dashboard_admin/index.php">
            <i class=" glyphicon glyphicon-home fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="../data_content_eproc/index.php">
            <i class="  glyphicon glyphicon-tags fa fa-desktop"></i>
            <span>Eproc</span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="  glyphicon glyphicon-chevron-down fa fa-desktop"></i>
            <span>Berita</span>
          </a>
          <ul class="sub">
            <li><a  href="../data_content_berita/add.php">New Data</a></li>
            <li><a  href="../data_content_berita/index.php">List Data</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="../data_content_faqs/index.php">
            <i class="  glyphicon glyphicon-tags fa fa-desktop"></i>
            <span>FAQ's</span>
          </a>
        </li>
        <li class="sub-menu ">
          <a href="javascript:;" >
            <i class="  glyphicon glyphicon-chevron-down fa fa-book"></i>
            <span>Lelang</span>
          </a>
          <ul class="sub">
            <li><a  href="../data_content_lelang/add.php">New Data</a></li>
            <li><a  href="../data_content_lelang/index.php">List Data</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class=" glyphicon glyphicon-chevron-down fa fa-tasks"></i>
            <span>Pengadaan</span>
          </a>
          <ul class="sub">
            <li><a  href="../data_content_pengadaan/add.php">New Data</a></li>
            <li><a  href="../data_content_pengadaan/index.php">List Data</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="../data_content_contact_us/index.php">
            <i class="  glyphicon glyphicon-tags fa fa-desktop"></i>
            <span>Contact-Us</span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class=" glyphicon glyphicon-chevron-down fa fa-tasks"></i>
            <span>Supplier</span>
          </a>
          <ul class="sub">
            <li><a  href="../data_supplier/add.php">New Data</a></li>
            <li><a  href="../data_supplier/index.php">List Data</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class=" glyphicon glyphicon-chevron-down fa fa-tasks"></i>
            <span>User</span>
          </a>
          <ul class="sub">
            <li><a  href="../data_user/add.php">New Data</a></li>
            <li><a  href="../data_user/index.php">List Data</a></li>
          </ul>
        </li>
        </ul style="padding-bottom=20">
    </div>
  </aside>
  <section id="main-content">
    <section class="wrapper">
      <div class="col-md-12">
        <div class="alert alert-success" role="alert">Welcome to dashboar Admin <strong><?php echo $_SESSION['admin']; ?></strong></div>
      </div>
      <div class='row'>
        <div class="col-md-2"></div>
        <div class='col-md-8'>
          <div class="carousel slide media-carousel" id="media">
            <div class="carousel-inner">
              <div class="item  active">
                <div class="row">
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>          
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>        
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>          
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>        
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>          
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>
                  <div class="col-md-4">
                    <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                  </div>      
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#media" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#media" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>                          
        </div>
        <div class="col-mf-d"></div>
      </div>      
    </section>
  </section>
</body>
<script src="../assets/js/jquery-2.1.3.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../assets/js/common-scripts.js"></script>
</html>
