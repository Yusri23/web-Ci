<?php
$hostname   = 'localhost';
$user   = 'root';
$pass   = '';
$db     = 'uas_ganjil';

$link = mysqli_connect($hostname, $user, $pass, $db);

if (!$link) {
	die('Koneksi Gagal - ' . mysqli_connect_error());
}
 