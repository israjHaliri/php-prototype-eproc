<html>
<head>
	 <link href="../assets/datepicker/themes/ui-lightness/ui.all.css" rel="stylesheet"  />
	
	<script src="../assets/datepicker/jquery-1.8.0.min.js"></script>
<script src="../assets/datepicker/ui/ui.core.js"></script>
<script src="../assets/datepicker/ui/ui.datepicker.js"></script>
<script src="../assets/datepicker/ui/i18n/ui.datepicker-id.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tglterbit").datepicker({
				dateFormat : "dd/mm/yy",
				changeMonth : true,
				changeYear : true
			});
		});
	</script>
</head>
<body style="font-size:85%;">
	<h3>Entry Data Buku</h3>
	<form method="POST" action="index.php">
		<table>
		<tr><td>Tgl. Terbit</td> <td>: <input name="tglterbit" id="tglterbit" type="text" /></td></tr>
		<tr><td colspan="2"><input type="submit" name="submit" value="Simpan" /></td></tr>
	</form>
</body>
</html>

<?php
	// Fungsi untuk Merubah susunan format tanggal
	function ubahformatTgl($tanggal) {
		$pisah = explode('/',$tanggal);
		$urutan = array($pisah[2],$pisah[1],$pisah[0]);
		$satukan = implode('-',$urutan);
		return $satukan;
	}
	
	// Ambil variabel dari form
	@$tglterbit = $_POST['tglterbit'];
	
	// Cara penggunaan function ubahTgl
	$ubahtgl = ubahformatTgl($tglterbit);
	
	$konek = mysqli_connect("localhost","root","","eproc");
	$query = "INSERT INTO lelang(date)
			VALUES('$ubahtgl')";
	$input = mysqli_query($konek, $query);
	
	if ($input){
		echo "Data Buku Berhasil Disimpan";
	}
	else {
		echo "Data Buku Gagal Disimpan";
	}
?>