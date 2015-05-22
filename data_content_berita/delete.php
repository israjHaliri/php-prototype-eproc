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
	$cek = mysqli_query($conn,"SELECT id_berita FROM berita WHERE id_berita='$id'") or die(mysqli_error());
	if(mysqli_num_rows($cek) == 0)
	{
		echo '<script>window.history.back()</script>';
	}
	else
	{
		$del = mysqli_query($conn,"DELETE FROM berita WHERE id_berita='$id'");

		if($del)
		{
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