<?php
    include 'koneksi.php';

    //cek data apakah sudah tersimpan
    if ( isset($_POST["submit"]) ) {

        $username = $_POST["username"];
        $sandi = $_POST["sandi"];

        $admin_login = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username=('$username' OR 'email')  AND sandi='$sandi'");
        
        if(mysqli_affected_rows($koneksi) > 0 ) {
            echo "
                <script>
                    alert('login berhasil');
                    document.location.href = 'home.php';
                </script>
            ";
        }else {
            echo"
            <script>
                alert('login gagal');
                document.location.href = 'admin.php';
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

    <title>Login Admin</title>
</head>
<body>

        <div class="container">
        <h2 class="text-white"><i class="fas fa-users-cog"></i> Admin Login</i></h2>
            <form action="" method="post">
                <table class="table table-dark align-content-center" >
                    <thead>
                        <tr>
                            <td for="username">
                                <div class="input-group flex-nowrap"><i class="fas fa-user-cog mr-2 p-1"></i>
                                <input type="text" class="form-control" placeholder="Masukkan username admin" aria-label="Masukkan username admin" aria-describedby="addon-wrapping" name="username" id="username">
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td for="sandi">
                                <div class="input-group flex-nowrap"><i class="fas fa-unlock mr-3 p-1"></i>
                                <input type="text" class="form-control" placeholder="Masukkan password admin" aria-label="Masukkan password admin" aria-describedby="addon-wrapping" name="sandi" id="sandi">
                            </div>
                            </td>
                        </tr>
                    </thead>
                </table>               
                <button type="submit" name="submit" class="btn btn-dark">Masuk <i class="fas fa-sign-in-alt"></i></button>
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