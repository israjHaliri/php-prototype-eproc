<?php
include('../config/connection.php');
include('../config/format_bytes.php');
if(@$_POST['add']){
	$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
	$file_name		= $_FILES['file']['name'];
	$file_ext		= strtolower(end(explode('.', $file_name)));
	$file_size		= $_FILES['file']['size'];
	$file_tmp		= $_FILES['file']['tmp_name'];
	$nama			= $_POST['nama'];
	$tgl			= date("Y-m-d");

	if(in_array($file_ext, $allowed_ext) === true){
		if($file_size < 2044070){
			$lokasi = '../assets/files/'.$nama.'.'.$file_ext;
			move_uploaded_file($file_tmp, $lokasi);

			$in = mysqli_query($conn,"INSERT INTO pakta_integritas (date_publish,name_file,type_file,file_size,file) VALUES('$tgl','$nama', '$file_ext', '$file_size', '$lokasi')") or die (mysqli_error());
			if($in){
				header("location:index.php");
			}else{
				echo '<div class="error">ERROR: Gagal upload file!</div>';
			}
		}else{
			echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
		}
	}else{
		echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
	}
}
?>
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
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.css">
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
      <form action="file.php" method="post"  enctype="multipart/form-data">
            <table>
              <div class="form-group">
                <label>Title</label> 	
                <input type="text" name="nama" class="form-control" require>
              </div>
              <div class="form-group">
                <label>Pilih File&nbsp;:&nbsp;</label> <input type="file" name="file" required>
              </div>
              <div class="form-group">
                <input type="submit" name="add" value="Simpan" class="btn btn-success">
                <a href="index.php" class="btn btn-default">Beranda</a>
              </div>
            </table>
          </form>
  </section>
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
