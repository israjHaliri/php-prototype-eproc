<div class="panel panel-default">
	<div class="panel panel-success">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-calendar"> Cari Artikel berdasarkan Kategori</span>
		</div>
	</div>
	<div class="panel-body">
  <form action="artikel_pencarian.php" method="POST">
		<input type="text" placeholder='Masukan Keyword Pencarian' name="cari" class="form-control input-sm">
		<select name="berdasarkan" class="form-control input-sm">
      <option value="artikel_judul">Judul</option>  
      <option value="artikel_tanggal">Tanggal</option>  
      <option value="artikel_isi">Isi</option>
      <option value="katar_judul">Kategori</option>  
      <option value="artikel_pengirim">Pengirim</option>  
    </select>
      	<br>
		<button type="submit" name="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-share"></span>&nbsp;Cari Artikel</button>
	</form>
  </div>
</div>
<hr>
<br>

<?php
   include 'config/config.php';

   $dataPerPage = 10;

   if(isset($_GET['page']))
      {
          $noPage = $_GET['page'];
      } 
   else $noPage = 1;

   $offset = ($noPage - 1) * $dataPerPage;
   $query = "SELECT * FROM tbl_artikel WHERE artikel_status='1' and katar_judul='$_GET[id]' ORDER BY artikel_id DESC LIMIT $offset, $dataPerPage";
   $result = mysql_query($query) or die('Error');
   $no = 1;
?>

<?php
		while($data = mysql_fetch_array($result)){

      $id      = base64_encode($data['artikel_id']);
      $idd     = base64_encode($id);
      $iddd    = base64_encode($idd);
      $idddd   = base64_encode($iddd);
      $iddddd  = base64_encode($idddd);
      $idddddd = base64_encode($iddddd);
?>

 <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-title"><a href="artikel_detail2.php?page=<?php echo base64_encode('artikel_detail2') ?>&artikel_id=<?php echo $idddddd;?>"><small><strong><div class="text-primary"><span class="glyphicon glyphicon-share"></span>&nbsp;&nbsp;<?php echo substr($data['artikel_judul'],0,100).""; ?></div></strong></small></a></div>
      </div>
      <div class="panel-body">
        <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $data['artikel_pengirim']; ?>&nbsp;&nbsp;
        <span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;<?php echo $data['artikel_tanggal']; ?>
        <br>
        <p></p>
        <p>
         <?php 
              $isi=$data['artikel_isi'];
                 echo substr($isi,0,200);
          ?>
        </p>
        <a href="artikel_detail2.php?page=<?php echo base64_encode('artikel_detail2') ?>&artikel_id=<?php echo $idddddd;?>" class="btn btn-flat btn-xs flat-danger btn-rounded" role="button"><span class="glyphicon glyphicon-share-alt"></span>  Read More</a>
      </div>
    </div>
  </div>

<?php		
		$no++;
	}
?>

<center>
   <?php
      $query  = "SELECT COUNT(*) AS jumData FROM tbl_artikel";
        $hasil  = mysql_query($query);
        $data   = mysql_fetch_array($hasil);

        $jumData = $data['jumData'];
        $jumPage = ceil($jumData/$dataPerPage);

      // menampilkan navigasi paging
        echo "<ul class='pagination pagination-sm pagination-danger'>";
        if ($noPage > 1) echo  "<li><a href='".$_SERVER['PHP_SELF']."?gabungan=".base64_encode('artikel_detail')."&page=".($noPage-1)."'><< Prev</a></li>";
        for($page = 1; $page <= $jumPage; $page++)
        {
            if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
            {
              if (($showPage == 1) && ($page != 2))  echo "<li class='disabled'><a href='#'>...</a></li>";
              if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "<li class='disabled'><a href='#'>...</a></li>";
              if ($page == $noPage) echo "<li class='active'><a href='#'>".$page."</a></li>";
              else echo "<li><a href='".$_SERVER['PHP_SELF']."?gabungan=".base64_encode('artikel_detail')."&page=".$page."'>".$page."</a></li>";
              $showPage = $page;
            }
        }

        if ($noPage < $jumPage) echo "<li><a href='".$_SERVER['PHP_SELF']."?gabungan=".base64_encode('artikel_detail')."&page=".($noPage+1)."'>Next >></a></li>";

        echo "</ul>";   ?>
</center>