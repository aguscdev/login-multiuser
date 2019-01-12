<?php include 'header.php'; ?>

<!-- <div class="container"> -->
<div class="contents">
 <!-- Content Wrapper. Contains page content -->
 	<div class="content-wrapper">
    <!-- Content Header (Page header) -->	
    <section class="content-header">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Transaksi Pengembalian</li>
            </ol>
        </div>
        <div class="panel panel-default">
               <div class="panel-heading">
                  <h4>Transaksi Pengembalian</h4>
               </div>
               <div class="panel-body">
                     <?php
                     include 'koneksi.php';
                     $vnopol=$_POST['cbmobil'];
                     $query = "SELECT * FROM mobil WHERE nopol='$vnopol'";
                     $hasil = mysql_query($query)or die(mysql_error());
                     $data  = mysql_fetch_array($hasil);
                     ?>
                     <form method="post" action="kembaliproses2.php">
                     <div class="form-group">
                        <b>Nopol &nbsp; : &nbsp; <?php echo $vnopol ?><b> <br>
                        <b>Mobil &nbsp; : &nbsp; <?php echo $data['namamobil']; ?><b> <br>
                        <label for="denda">Denda :</label>
                        <input type="text" class="form-control" id="denda" placeholder="" name="txtdenda">
                        <!-- Denda :<input type="text"name="txtdenda"> <br> -->
                        <input type="hidden" name="hiddennopol" value="<?php echo $vnopol?>">  
                     </div>
                     <input type="submit" value="Submit" class="btn btn-primary">
                     </form>
               </div>
          </div>
      </section>
      <br>
   </div>
</div>

   <?php include 'footer.php'; ?>