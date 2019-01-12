<?php
include 'header.php';
include 'koneksi.php';
$query="select * from mobil";
$hasil=mysql_query ($query); 
?>

<div class="contents">
 <!-- Content Wrapper. Contains page content -->
 	<div class="content-wrapper">
    <!-- Content Header (Page header) -->	
    <section class="content-header">
            
        <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Data Mobil Sewa</li>
        </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Data Mobil Sewa</h4>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <tr><th>NOPOL</th><th>MOBIL</th><th width="10%">FOTO</th><th>HARGA</th><th>STATUS</th><td>AKSI</th></tr>
                    <?php
                    while($baris=mysql_fetch_array($hasil))
                    {
                    echo "<tr>";
                    echo "<td>".$baris["nopol"]."</td>";
                    echo "<td>".$baris["namamobil"]."</td>";
                    echo "<td><img width=200 height=120 src=".$baris["foto"]."></td>";
                    echo "<td>".$baris["harga"]."</td>";
                    echo "<td>".$baris["status"]."</td>";

                    echo "<td><a href=sewaproses.php?vnopol=".$baris["nopol"].">Sewa</a></td>";
                    echo "</tr>";
                    }  ?>
                </table>
                <a href="#" class="btn btn-default btn-lg">
                      <span class="glyphicon glyphicon-print"></span> Print 
                    </a>
                    <a href="#" class="btn btn-info btn-lg">
                      <span class=""></span> Pdf 
                    </a>
                    <a href="#" class="btn btn-success btn-lg">
                      <span class=""></span> export
                    </a>
            </div>
        </div>
    </section>
    <br>
</div>

<?php include 'footer.php'; ?>