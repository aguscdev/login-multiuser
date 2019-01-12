<?php include 'header.php' ?>

<!-- <div class="container"> -->
<div class="contents">
 <!-- Content Wrapper. Contains page content -->
 	<div class="content-wrapper">
    <!-- Content Header (Page header) -->	
    <section class="content-header">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Data Mobil Transaksi Pengembalian</li>
            </ol>
        </div>
        <div class="panel panel-default">
               <div class="panel-heading">
                  <h4>Transaksi Pengembalian Berhasil</h4>
               </div>
               <div class="panel-body">

<?php
include 'koneksi.php';
$today= date("Ymd");
$vnopol = $_POST['hiddennopol'];
$vdenda = $_POST['txtdenda'];
// cari id transaksi terakhir yang berawalan tanggal hari ini
$query = "SELECT max(idTransaksi) AS last FROM trankembali WHERE idtransaksi LIKE '$today%'";
$hasil = mysql_query($query)or die(mysql_error());
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
$lastNoUrut = substr($lastNoTransaksi, 8, 4); 
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $today.sprintf('%04s', $nextNoUrut);
// proses simpan data transaksi dengan nomor transaksi yang baru
$query = "INSERT INTO trankembali (idtransaksi, nopol, denda)VALUES ('$nextNoTransaksi','$vnopol','$vdenda')";
$hasil = mysql_query($query);
if ($hasil)
{
    // jika proses simpan transaksi sukses, maka tampilkan nomor transaksi dan data pembayaran
    $query2 = "SELECT * FROM mobil WHERE nopol = '$vnopol'";
    $hasil2 = mysql_query($query2);
    $data2  = mysql_fetch_array($hasil2);

    $vstatus='ada';
    $query3 = "update mobil set status='$vstatus' WHERE nopol = '$vnopol'";
    $hasil3 = mysql_query($query3);
    
?>

  
   
   <h3>Transaksi:<?php echo $nextNoTransaksi; ?> </h3>
   <h3>NOPOL:<?php echo $vnopol; ?> </h3>
   <h3>MOBIL:<?php echo $data2['namamobil']; ?> </h3>
   <h3>Denda:<?php echo $vdenda; ?> </h3>
<?php
}
else echo "Transaksi Gagal";
?>   
<a href="sewa.php">Kembali</a>

</div>
          </div>
      </section>
      <br>
   </div>
</div>



<?php include 'footer.php' ?>