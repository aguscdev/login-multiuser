<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin </title>
</head>

<div class="contents">
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Kata Pengntar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <br>
    <div class="panel">
    <div class="panel-heading">
      <h4>Kata Pengantar</h4>
    </div>
    <section class="contents">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <strong>Assalamu'alaikum Wr. wb.</strong><br/><br/>
              Alhamdulillah dengan izin Allah SWT, saya telah menyelesaikan tugas individu untuk matakuliah bahasa pemrograman PHP. Di harapkan sekali masukan dari Siapapun untuk pengembangan Aplikasi ini Mengingat bayak sekali kekurangan di dalamnya. Oleh karena itu, saya selaku pengelola demo aplikasi ini meminta saran dan masukan.<br/>
              Atas Perhatiannya saya ucapkan terimakasih.<br/>
              <strong>Wasalamu'alaikum wr. wb.</strong> 

          <br>
          <br>

          <!-- Our Newsletter -->
          <form action="proses_input.php" method="POST">
            <div class=form-group>
              <label>Name</label>
              <input type="text" required="required" name="nama" placeholder="Name" class="form-control">
            </div>
            <div class="form-group">
              <label>E-Mail</label>
              <input type="text" name="email" required="required" placeholder="email" class="form-control">
            </div>
            <div class=form-group>
              <label>Message</label>
              <textarea type="text" name="message" rows="10" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class=form-group>
              <button class="btn btn-primary" type="submit">Send</button>
            </div>
           </form>
        </div>
        <div class="col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.312769801949!2d106.55810771446575!3d-6.22242586267421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe74eed2a5d1%3A0x10c2f57db3bc5d23!2sSTIE+%26+STMIK+Insan+Pembangunan!5e0!3m2!1sid!2sid!4v1545060110576" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          <br>
          STMIK Insan Pembangunan merupakan salah satu perguruan tinggi atau kampus yang berada di Kab. Tangerang.

          Sistem pengajaran perguruan tinggi pada kampus ini didukung oleh staf pengajar atau dosen dengan kualitas terbaik dan berkompeten dibidang keilmuannya, serta didukung dengan fasilitas penunjang pendidikan yang lengkap sesuai dengan jurusan / program studi yang ada.

          Selain dosen dan fasilitas, terdapat juga beasiswa bagi mahasiswa berprestasi, unit kegiatan mahasiswa (UKM) yang dapat mewadahi minat mahasiswa, grup riset (research group), group belajar, perpustakaan yang lengkap, organisasi kemahasiswaan, tim olahraga, hingga komunitas belajar. Dengan berbagai fasilitas tersebut, diharapkan mahasiswa keluaran perguruan tinggi ini dapat siap bekerja setelah lulus.

          Silahkan kunjungi kantor kampus atau perguruan tinggi terdekat ini untuk informasi lain seperti info beasiswa, biaya kuliah, syarat pendaftaran mahasiswa baru atau pendaftaran kuliah (registrasi), info akreditasi, list mata kuliah yang tersedia, hingga jadwal atau kalender perkuliahan. Silahkan hubungi kontak telepon untuk mendapat respon cepat atau Anda juga dapat mengakses website kampus secara online untuk melihat profil kampus, pengumuman yang ada, dan berita terkini mengenai kampus ini.
        </div>
      </div>
    </div>
  </section>
  </div>
  <br>
  </div>
</div>



<?php include 'footer.php'; ?>


