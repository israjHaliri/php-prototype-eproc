
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" />
 <title>Implementasi Tanggal</title>
<script src="../assets/js/jquery-2.1.3.min.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script type="text/javascript">
   $(function() {
     $( "#input" ).datepicker({
     changeMonth: true,
     changeYear: true
     });
   });
 </script>
</head>
<body>
 <div class="wrapper">
  <form action="action.php" method="post">
   <label>Masukkan data tanggal</label>
    <input type="text" id="input" size="15" name="tanggal" value="12/12/1940" />
    <input type="submit" name="submit" value="Submit" />
   </form>
 </div>
</body>
</html>

<!-- 
<div class="input-group clockpicker">
    <input type="text" class="form-control" value="09:30">
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
<script type="text/javascript">
$('.clockpicker').clockpicker();
</script> -->

<!-- <div class="input-group clockpicker">
    <input type="text" class="form-control" value="09:30">
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
<script type="text/javascript">
$('.clockpicker').clockpicker();
</script> -->