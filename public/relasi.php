
<?php 
	include('../config/connection.php');
// $rowset = mysqli_query($conn,"SELECT * FROM 'catalog' JOIN pengadaan ON 'catalog'.'pengadaan_id'='pengadaan'.'id_pengadaan'
//  JOIN berita ON 'catalog'.'berita_id'='berita'.'id_berita' 
//  JOIN lelang ON 'catalog'.'lelang_id'='lelang'.'id_lelang' ORDER BY id_catalog DESC") or die (mysqli_error($conn));

// $rowset = mysqli_query($conn,"select * from catalog c 
// inner join berita b on c.berita_id=b.id_berita") or die (mysqli_error()); //satu ke satu

$rowset = mysqli_query($conn,"select * from catalog c 
inner join berita b on c.berita_id=b.id_berita
inner join lelang l on c.lelang_id=l.id_lelang
inner join pengadaan p on c.pengadaan_id=p.id_pengadaan LIMIT 3") or die (mysqli_error()); //satu ke satu
while($mk = mysqli_fetch_array($rowset)){
				?>
				<tr>
					<td style="border-bottom:1px solid #000;border-right:1px solid #000"><?php echo $mk['id_berita'];?></td>
					<td style="border-bottom:1px solid #000;border-right:1px solid #000"><?php echo $mk['id_pengadaan'];?></td>
					<td style="border-bottom:1px solid #000;border-right:1px solid #000"><?php echo $mk['id_lelang'];?></td>
				</tr>
				<?php }?>