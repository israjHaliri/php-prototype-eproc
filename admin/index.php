<?php
session_start();

if(!isset($_SESSION['admin'])){

  echo '<script language="javascript">alert("Anda harus Login!"); document.location="../public/index.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
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
      <a href="index.html" class="logo">
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
        <p class="centered"><a href="profile.html"><img src="../assets/image/cs.png" class="img-circle" width="80"></a></p>
        <h5 class="centered"><?php echo $_SESSION['admin']; ?></h5>
        <li class="mt">
          <a class="active" href="index.html">
            <i class=" glyphicon glyphicon-home fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="  glyphicon glyphicon-chevron-down fa fa-desktop"></i>
            <span>Berita Terbaru</span>
          </a>
          <ul class="sub">
            <li><a  href="new.html">New Item</a></li>
            <li><a  href="list.html">List</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-cogs  glyphicon glyphicon-chevron-down"></i>
            <span>Hasil Lelang</span>
          </a>
          <ul class="sub">
            <li><a  href="new.html">New Item</a></li>
            <li><a  href="list.html">List</a></li>
          </ul>
        </li>
        <li class="sub-menu ">
          <a href="javascript:;" >
            <i class="  glyphicon glyphicon-chevron-down fa fa-book"></i>
            <span>Pengadaan</span>
          </a>
          <ul class="sub">
            <li><a  href="new.html">New Item</a></li>
            <li><a  href="list.html">List</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class=" glyphicon glyphicon-chevron-down fa fa-tasks"></i>
            <span>User</span>
          </a>
          <ul class="sub">
            <li><a  href="new.html">New Item</a></li>
            <li><a  href="list.html">List</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>
  <section id="main-content">
    <section class="wrapper">
      <div class="col-md-12">
      <div class="alert alert-success" role="alert">Welcome to dashboar Admin <strong><?php echo $_SESSION['admin']; ?></strong></div>
      </div>
    </section>
  </section>
  <script src="../assets/js/jquery-2.1.3.min.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../assets/js/jquery.scrollTo.min.js"></script>
  <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../assets/js/common-scripts.js"></script>
</body>
</html>
