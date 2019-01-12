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
                <form action="kembaliproses.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nomor Polisi :</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="cbmobil">
                            <option value="">--pilih--</option>
                            <?php
                            include 'koneksi.php';
                            $query="select * from mobil";
                            $hasil=mysql_query ($query);
                            while($baris=mysql_fetch_array($hasil))
                            {
                            echo "<option value='$baris[0]'>$baris[0]</option>" ;
                            } 
                            ?>
                        </select>
                    </div>
                    <input type="submit" value="Proses" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </section>
    <br>
</div>

<?php include 'footer.php'; ?>