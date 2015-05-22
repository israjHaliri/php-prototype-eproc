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
        <h5 class="centered"><?php echo $_SESSION['admin']; ?></h5>
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
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <td>NO</td>
            <th>Title</th>
            <th>Date</th>
            <th class="datatable-nosort">Action</th>
          </tr>
        </thead>
        <div  align="right">
          <a class="btn btn-success btn-xs btn-add" href="add.php">Tambah Data</a>
        </div>
        <tbody>
          <?php 
          $no = 1;
          $query = mysqli_query($conn,"SELECT * FROM berita ORDER BY id_berita DESC") or die (mysql_error('Tabel tidak ditemukan'));
          while ($data = mysqli_fetch_array($query)){
            ?>
            
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['title']; ?></td>
              <td><?php echo $data['date']; ?></td>
              <td align="center"><?php echo '<a href="detail.php?id='.base64_encode($data['id_berita']).'" class="btn btn-info">Details</a>&nbsp;<a href="edit.php?id='.base64_encode($data['id_berita']).'" class="btn btn-success">Edit</a>&nbsp;<a href="delete.php?id='.base64_encode($data['id_berita']).'" class="btn btn-success">Hapus</a>';?></td>
            </tr>
            <?php        
            $no++;
          }
          ?>
        </tbody>
      </table>
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
    $('#example').dataTable();
  });

  $("table").DataTable({
    columnDefs: [{
      targets: "datatable-nosort",
      orderable: false
    }]
  });
</script>
</html>