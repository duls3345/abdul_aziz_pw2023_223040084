<?php 
require('../koneksi.php');

// Hapus data kesehatan
$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location = 'dasbord.php';
        </script>
    ";
  } else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location = 'dasbord.php';
        </script>
    ";
  }
?>