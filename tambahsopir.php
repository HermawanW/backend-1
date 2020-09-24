<?php
    include 'koneksi.php';

    //cek data apakah sudah tersimpan
    if ( isset($_POST["submit"]) ) {

        $nama = $_POST["nama"];
        $umur = $_POST["umur"];
        $jk = $_POST["jk"];

        $tambahsp = "INSERT INTO sopir 
                    VALUES 
                    ('', '$nama', '$umur', '$jk')";
        mysqli_query($koneksi, $tambahsp);
        
        if(mysqli_affected_rows($koneksi) > 0 ) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'sopir.php';
                </script>
            ";
        }else {
            echo"
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'sopir.php';
            </script>
            ";
        }
    }

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

    <title>Tambah Mobil</title>
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
                    <a href="login.php"><i class="fas fa-sign-out-alt text-light mr-3 p-1" data-toggle="tooltip" title="Sign Out"></i></a>
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
            <form action="" method="post">
                <table class="table table-dark" >
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td for="nama">
                                <input type="text" name="nama" id="nama"> 
                            </td>
                            <td for="umur">
                                <input type="text" name="umur" id="umur"> 
                            </td>
                            <td for="jk">
                                <input type="text" name="jk" id="jk"> 
                            </td>
                        </tr>
                    </tbody>
                </table>               
                <button type="submit" name="submit" class="btn btn-dark">Tambah data <i class="fas fa-user-plus"></i></button>
            </form>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-bottom p-0">
          <p class="text-white">Terima kasih telah berkunjung</p>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 ml-auto">
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