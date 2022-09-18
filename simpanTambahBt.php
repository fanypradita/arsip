<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$no_hak=$_POST["no_hak"];
$tahun=$_POST["tahun"];
$jenis=$_POST["jenis"];
$npk=$_POST["npk"];
$desa=$_POST["desa"];
$kec=$_POST["kec"];
$kab=$_POST["kab"];
$rak=$_POST["rak"];
$tingkat=$_POST["tingkat"];
$blok=$_POST["blok"];
$uploadOk=1;

    if ($uploadOk == 0)  {
        //membuat query
		$sql="insert mhs values('','$no_hak','$tahun','$jenis','$npk','$desa','$kec','$kab','$rak','$tingkat','$blok')";
		mysqli_query($koneksi,$sql);
		header("location:tambah.php");
		//echo "File ". basename( $_FILES["foto"]["name"]). " berhasil diupload";
    } else {
        echo "Maaf, terjadi kesalahan saat mengupload file foto<br>";
    }

?>