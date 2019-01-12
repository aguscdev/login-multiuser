<?php
$nopol = $_POST['nopol'];
$namamobil = $_POST['namamobil'];
$foto = $_POST['foto'];
$harga = $_POST['harga'];
$status = $_POST['status'];
$conn=mysql_connect("localhost","root","")or die
("koneksi gagal");
mysql_select_db ("perpusdb",$conn);
$strSQL="update buku set namamobil='$namamobil', foto='$foto', harga='$harga', status'$status' where nopol='$nopol'";
$qry=mysql_query ($strSQL,$koneksi) or die ("query salah");
?>
Data sudah diupdate
<a href="pelanggan.php">Klik disini</a>
