<?php
    include 'koneksi.php';

    $id_mobil = $_GET["id_mobil"];

    $hapus_mobil = "DELETE FROM mobil 
                    WHERE id_mobil = $id_mobil ";

    if ( mysqli_query($koneksi, $hapus_mobil) > 0 ) {
        echo "
                <script>
                    alert('Data berhasil dihapus');
                    document.location.href = 'mobil.php';
                </script>
            ";
        }else {
            echo"
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'mobil.php';
            </script>
            ";
        }


?>