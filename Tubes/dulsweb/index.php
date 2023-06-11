<?php
$title = 'Anime';
require('koneksi.php');
$students = query("SELECT * FROM anime");
?>
<?php require('view/header.php'); ?>
<?php require('view/nav.php'); ?>

<style>
    .tutor-list .card {
        margin-bottom: 20px;
    }
</style>

<section id="tutors">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>Anime</h2>
            <p>Kumpulan Saat Ini!</p>
        </div>
    </div>
    <div class="tutor-list">
        <?php foreach ($students as $student) : ?>
            <div class="col-md-2">
                <div class="card" style="width: 25rem;">
                    <img src="img/<?= $student['gambar']; ?>" width="150">
                    <div class="card-body">
                        <h5 class="card-title"><?= $student['judul']; ?></h5>
                        <p class="card-text"><?= $student['kutipan']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>





<?php require('view/futer.php') ?>