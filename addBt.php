<!DOCTYPE html>
<html>
<head>
	<title>E-Arsip::Tambah Data Buku Tanah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>
	<?php
	require "head.html";
	?>
	<div class="utama">		
		<br><br><br>		
		<h3>TAMBAH DATA BUKU TANAH</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form method="post" action="sv_addBt.php" enctype="multipart/form-data">
		<div class="form-group">
				<label for="no_hak">No Hak:</label>
				<input class="form-control" type="number" name="no_hak" id="no_hak" required>
			</div>
			<div class="form-group">
				<label for="tahun">Tahun:</label>
				<input class="form-control" type="text" name="tahun" id="tahun">
			</div>
			<div class="form-group">
			<p>Pilih Jenis Buku tanah:</p>
				<input type="radio" id="jenis1" name="jenis1">
				<label for="jenis1">Hak Milik(SHM)</label><br>
				<input type="radio" id="jenis2" name="jenis2">
				<label for="jenis2">Hak Guna Usaha(HGU)</label><br>
				<input type="radio" id="jenis3" name="jenis3">
				<label for="jenis3">Hak Pakai</label><br>
				<input type="radio" id="jenis4" name="jenis4">
				<label for="jenis4">Hak Guna Bangunan(SHGB)</label><br>
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
				<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
			</div>
		</form>
	</div>
	<!--
	<script>
		$(document).ready(function(){
			$('#butsave').on('click',function(){			
				$('#butsave').attr('disabled', 'disabled');
				var nim 	= $('#nim').val();
				var nama	= $('#nama').val();
				var email 	= $('#email').val();
				
				$.ajax({
					type	: "POST",
					url		: "sv_addMhs.php",
					data	: {
								nim:nim,
								nama:nama,
								email:email
							  },
					contentType	:"undefined",					
					success : function(dataResult){						
						alert('success');
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html(dataResult);	
					}	   
				});
			});
		});
	</script>
	-->	
</body>
</html>