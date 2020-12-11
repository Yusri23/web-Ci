<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: blue">
		<a href="" class="navbar-brand">
			TugasWeb
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('CController')?>" class="nav-link active">Beranda</a>
			<a href="<?= site_url('CController/tambah')?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Dhani</a>
			
		</div>
	</nav>

	<div class="alert alert-primary text-center mt-2 shadow">
		Data Mahasiswa dan Jurusan
	</div>
<div class="container">
	

	<table class="table table-bordered table-striped table-hover ">
		
		<tr class="text-center">
			<th>Id</th>
			<th>Jurusan</th>
			<th>Kelas</th>
			<th>Isi</th>
			
		</tr>
		<?php foreach ($data_table as $key ): ?>
		<tr>
			
			<td><?= $key->id_09 ?></td>
			<td><?= $key->kolom_jurusan ?></td>
			<td><?= $key->kolom_kelas ?></td>
			<td><?= $key->kolom_isi ?></td>
			

			</td>
		</tr>
	<?php endforeach ?>

	</table>
</div>
</body>
</html>