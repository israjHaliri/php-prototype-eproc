<?php

include('../config/connection.php');
$id = base64_decode($_REQUEST['id']);

$query = mysqli_query($conn,"SELECT * FROM pakta_integritas WHERE name_file='$id'") or die (mysqli_error('tabel tidak ditemukan'));
$data2  = mysqli_fetch_array($query);
unlink($data2['file']);
$del = mysqli_query($conn,"DELETE FROM pakta_integritas WHERE name_file='$id'");
header("Location:index.php");

?>