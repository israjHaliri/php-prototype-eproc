
<?php
include('../config/connection.php');
@$id = base64_decode($_REQUEST['id']);
$show = mysqli_query($conn,"SELECT * FROM berita WHERE id_berita='$id'");
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
  <link href="../assets/css/custom.css" rel="stylesheet">
  <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/jquery-ui.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-clockpicker.css">
</head>
<body>
  <section class="head1">
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-2">
          <img src="../assets/image/logo.png" align="left">
        </div>
        <div class="col-md-10 language" align="right">
          <div>
            <i class=" glyphicon glyphicon-user"></i>(123) 456-7890
          </div>
          <div>
            <div class="input-group search col-md-3">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class=" glyphicon glyphicon-search"></i></button>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php" class="btn btn-default">Home</a></li>
                  <li><a href="news.php" class="btn btn-default">All News</a></li>
                  <li><a href="faqs.php" class="btn btn-default">FAQ's</a></li>
                  <li><a href="register.php" class="btn btn-default">Supplier Registration</a></li>
                  <li><a href="contact-us.php" class="btn btn-default">Contact Us</a></li>
                  <li><a href="login.php" class="btn btn-default">Login</a></li>
                  <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-default" data-toggle="dropdown" role="button" aria-expanded="false">Login&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="" data-toggle="modal" data-target="#myModal">Option1</a></li>
                      <li class="divider"></li>
                      <li><a href="" >Option2</a></li>
                    </ul>
                  </li> -->
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="segitiga-atas"></section>
  <section id="main-detail">
    <div class="col-md-2"></div>
    <div class="col-md-8" align="center">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Content</h3>
        </div>
        <div class="panel-body">
          <div class="col-md-2"></div>
          <div class="col-md-8 col-sm-8">
            <div class="block-text">
              <a><?php echo $data['title']; ?></a>
              <div class="mark">
                <img class="img-thumbnail" src="../assets/image/<?php echo $data ['image']; ?>"/>
              </div>
              <p>
                <?php echo $data['description']; ?>
              </p>
              <div align="right">
                <small><?php echo $data['date_publish']; ?></small>
                <small><?php echo $data['time_publish']; ?></small>
              </div>
              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </section>
  <section class="footer">
    <div class="col-md-12 copyright" align="center">
      <span><i class="glyphicon glyphicon-copyright-mark"></i>&nbsp;Copyright 2015</span>
    </div>
  </section>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="col-md-12 img-login" align="center">
                <img src="../assets/image/logopln.png" class="img-circle">
              </div>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-tag"></i></button>
                  </span>
                  <input type="text" class="form-control" placeholder="username">
                </div><!-- /input-group -->
              </div>
              <br>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-lock"></i></button>
                  </span>
                  <input type="text" class="form-control" placeholder="password">
                </div><!-- /input-group -->
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Login</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
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