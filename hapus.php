<?php

if (isset($_GET['kode'])) {
	require 'koneksi.php';
	$kode = $_GET['kode'];
	$kode = mysqli_real_escape_string($link, $kode);
	$query = "DELETE from tabel_ganjil where Id_009=$kode";
	$hasil_query = mysqli_query($link, $query);
	if ($hasil_query) {
		header('location:index.php');
	}else{
		die("Query Error : " . mysqli_error($link));
	}
}