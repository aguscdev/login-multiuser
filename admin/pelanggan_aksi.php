<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$nopol = $_POST['nopol'];
$namamobil = $_POST['namamobil'];
$foto = $_POST['foto'];
$harga = $_POST['harga'];
$status = $_POST['status'];

// input data ke tabel pelanggan
mysql_query("INSERT INTO mobil values('','$nopol','$namamobil','$foto','$harga','$status')");

header("location:pelanggan.php");

?>