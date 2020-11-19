<?php
    include 'koneksi.php';

    $datamb = mysqli_query($koneksi,"SELECT * FROM mobil");

    $datasp = mysqli_query($koneksi,"SELECT * FROM sopir");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">


    <title>Halaman Utama</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-white" href="#">Selamat Datang | <b>RENTAL MOBIL SIKE</b> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <input class="form-dark mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            
            <div class="icon ml-4">
                <h5>
                    <i class="far fa-envelope text-light mr-3 mt-2 p-1" data-toggle="tooltip" title="Pesan"></i>
                    <i class="far fa-bell text-light mr-3 p-1" data-toggle="tooltip" title="Notifikasi"></i>
                    <a href="customer.php"><i class="fas fa-sign-in-alt text-light mr-3 p-1" data-toggle="tooltip" title="berlanggan"></i></a>
                </h5>
            </div>
        </div>
        </nav>
        
        
        
      
      <div class="md-10 p-5" ><img src="img/rental.jpg" class="img-fluid "  width="1500px" alt="Responsive image">
        <div class="bg-white">
            
            <br><h3>Selamat Datang di Website</h3>
            <h3>Rental Mobil sike</h3>
            
                <p>Bingung ingin bepergian tidak ada kendaraan yang memadai ?
                Ingin pakai kendaraan umum tapi ribet dan mahal ?
                Tenang saja  kini telah hadir <b>jasa rental mobil Sike</b
                > yang siap menemani perjalanan Anda dan keluarga.
                <b>Rental Mobil Sike</b> merupakan salah satu penyedia <b>jasa rental mobil</b>
                    yang sudah profesional dan terpercaya dengan berbagai armada yang tersedia untuk Anda. <b>Rental Mobil Sike</b>
                    menyediakan jasa penyewaan mobil untuk wilayah <b>Pasuruan</b> dan sekitarnya,
                    dengan berbagai pilihan armada yang dapat Anda pesan mulai dari<b> Hiace sampai sigra </b>
                </p>
        </div>



      <?php while ( $row_mb = mysqli_fetch_assoc($datamb) ) : ?>
        <div class="card m-5 bg-dark" style="max-width: 1500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="img/<?php echo $row_mb['mobil']; ?>" width="400px" height="100px">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-white">
                        <h3 class="card-title"><?= $row_mb["merek"]; ?> <?= $row_mb["nama_mb"]; ?></h3>
                        <p class="card-text">Berikut keterangan singkat mengenai mobil disamping</p>
                        <p class="card-text"><b>Nama Mobil : <?= $row_mb["nama_mb"]; ?></b> </p>
                        <p class="card-text"><b>Merek Mobil : <?= $row_mb["merek"]; ?></b> </p>
                        <p class="card-text"><b>Plat Mobil : <?= $row_mb["plat_mb"]; ?></b> </p>
                    </div>
                </div>
                <a href="logincust.php" class="btn btn-outline-light">  Pesan <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
            <?php endwhile ; ?>
        </div>


        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-bottom p-0">
          <p class="text-white">Terima kasih telah berkunjung</p>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 ml-auto">
                        <a href="admin.php"><i class="fas fa-users-cog text-light mr-3 p-1" data-toggle="tooltip" title="halaman admin"></i></a>
                        <a href="#"><i class="fab fa-instagram text-light mr-3 mt-2 p-1"> <br> Follow</i></a>
                        <a href="#"><i class="fab fa-facebook-f text-light mr-3 mt-2 p-1"> <br> Like</i></a>
                </form>
            </div>
        </nav>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>

