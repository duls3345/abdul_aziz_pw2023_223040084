<?php
require('../koneksi.php');
// ambil data di url
$id = $_GET["id"];
// query data berdasarkan id 
$ambil = query("SELECT * FROM anime WHERE id = $id")[0];


// if( ubah($_POST) > 0 ) {
    echo "
        <script>
            alert('data berhasil di ubah!');
            document.location = 'dasbord.php';
        </script>
    ";
//   } else {
    echo "
        <script>
            alert('data gagal di ubah!');
            document.location = 'dasbord.php';
        </script>
    ";
//   }
 ?>

<?php require('view/header.php'); ?>
<?php $title = 'ubah data'; ?>
<?php require('view/nav.php'); ?>


<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="login-email">
    <p style="font-size: 2.6rem; font-weight:850;margin-bottom:20px">Tambah Article</p>
    <input type="hidden" name="id" value="<?=$ambil["id"];?>">
    <div class="input-group"><input type="text"  placeholder="judul" name="judul" required value="<?= $ambil['judul'];?>"></div>
    <div class="input-group"><input type="file"  placeholder="gambar" name="gambar" required  value="<?= $ambil['gambar'];?>"></div>
    <div class="input-group"><input type="text"  placeholder="kutipan" name="kutipan" required value="<?= $ambil['kutipan'];?>"></div></div>
    <div class="input-group"><button name="submit" class="badge bg-primary container col-mt-3">ubah</button></div>
</form>

<?php 


if(isset($_POST['submit'])) {
  $judul = htmlspecialchars($_POST['judul']);
  $gambar = uploadImage();
  $kutipan = htmlspecialchars($_POST['kutipan']);
  
  $sql = "INSERT INTO anime
  (judul, gambar, kutipan) 
  VALUES 
  ('$judul', '$gambar', '$kutipan')";

  if(mysqli_query($conn, $sql)) {
    echo '<script>alert("Berhasil Menambahkan Produk")</script>';
    // Redirect ke halaman login.php setelah pendaftaran berhasil
    header("Location: dasbord.php");
    exit;
  } else { 
    echo '<script>alert("Menambahkan produk gagal");</script>';
  }
} 
?>


            <?php require('view/fouter.php'); ?>