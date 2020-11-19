<?php
    include 'koneksi.php';

    //cek data apakah sudah tersimpan
    if ( isset($_POST["submit"]) ) {

        $nama_cs = $_POST["nama_cs"];

        $login = mysqli_query($koneksi, "SELECT * FROM customer WHERE nama_cs=('$nama_cs' OR 'no_hp') ");
        
        if(mysqli_affected_rows($koneksi) > 0 ) {
            echo "
                <script>
                    alert('login berhasil');
                    document.location.href = 'https://wa.me/qr/AAOH764MYGQEL1';
                </script>
            ";
        }else {
            echo"
            <script>
                alert('login gagal');
                document.location.href = 'logincust.php';
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

    <title>customer</title>
</head>
<body>

        <div class="container">
        <h5 class="text-white"> <i class="fas fa-sign-in-alt"></i> Login pelanggan<h5>
        <p class="text-white"> Jika anda belum berlangganan, anda tidak akan bisa memesan. Silahkan klik tombol dibawah untuk berlangganan </p><br>
        <a href="customer.php"><button type="submit" name="submit" class="btn btn-dark">Daftar <i class="fas fa-sign-in-alt"></i></button></a><p></p>
            <form action="" method="post">
                <table class="table table-dark align-content-center" >
                    <thead>
                        <tr>
                            <td for="nama_cs">
                                <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="Masukkan nama atau no hp pelanggan" aria-label="Masukkan nama" aria-describedby="addon-wrapping" name="nama_cs" id="nama_cs" required>
                            </div>
                            </td>
                    </thead>
                </table>               
                <a href="https://wa.me/qr/AAOH764MYGQEL1"><button type="submit" name="submit" class="btn btn-dark">Pesan <i class="fas fa-sign-in-alt"></i></button></a>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
    
</body>
</html>