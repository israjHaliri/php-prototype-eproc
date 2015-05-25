<?php
session_start();

if(!isset($_SESSION['admin'])){

  echo '<script language="javascript">alert("Anda harus Login!"); document.location="../public/index.php";</script>';
}
?>
<?php
include('../config/connection.php');
@$id = base64_decode($_REQUEST['id']);
$show = mysqli_query($conn,"SELECT * FROM supplier WHERE id_supplier='$id'");
if(mysqli_num_rows($show) == 0)
{
    // echo '<script>window.history.back()</script>';
}
else
{
  $data = mysqli_fetch_assoc($show);
}
?>

<?php

include('../config/connection.php');
if(isset($_REQUEST['save']))
{
  $id     = $_REQUEST['id'];  
  $nama    = $_POST['nama'];
  $alamat   =$_POST['alamat'];
  $password   =base64_encode($_POST['password']);
  $nama_perusahaan_penyedia   = $_POST['nama_perusahaan_penyedia'];
  $no_pkp   = $_POST['no_pkp'];
  $bentuk_usaha   = $_POST['bentuk_usaha'];
  $npwp   = $_POST['npwp'];
  $status   = $_POST['status'];
  

  $update = mysqli_query($conn,"UPDATE supplier SET nama='$nama',alamat='$alamat', password='$password', nama_perusahaan_penyedia='$nama_perusahaan_penyedia', no_pkp='$no_pkp', bentuk_usaha='$bentuk_usaha', npwp='$npwp', status='$status' WHERE id_supplier='$id'") or die(mysqli_error());


  if(!$update)
  {
    ?>
    <script type="text/javascript">
      alert("Gagal Simpan Data,Mohon Verifikasi Kembali Data");
    </script>
    <?php 
  } 
  else 
  {
    header("Location:index.php");
  }
}
?>
<?php
include('../config/connection.php');
@$username = $_SESSION['admin'];
$show2 = mysqli_query($conn,"SELECT image FROM user WHERE username='$username'");
if(mysqli_num_rows($show2) == 0)
{
    // echo '<script>window.history.back()</script>';
}
else
{
  $data2 = mysqli_fetch_assoc($show2);
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
        <p class="centered"><img class="img-thumbnail" width="100" src="../assets/image/<?php echo $data2 ['image']; ?>"/></p>
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
     <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Content</h3>
      </div>
      <div class="panel-body">
        <section class="content-tambah">
          <div class="col-md-6">
            <form action="edit.php" method="post"  enctype="multipart/form-data">
              <table>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                  <label>Nama</label>   
                  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="form-group">
                  <label>ALamat</label>   
                  <textarea name="alamat" rows="10" cols="80" class="form-control"><?php echo $data['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Password</label>   
                  <input type="password" name="password" class="form-control" value="<?php echo base64_decode($data['password']); ?>">
                </div>
                <div class="form-group">
                  <label>Nama Perusahaan Penyedia</label>   
                  <input type="text" name="nama_perusahaan_penyedia" class="form-control" value="<?php echo $data['nama_perusahaan_penyedia']; ?>">
                </div>
                <div class="form-group">
                  <label>No PKP</label>   
                  <input type="text" name="no_pkp" class="form-control" value="<?php echo $data['no_pkp']; ?>">
                </div>
                <div class="form-group">
                  <label>Bentuk Usaha</label>   
                  <input type="text" name="bentuk_usaha" class="form-control" value="<?php echo $data['bentuk_usaha']; ?>">
                </div>
                <div class="form-group">
                  <label>NPWP</label>   
                  <input type="text" name="npwp" class="form-control" value="<?php echo $data['npwp']; ?>">
                </div>
                <div class="form-group">
                  <label>Status&nbsp;:&nbsp;</label><br>
                  <select name="status" required class="btn btn-default">
                    <option value="aktif" <?php if($data['status'] == 'aktif'){ echo 'selected'; } ?>>aktif</option>
                    <option value="non-aktif" <?php if($data['status'] == 'non-aktif'){ echo 'selected'; } ?>>non-aktif</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" name="save" value="Simpan" class="btn btn-success">
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



