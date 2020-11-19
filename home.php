<?php
    include 'koneksi.php';

    $datamb = mysqli_query($koneksi,"SELECT * FROM mobil");
    $jumlahmb = mysqli_num_rows($datamb);

    $datasp = mysqli_query($koneksi,"SELECT * FROM sopir");
    $jumlahsp = mysqli_num_rows($datasp);

    $data_cs = mysqli_query($koneksi, "SELECT * FROM customer");

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


    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <a class="navbar-brand text-white" href="#">Selamat Datang Admin | <b>RENTAL MOBIL SIKE</b> </a>
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
                    <a href="admin.php"><i class="fas fa-sign-out-alt text-light mr-3 p-1" data-toggle="tooltip" title="Sign Out"></i></a>
                </h5>
            </div>
        </div>
      </nav>

      <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark pr-3 pt-3">
            <ul class="nav flex-column ml-3 mb-3">
                <li class="nav-item">
                    
                    <a class="nav-link active text-light" href="home.php"><i class="fas fa-home"></i> Home</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="mobil.php"><i class="fas fa-car"></i> Daftar Mobil</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="sopir.php"><i class="fas fa-user-tie"></i> Daftar Sopir</a><hr class="bg-secondary">
                </li>               
            </ul>
        </div>
        <div class="col-md-10 p-5">
               <h2 class="text-white"><i class="fas fa-home p-4 pt-2"> Home</i></h2>

               <div class="row text-white">
                    <div class="card ml-5 mt-5 mb-5 bg-dark" style="width: 18rem;">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <h5 class="card-title">Jumlah Mobil <br>
                                <b>
                                    <?php echo $jumlahmb; ?>
                                </b>
                            </h5>
                            <a href="mobil.php" class="btn btn-outline-light"> <i class="fas fa-angle-double-right"></i> Lihat Detail</a>
                        </div><br>
                    </div>
                    <div class="card ml-5 mt-5 mb-5 bg-dark" style="width: 18rem;">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-user-tie mr-2"></i>
                            </div>
                            <h5 class="card-title">Jumlah Sopir <br>
                                <b>
                                    <?php echo $jumlahsp; ?>
                                </b>
                            </h5>
                            <a href="sopir.php" class="btn btn-outline-light"> <i class="fas fa-angle-double-right"></i> Lihat Detail</a>
                        </div>
                    </div>
                    <div class="col-md-10 p-5">
                    <h5 class="text-white"> Data Customer Berlangganan</i></h5>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                <?php while ( $row_cs = mysqli_fetch_assoc($data_cs) ) : ?>
                                <tr>
                                    <th><?= $i ; ?></th>
                                    <td><?= $row_cs["nama_cs"]; ?></td>
                                    <td><?= $row_cs["alamat"]; ?></td>
                                    <td><?= $row_cs["no_hp"]; ?></td>
                                    <td>
                                        <a href="hapuscs.php?id_cs=<?= $row_cs["id_cs"]; ?>" class="btn-outline-light p-2 rounded" onclick=" return confirm('Apakah anda yakin ingin menghapus ?')">
                                        <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus"></i>
                                    </td>
                                </tr>
                                <?php $i++ ; ?>
                                <?php endwhile ; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-bottom p-0">
            <p class="text-white">Terima kasih telah berkunjung</p>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 ml-auto">
                        <a href="utama.php"><i class="fas fa-home text-light mr-3 p-1" data-toggle="tooltip" title="halaman user"></i></a>
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

