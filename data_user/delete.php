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
	$cek = mysqli_query($conn,"SELECT id_user FROM user WHERE id_user='$id'") or die(mysqli_error($conn));
	if(mysqli_num_rows($cek) == 0)
	{
		echo '<script>window.history.back()</script>';
	}
	else
	{
		$query = mysqli_query($conn,"SELECT * FROM berita WHERE id_berita='$id'") or die (mysql_error('tabel tidak ditemukan'));
		$data  = mysqli_fetch_array($query);
		$del = mysqli_query($conn,"DELETE FROM user WHERE id_user='$id'");
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