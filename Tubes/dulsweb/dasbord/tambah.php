<?php
session_start();
if (!isset($_SESSION['login'])){
    header("location:login.php");
    exit;
}
require('../koneksi.php'); ?>

<?php require('view/header.php'); ?>
<?php $title = 'Tambah Data'; ?>
<?php require('view/nav.php'); ?>


<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="login-email">
    <p style="font-size: 2.6rem; font-weight:850;margin-bottom:20px">Tambah Article</p>
    <div class="input-group"><input type="text"  placeholder="judul" name="judul" required></div>
    <div class="input-group"><input type="file"  placeholder="gambar" name="gambar" required></div>
    <div class="input-group"><input type="text"  placeholder="kutipan" name="kutipan" required></div></div>
    <div class="input-group"><button name="submit" class="badge bg-primary container col-mt-3">Tambah</button></div>
</form>

<?php 
function uploadImage()
{
  $imageName = $_FILES['gambar']['name'];
  $imageSize = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  if ($error === 4) {
    echo "<script>alert('Insert an image!');</script>";
    return false;
  }

  if ($imageSize > 50000000 || $error === 1) {
    echo "<script>alert('Image is too big');</script>";
    return false;
  }

  if ($error !== 0) {
    echo "<script>alert('Failed to upload an image!');</script>";
    return false;
  }

  $validExtension = ['jpg', 'jpeg', 'png', 'webp'];
  $imageExtension = explode('.', $imageName);
  $imageExtension = strtolower(end($imageExtension));
  if (!in_array($imageExtension, $validExtension)) {
    echo "<script>alert('Not an image!');</script>";
    return false;
  }

  $newImageName = uniqid();
  $newImageName .= '.';
  $newImageName .= $imageExtension;

  move_uploaded_file($tmpName, '../img/' . $newImageName);
  return $newImageName;
}

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