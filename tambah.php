<?php

session_start();
if (empty($_SESSION['masuk'])) {
    header('location: login.php');
}

require 'koneksi.php';
if (isset($_POST['btnsubmit'])) {
	
	$Id_009 = htmlentities(strip_tags($_POST['txtid']));
	$NIM_009 = htmlentities(strip_tags($_POST['txtnim']));
	$Nama_009 = htmlentities(strip_tags($_POST['txtnama']));
	$Alamat_009 = htmlentities(strip_tags($_POST['txtalamat']));

	$Id_009 = mysqli_real_escape_string($link, $Id_009);
	$NIM_009 = mysqli_real_escape_string($link, $NIM_009);
	$Nama_009 = mysqli_real_escape_string($link, $Nama_009);
	$Alamat_009 = mysqli_real_escape_string($link, $Alamat_009);

	$query = "INSERT INTO tabel_ganjil VALUES ( '$Id_009', '$NIM_009', '$Nama_009', '$Alamat_009')";
	$hasil_query = mysqli_query($link, $query);
	if ($hasil_query) {
		header('location:index.php');
	}else{
		die("Query Error : " . mysqli_error($link));
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
		<div>
			<h4>Form Tambah Data</h4>
		</div>
			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="Id_009" >ID </label>
						<input type="text" name="txtid" id="Id_009" class="form-control" required>
					</div>
					<div>
						<label for="NIM_009">NIM</label>
						<input type="text" name="txtnim" id="NIM_009" class="form-control" >
					</div>
					<div>
						<label for="Nama_009">Nama</label>
						<input type="text" name="txtnama" id="Nama_009"  class="form-control">
					</div>
					<div>
						<label for="alamat_009">Alamat</label>
						<textarea name="txtalamat" id="isi" cols="100" rows="3"class="form-control" ></textarea>
					</div>
					<input type="submit" name="btnsubmit" value="Simpan" class="btn btn-warning mt-1">
					
				</form>
			</div>
</body>
</html>