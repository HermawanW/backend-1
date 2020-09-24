<?php
    include 'koneksi.php';

    $id_sp = $_GET["id_sp"];

    $hapus_sp = "DELETE FROM sopir 
                    WHERE id_sp = $id_sp ";

    if ( mysqli_query($koneksi, $hapus_sp) > 0 ) {
        echo "
                <script>
                    alert('Data berhasil dihapus');
                    document.location.href = 'sopir.php';
                </script>
            ";
        }else {
            echo"
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'sopir.php';
            </script>
            ";
        }


?>