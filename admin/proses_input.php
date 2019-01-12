<?php

$vnama = $_POST['nama'];
$vemail = $_POST['email'];
$vmessage = $_POST['message'];

// var_dump($vnama,$vemail,$vmessage);
// exit;
$koneksi = mysqli_connect("localhost","root","","tugasphp");

$query =mysqli_query($koneksi,"INSERT INTO tbkontak(nama,email,message) VALUES('$vnama','$vemail','$vmessage') ");

header('location:index.php');

?>