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
echo "No data";
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
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <td>NO</td>
            <th>Nama</th>
            <th>Subject</th>
            <th>Pesan</th>
            <th class="datatable-nosort">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no = 1;
          $query = mysqli_query($conn,"SELECT * FROM contact_us ORDER BY id_contact DESC") or die (mysql_error('Tabel tidak ditemukan'));
          while ($data = mysqli_fetch_array($query)){
            ?>

            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['subject']; ?></td>
              <td><?php echo $data['pesan']; ?></td>
              <td align="center"><?php echo '<a href="detail.php?id='.base64_encode($data['id_contact']).'" class="btn btn-info">Details</a>&nbsp;<a href="delete.php?id='.base64_encode($data['id_contact']).'" class="btn btn-success">Hapus</a>';?></td>
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
    $('#example').dataTable({
      "lengthMenu":[ 5, 10, 25, 50, 100]
    });
  });

// $("table").DataTable({
//   columnDefs: [{
//     targets: "datatable-nosort",
//     orderable: false
//   }]
// });
</script>
</html>
