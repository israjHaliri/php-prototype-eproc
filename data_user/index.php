<?php
session_start();

if(!isset($_SESSION['admin'])){

  echo '<script language="javascript">alert("Anda harus Login!"); document.location="../public/index.php";</script>';
}
?>
<?php 
      include 'pagination.php';
      include('../config/connection.php');
      if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>"")
      {
        $keyword=$_REQUEST['keyword'];
        $reload = "index.php?pagination=true&keyword=$keyword";
        $sql =  "SELECT * FROM user WHERE username LIKE '%$keyword%' ORDER BY username";
        $result = mysqli_query($conn,$sql);
      }
      else
      {
        $reload = "index.php?pagination=true";
        $sql =  "SELECT * FROM user ORDER BY username";
        $result = mysqli_query($conn,$sql);
      }
      $rpp = 10; // jumlah record per halaman
      @$page = intval($_REQUEST["page"]);
      if($page<=0) $page = 1;  
      $tcount = mysqli_num_rows($result);
      $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
      $count = 0;
      $i = ($page-1)*$rpp;
      $no_urut = ($page-1)*$rpp;
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
<html>
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
          <a href="javascript:;" >
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
          <a href="javascript:;" >
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
          <a href="javascript:;" >
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
      
      <section class="content-data">
        <div class="row">
          <div class="col-lg-8">
            <!--muncul jika ada pencarian (tombol reset pencarian)-->
            <?php
            if(isset($_REQUEST['keyword'])<>"")
            {
              ?>
              <a class="btn btn-default btn-outline" href="index.php"> Reset Pencarian</a>
              <?php
            }
            else
            {
              ?>
              <a class="btn btn-success btn-outline" href="add.php">Tambah Data</a>
              <?php
            }
            ?>
          </div>
          <div class="col-lg-4 text-right">
            <form method="post" action="index.php">
              <div class="form-group input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Search..." value="<?php echo isset($_REQUEST['keyword']); ?>">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">Cari
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td width="5%" align="center">No</td>
              <td width="30%" align="center">Username</td>
              <td width="25%" align="center">Level</td>
              <td width="25%" align="center">Foto</td>
              <td width="15%" align="center">Action</td>
            </tr>
          </thead>
          <tbody>
            <?php
            while(($count<$rpp) && ($i<$tcount)) 
            {
              mysqli_data_seek($result,$i);
              $data = mysqli_fetch_array($result);
              ?>
              <tr>
                <td width="5%" align="center"><?php echo ++$no_urut;?></td>
                <td width="30%" align="center"><?php echo $data ['username']; ?></td>
                <td width="25%" align="center"><?php echo $data ['level']; ?> </td>
                <td width="25%" align="center"><img class="img-thumbnail" src="../assets/image/<?php echo $data ['image']; ?>"/></td>
                <td width="15%" align="center"><?php echo '<a href="edit.php?id='.base64_encode($data['user_id']).'" class="btn btn-success">Edit</a>&nbsp;<a href="delete.php?id='.base64_encode($data['user_id']).'" class="btn btn-success">Hapus</a>';?></td>
              </tr>
              <?php
              $i++; 
              $count++;
            }
            ?>
          </tbody>
        </table>
        <div align="center"><?php echo paginate_one($reload, $page, $tpages); ?></div>
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