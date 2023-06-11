<?php 
session_start();
if (!isset($_SESSION['login'])){
    header("location:login.php");
    exit;
}

require('../koneksi.php');
$students = query("SELECT * FROM anime");
?>

<?php require('view/header.php') ?>
<?php require('view/nav.php') ?>
<?php 
$title = "Halaman Admin";
?>

<div class="container mt-3 ">
  <h1>Selamat Datang</h1>
  <h3>Daftar Anime</h3>
  <a href="tambah.php" class="btn btn-primary">Tambah Data Anime</a>

  <div class="row">
      <div class="col-md-6">
        <form action="" method="get" >
          <div class="input-group my-3">
            <input type="text" id="search" placeholder="Cari..." onkeyup="liveSearch()" autofocus autocomplete = "of">   
         </div>
        </form>
      </div>
     </div>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Judul</th>
        <th scope="col">Info Data</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody id="searchResults">
      <?php $i = 1; ?>
      <?php foreach ($students as $student) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td>
            <img src="../img/<?= $student['gambar']; ?>" width="50">
          </td>
          <td><?= $student['judul']; ?></td>
          <td><?= $student['kutipan']; ?></td>
          <td>
            <a href="" class="badge text-bg-warning">ubah</a> |
            <a href="hapus.php?id=<?= $student["id"]; ?>" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script>
function liveSearch() {
  var input = document.getElementById("search");
  var filter = input.value.toLowerCase();
  var tbody = document.getElementById("searchResults");
  var rows = tbody.getElementsByTagName("tr");

  // Loop melalui setiap baris tabel dan sembunyikan yang tidak cocok dengan input pencarian
  for (var i = 0; i < rows.length; i++) {
    var row = rows[i];
    var title = row.getElementsByTagName("td")[2].textContent || row.getElementsByTagName("td")[2].innerText;
    if (title.toLowerCase().indexOf(filter) > -1) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  }
}
</script>
