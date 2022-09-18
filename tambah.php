<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku Tanah</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
</head>
<body>
	<?php
	require "head.html";
	?>
	<div class="container">
		<h2>TAMBAH DATA BUKU TANAH</h2>	
		<form method="post" action="simpanTambahBt.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="no_hak">No Hak:</label>
				<input class="form-control" type="number" name="no_hak" id="no_hak" required>
			</div>
			<div class="form-group">
				<label for="tahun">Tahun:</label>
				<input class="form-control" type="text" name="tahun" id="tahun">
			</div>
			<div class="form-group">
				<label for="jenis">Jenis:</label>
				<input class="form-control" type="radio" name="jenis" id="jenis">
			</div>
			<div class="form-group">
				<label for="npk">Nama Penerima Hak:</label>
				<input class="form-control" type="text" name="npk" id="npk">
			</div>
			<div class="form-group">
				<label for="desa">Kel/Desa:</label>
				<input class="form-control" type="text" name="desa" id="desa">
			</div>
			<div class="form-group">
				<label for="kec">Kecamatan:</label>
				<input class="form-control" type="text" name="kec" id="kec">
			</div>
			<div class="form-group">
				<label for="kab">Kabupaten:</label>
				<input class="form-control" type="text" name="kab" id="kab">
			</div>
			<div class="form-group">
				<label for="rak">RAk:</label>
				<input class="form-control" type="text" name="rak" id="rak">
			</div>
			<div class="form-group">
				<label for="tingkat">Tingkat:</label>
				<input class="form-control" type="text" name="tingkat" id="tingkat">
			</div>
			<div class="form-group">
				<label for="blok">Blok:</label>
				<input class="form-control" type="text" name="blok" id="blok">
			</div>

			<!--
			<div class="form-group">
				<label for="foto">Foto</label> 
				<input class="form-control" type="file" name="foto" id="foto">
			</div>
			-->
			<div>		
				<button class="btn btn-primary" type="submit">Simpan</button>
			</div>
		</form>
	</div>	
</body>
</html>