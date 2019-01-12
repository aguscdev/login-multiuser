<?php include 'header.php'; ?>

<!-- <div class="container"> -->
<div class="contents">
 <!-- Content Wrapper. Contains page content -->
 	<div class="content-wrapper">
    <!-- Content Header (Page header) -->	
    <section class="content-header">
 		
	 <div class="row">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Data Mobil</li>
      </ol>
	</div>
    
	<!-- <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Data Mobil</h4>
		</div>
		<div class="panel-body">
			<a href="" class="btn btn-sm btn-info pull-right"><i class="fa fa-pencil-square-o"></i>Tambah</a>
				<br>
				<br>
				<table class="table table-bordered table-striped">
					<tr>
						<th width="5%">No</th>
						<th>Nopol</th>
						<th>Nama Mobil</th>
						<th width="10%">foto</th>
						<th>Harga Sewa</th>
						<th>Status</th>
						<th width="15%" class="text-center">Aksi</th>
					</tr>
					<?php 
					// koneksi database
					include '../koneksi.php';

					// mengambil data pelanggan dari database
					$data = mysqli_query($koneksi,"select * from mobil");
					$no = 1;
					// mengubah data ke array dan menampilkannya dengan perulangan while
					while($d=mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['nopol']; ?></td>
							<td><?php echo $d['namamobil']; ?></td>
							<td class="text-center"><img width=200 height=120 src="<?php echo $d['foto']; ?>"></td>
							<td><?php echo $d['harga']; ?></td>
							<td><?php echo $d['status']; ?></td>
							<td class="text-center">
								<a href="" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Edit</a>
								<a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</a>
							</td>
						</tr>
						<?php 
					}
					?>
				</table>
		</div>
	</div>
	</section>
<!-- </div> -->
<br>
</div>
<?php include 'footer.php'; ?>