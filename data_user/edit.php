<?php
session_start();

if(!isset($_SESSION['admin'])){

	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../public/index.php";</script>';
}
?>
<?php
include('../config/connection.php');
@$id = base64_decode($_REQUEST['id']);
$show = mysqli_query($conn,"SELECT * FROM user WHERE user_id='$id'");
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
if(isset($_REQUEST['save']))
{
	$id			= $_REQUEST['id'];	
	$username		= $_REQUEST['username'];	
	$password		= base64_encode($_REQUEST['password']);
	$level		= $_REQUEST['level'];	
	$email		= $_REQUEST['email'];	
	
	$image_name	= addslashes(isset($_FILES['image']['name']) ? $_FILES['image']['name'] : null);
	$file = @$_FILES['image']['tmp_name'];
	$direktori = "../assets/image/";
	$saveImage=move_uploaded_file($file, $direktori.$image_name);
	
	if($image_name=="")
	{
		$update = mysqli_query($conn,"UPDATE user SET username='$username', password='$password', level='$level', email='$email' WHERE user_id='$id'") or die(mysqli_error());
	}
	else if($image_name!="")
	{
		$update = mysqli_query($conn,"UPDATE user SET username='$username', password='$password', level='$level', email='$email', image='$image_name' WHERE user_id='$id'") or die(mysqli_error());
	}

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
			<section class="content-tambah">
				<div class="col-md-6">
					<form action="edit.php" method="post"  enctype="multipart/form-data">
						<table>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<div class="form-group">
								<label>Username</label> 	
								<input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>">
							</div>
							<div class="form-group">
								<label>Password</label> 	
								<input type="password" name="password" class="form-control" value="<?php echo base64_decode($data['password']); ?>">
							</div>
							<div class="form-group">
								<label>Email</label> 	
								<input type="email" name="email" class="form-control" value="<?php echo($data['email']); ?>">
							</div>
							<div class="form-group">
								<label>Level&nbsp;:&nbsp;</label><br>
								<select name="level" required class="btn btn-default">
									<option value="admin" <?php if($data['level'] == 'admin'){ echo 'selected'; } ?>>Admin</option>
									<option value="guest" <?php if($data['level'] == 'guest'){ echo 'selected'; } ?>>Guest</option>
								</select>
							</div>
							<div class="form-group">
								<label>Pilih File&nbsp;:&nbsp;</label> <input type="file" name="image">
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
