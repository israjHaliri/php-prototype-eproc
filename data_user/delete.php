<?php
session_start();

if(!isset($_SESSION['admin'])){

	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../public/index.php";</script>';
}
?>
<?php
if(isset($_REQUEST['id']))
{
	include('../config/connection.php');
	$id = base64_decode($_REQUEST['id']);
	$cek = mysqli_query($conn,"SELECT user_id FROM user WHERE user_id='$id'") or die(mysqli_error());
	if(mysqli_num_rows($cek) == 0)
	{
		echo '<script>window.history.back()</script>';
	}
	else
	{
		$query = mysqli_query($conn,"SELECT * FROM berita WHERE id_berita='$id'") or die (mysql_error('tabel tidak ditemukan'));
		$data  = mysqli_fetch_array($query);
		$del = mysqli_query($conn,"DELETE FROM user WHERE user_id='$id'");
		if($del)
		{
			unlink("../assets/image/".$data['image']);
			header("Location:index.php");
		}
		else
		{
			echo '<script language="javascript">alert("Gagal menghapus data!"); document.location="index.php";</script>';
		}	
	}
}
else
{
	echo '<script>window.history.back()</script>';
}
?>