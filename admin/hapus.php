<?php
include '../koneksi';

$d = $_GET['id_transaksi']

mysql_query("DELETE FROM mobil WHERE id_transaksil='$d'") or die(mysql_error());

header("location:pelanggan.php?pesan=hapus");

?>