<?php include 'header.php'; ?>


<div class="contents">
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <section class="content-header">
            
        <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Transaksi Sukses</li>
        </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Transaksi Sukses</h4>
            </div>
            <div class="panel-body">


<br>
<div class="col-md-8 col-md-offset-2">

<?php
include 'koneksi.php';
$today = date("Ymd");


$vnopol = $_POST['hiddennopol'];
$vharga = $_POST['hiddenharga'];
$vjumlah = $_POST['txtjumlah'];
$vtotal=$vharga*$vjumlah;
// cari id transaksi terakhir yang berawalan tanggal hari ini
$query = "SELECT max(idTransaksi) AS last FROM transaksi WHERE idTransaksi LIKE '$today%'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$lastNoTransaksi = $data['last'];
$lastNoUrut = substr($lastNoTransaksi, 8, 4); 
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $today.sprintf('%04s', $nextNoUrut);

// proses simpan data transaksi dengan nomor transaksi yang baru
$query = "INSERT INTO transaksi (idTransaksi, nopol, lama, total)
          VALUES ('$nextNoTransaksi', '$vnopol', '$vjumlah', '$vtotal')";
$hasil = mysql_query($query);
if ($hasil)
{
    // jika proses simpan transaksi sukses, maka tampilkan nomor transaksi dan data pembayaran
    $query2 = "SELECT * FROM mobil WHERE nopol = '$vnopol'";
    $hasil2 = mysql_query($query2);
    $data2  = mysql_fetch_array($hasil2);

    $vstatus='disewa';
    $query3 = "update mobil set status='$vstatus' WHERE nopol = '$vnopol'";
    $hasil3 = mysql_query($query3);
    
?>
   
   <h3>Transaksi:<?php echo $nextNoTransaksi; ?> </h3>
   <h3>NOPOL:<?php echo $vnopol; ?></h3> 
   <h3>MOBIL:<?php echo $data2['namamobil']; ?></h3> 
   <h3>Harga per Hari:<?php echo $data2['harga']; ?></h3>
   <h3>Lama sewa (hari):<?php echo $vjumlah; ?></h3>
   <h3>Total Bayar:<?php echo $vtotal; ?></h3>

<?php
}
else echo "Transaksi Gagal";
?>   
<a href="sewa.php">Kembali</a>

</div>

      </div>
        </div>
    </section>
    <br>
</div>
<?php include 'footer.php'; ?>