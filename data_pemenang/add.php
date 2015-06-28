<?php
session_start();

if(!isset($_SESSION['admin'])){

  echo '<script language="javascript">alert("Anda harus Login!"); document.location="../public/index.php";</script>';
}
?>
<?php
if(!empty($_POST["add"]))
{


  include('../config/connection.php');
  $id_user		= $_POST['iduser'];
  $id_pengadaan		=$_POST['idpengadaan'];

    $input = mysqli_query($conn,"INSERT INTO pemenang VALUES (NULL, '$id_user', '$id_pengadaan')") or die(mysqli_error());
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
      header("Location:add.php");
    }
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
<html>
<head>
  <title></title>
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style-responsive.css" rel="stylesheet">
  <link href="../assets/css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/jquery-ui.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-clockpicker.css">
  <style type="text/css">
    li{
      list-style: yes;
    }
  </style>

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
            <a class="logout" href="../dashboard_admin/logout.php">Logout</a>
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
          <a href="" >
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
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class=" glyphicon glyphicon-chevron-down fa fa-tasks"></i>
            <span>Pemenang</span>
          </a>
          <ul class="sub">
            <li><a  href="../data_pemenang/add.php">New Data</a></li>
            <li><a  href="../data_pemenang/index.php">List Data</a></li>
          </ul>
        </li>
      </ul style="padding-bottom=20">
    </div>
  </aside>
  <section id="main-content">
    <section class="wrapper">
     <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Content</h3>
      </div>
      <div class="panel-body">
        <section class="content-tambah">
          <div class="col-md-6">
            <form action="add.php" method="post"  enctype="multipart/form-data">
              <table>
                <div class="form-group">
                  <label>User ID </label> 	
                  <select class="form-control" name="iduser">
                    <?php
                    $query = "SELECT * FROM user";
                    $result = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){                                                 
                     echo "<option value='".$row['id_user']."'>".$row['id_user']."</option>";
                   }
                   ?>
                 </select>
               </div>
               <div class="form-group">
                  <label>Pengadaan ID </label>  
                  <select class="form-control" name="idpengadaan">
                    <?php
                    $query = "SELECT * FROM pengadaan";
                    $result = mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){                                                 
                     echo "<option value='".$row['id_pengadaan']."'>".$row['id_pengadaan']."</option>";
                   }
                   ?>
                 </select>
               </div>
              <div class="form-group">
                <input type="submit" name="add" value="Simpan" class="btn btn-success">
                <a href="index.php" class="btn btn-default">Beranda</a>
              </div>
            </table>
          </form>
        </div>
        <div class="col-md-3"></div>
      </section>
    </div>
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
<script src="../assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
// ckeditor
if ( typeof CKEDITOR == 'undefined' )
{
  document.write(
    'CKEditor not found');
}
else
{
  var editor = CKEDITOR.replace( 'editor1' ); 
  CKFinder.setupCKEditor( editor, '' ) ;
}
</script>
<script type="text/javascript" src="../assets/js/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript" src="../assets/js/highlight.min.js"></script>
<script type="text/javascript">
// time picker
$('.clockpicker').clockpicker()
.find('input').change(function(){
  console.log(this.value);
});
</script>

</html>