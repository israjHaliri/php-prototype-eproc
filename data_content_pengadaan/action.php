<?php

include 'config.php';

$tanggal= $_POST['tanggal']; //mengambil data input dari form

list($m, $d, $y) = explode ( '/', $_POST['tanggal']); // membuat tiga variabel didalam fungsi list, setelah dilakukan explode data tanggal.

if (isset($tanggal)) { // jika variabel tanggal terisi
	$select = "INSERT INTO input SET tanggal='$d', bulan='$m', tahun='$y'"; //melakukan select insert
	$query = mysql_query($select); // melakukan query ke database
	if ($query) { // jika query berhasil
		echo "data berhasil dimasukkan, silahkan cek database";
	} else { // jika query gagal
		echo "data gagal dimasukkan". mysql_error();
	}
} else { // jika variabel tanggal tidak terisi
	echo "Silahkan isi data";
}
?>




<?php
	// Fungsi untuk Merubah susunan format tanggal
	function ubahformatTgl($tanggal) {
		$pisah = explode('/',$tanggal);
		$urutan = array($pisah[2],$pisah[1],$pisah[0]);
		$satukan = implode('-',$urutan);
		return $satukan;
	}
	
	// Ambil variabel dari form
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$tglterbit = $_POST['tglterbit'];
	
	// Cara penggunaan function ubahTgl
	$ubahtgl = ubahformatTgl($tglterbit);
	
	$konek = mysqli_connect("localhost","root","","latihan");
	$query = "INSERT INTO buku(judul,pengarang,tglterbit)
			VALUES('$judul','$pengarang','$ubahtgl')";
	$input = mysqli_query($konek, $query);
	
	if ($input){
		echo "Data Buku Berhasil Disimpan";
	}
	else {
		echo "Data Buku Gagal Disimpan";
	}
?>

<html>
<head>
	<link type="text/css" rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />
	
	<script src="development-bundle/jquery-1.8.0.min.js"></script>
	<script src="development-bundle/ui/ui.core.js"></script>
	<script src="development-bundle/ui/ui.datepicker.js"></script>
	<script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tglterbit").datepicker({
				dateFormat : "dd-mm-yy",
				changeMonth : true,
				changeYear : true
			});
		});
	</script>
</head>
<body style="font-size:85%;">
	<h3>Entry Data Buku</h3>
	<form method="POST" action="simpan_buku.php">
		<table>
		<tr><td>Judul</td> <td>: <input name="judul" type="text" size=45 /></td></tr>
		<tr><td>Pengarang</td> <td>: <input name="pengarang" type="text" size=35 /></td></tr>
		<tr><td>Tgl. Terbit</td> <td>: <input name="tglterbit" id="tglterbit" type="text" /></td></tr>
		<tr><td colspan="2"><input type="submit" name="submit" value="Simpan" /></td></tr>
	</form>
</body>
</html>