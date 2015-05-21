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
        <p class="centered"><img class="img-thumbnail" width="100" src="../assets/image/<?php echo $data ['image']; ?>"/></p>
        <h5 class="centered"><?php echo $_SESSION['admin'] ?></h5>
        <li class="mt">
          <a class="active" href="../admin/index.php">
            <i class=" glyphicon glyphicon-home fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="  glyphicon glyphicon-tags fa fa-desktop"></i>
            <span>Eproc</span>
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
            <li><a  href="../data_user/add.php">New User</a></li>
            <li><a  href="../data_user/index.php">List User</a></li>
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
      <section class="news">
    <div class="carousel-reviews broun-block">
      <div class="container">
        <div class="row">
          <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-md-4 col-sm-6">
                  <div class="block-text rel zmin">
                    <a title="" href="#">News</a>
                    <div class="mark">
                      <img src="../assets/image/image1.jpg">
                    </div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
                  <div class="person-text rel">
                    <a title="" href="#">Read More..</a>
                    <i>Administrator</i>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 hidden-xs">
                  <div class="block-text rel zmin">
                    <a title="" href="#">News</a>
                    <div class="mark">
                      <img src="../assets/image/image1.jpg">
                    </div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
                  <div class="person-text rel">
                    <a title="" href="#">Read More..</a>
                    <i>Administrator</i>
                  </div>
                </div>
                
              </div>
              <div class="item">
                <div class="col-md-4 col-sm-6">
                  <div class="block-text rel zmin">
                    <a title="" href="#">News</a>
                    <div class="mark">
                      <img src="../assets/image/image1.jpg">
                    </div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
                  <div class="person-text rel">
                    <a title="" href="#">Read More..</a>
                    <i>Administrator</i>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 hidden-xs">
                  <div class="block-text rel zmin">
                    <a title="" href="#">News</a>
                    <div class="mark">
                      <img src="../assets/image/image1.jpg">
                    </div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
                  <div class="person-text rel">
                    <a title="" href="#">Read More..</a>
                    <i>Administrator</i>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                  <div class="block-text rel zmin">
                    <a title="" href="#">News</a>
                    <div class="mark">
                      <img src="../assets/image/image1.jpg">
                    </div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
                  <div class="person-text rel">
                    <a title="" href="#">Read More..</a>
                    <i>Administrator</i>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
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
