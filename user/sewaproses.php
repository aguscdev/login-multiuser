<?php include 'header.php'; ?>

<?php
include 'koneksi.php';
$query = "SELECT * FROM mobil WHERE nopol='$_GET[vnopol]'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$vstatus=$data['status'];
if ($vstatus=='disewa')
{ echo "Mobil sedang di sewa, silahkan cari mobil yang lain <button><a href='sewa.php'>kembali</button></a>"; }
else
{
?>

<div class="contents">
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <section class="content-header">
            
        <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Transaksi</li>
        </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Transaksi</h4>
            </div>
            <div class="panel-body">


<br>
<div class="col-md-8 col-md-offset-2">
<!-- <div class="panel">
    <div class="panel-heading">
        <h4>Transaksi</h4>
	</div> -->
	<div class="panel-body">
   <form method="post" action="sewaproses2.php">
   <h3>Nopol :<?php echo $data['nopol']; ?></h3>
   <h3>Mobil :<?php echo $data['namamobil']; ?></h3>
   <h3>Harga per Hari :<?php echo $data['harga']; ?></h3>
   <h3>Lama Sewa :<input type="text"name="txtjumlah"></h3>
   <?php $vnopol=$data['nopol']; ?>
   <?php $vharga=$data['harga']; ?>
   <input type="hidden" name="hiddennopol" value="<?php echo $vnopol?>">
   <input type="hidden" name="hiddenharga" value="<?php echo $vharga?>">   
   <input type="submit" class="btn btn-primary" value="Submit">
   </form>
</div>
<!-- </div>
</div> -->
</div>

      </div>
        </div>
    </section>
    <br>
</div>

<?php
}
?>

<?php include 'footer.php'; ?>