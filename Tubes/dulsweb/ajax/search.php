<?php 
require('../koneksi.php');
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
            anime
            WHERE
            judul LIKE '%$keyword%' 
            ";
$students = query($query);
?>
<?php if($students) :?>
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
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($students as $student) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td>
            <img src="../img/<?= $student['gambar']; ?>" width="50">
          </td>
          <td><?= $student['judul']; ?></td>
          <td><?= $student['gambar']; ?></td>
          <td>
            <a href="" class="badge text-bg-warning">ubah</a> |
            <a href="hapus.php?id=<?= $student["id"]; ?>" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      </tbody>
    </table>
    <?php endforeach; ?>
  <?php else : ?>
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-danger" role="alert">
            Data Ga ada
        </div>
      </div>
    </div>
  <?php endif; ?>