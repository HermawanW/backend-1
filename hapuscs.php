<?php
    include 'koneksi.php';

    $id_cs = $_GET["id_cs"];

    $hapus_cs = "DELETE FROM customer 
                    WHERE id_cs = $id_cs ";

    if ( mysqli_query($koneksi, $hapus_cs) > 0 ) {
        echo "
                <script>
                    alert('Data berhasil dihapus');
                    document.location.href = 'home.php';
                </script>
            ";
        }else {
            echo"
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'home.php';
            </script>
            ";
        }


?>