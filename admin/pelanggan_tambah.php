<?php include 'header.php'; ?>


<div class="contents">
 <!-- Content Wrapper. Contains page content -->
 	<div class="content-wrapper">
    <!-- Content Header (Page header) -->	
    <section class="content-header">
 		
	 <div class="row">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Tambah Pelanggan Baru</li>
      </ol>
	</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Tambah Pelanggan Baru</h4>
			</div>
			<div class="panel-body">


				<form method="post" action="pelanggan_aksi.php">
					<div class="form-group">
						<label>Nopol</label>
						<input type="text" class="form-control" name="nopol" placeholder="Masukkan nopol ..">
					</div>	

					<div class="form-group">
						<label>Nama Mobil</label>
						<input type="text" class="form-control" name="namamobil" placeholder="Masukkan nama mobil ..">
					</div>	

					<div class="form-group">
						<label>Foto</label>
						<input type="file"  name="foto" accept="file_extension|audio/*/video/*|image/*|media_type">
					</div>

					<div class="form-group">
						<label>Harga</label>
						<input type="number" class="form-control" name="harga" placeholder="Masukkan harga ..">
					</div>

					<div class="form-group">
						<label>Status</label>
						<input type="text" class="form-control" name="status" placeholder="Masukkan status ..">
					</div>	

					<br/>

					<input type="submit" class="btn btn-primary" value="Simpan">	
				</form>


			</div>
		</div>
</section>
<br>
</div>

<?php include 'footer.php'; ?>