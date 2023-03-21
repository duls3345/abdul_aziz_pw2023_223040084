<?php 
$ff = [
[
    'gambar' =>'<img src="./img/kanek.jpg" style="width:300px;height:300px;" >',
    'nama' => 'Kaneni Ken',
    'judul'=> '20230097',
    'genre'=> 'ken@gmail.com',
    'penulis'=>'Ilmu Pengembangan Pertanian'
],
[
    'gambar' =>'<img src="./img/kiriti.png" style="width:400px;height:300px;" >',
    'nama' => 'Kazuto Kirigaya',
    'judul'=> '20230159',
    'genre'=> 'kazuto@gmail.com',
    'penulis'=>'Ilmu Kuli Bangunan'
],
[
    'gambar' =>'<img src="./img/eren.webp" style="width:300px;height:300px;" >',
    'nama' => 'Eren Yeager',
    'judul'=> '20235089',
    'genre'=> 'Yeger@gmail.com',
    'penulis'=>'Pengembangan Oragan Hewan'
],
[
    'gambar' =>'<img src="./img/koji.webp" style="width:300px;height:300px;" >',
    'nama' => 'Kiyotaka Ayanokoji',
    'judul'=> '	20230318',
    'genre'=> 'yokata@gmail.com',
    'penulis'=>'Ketahanan Probalitas'
],
[
    'gambar' =>'<img src="./img/IZUMI.webp" style="width:300px;height:300px;" >',
    'nama' => 'Izumi Sagiri',
    'judul'=> ' 2023001 ',
    'genre'=> 'erog@gmail.com',
    'penulis'=>'pengembangan imajinasi'
],//////
[
    'gambar' =>'<img src="./img/sukasa.webp" style="width:300px;height:300px;" >',
    'nama' => 'Yuzaki Tsukasa',
    'judul'=> ' 2023003 ',
    'genre'=> 'kasa@gmail.com',
    'penulis'=>'pengembang makanan'
],
[
    'gambar' =>'<img src="./img/kelvin.jfif" style="width:300px;height:300px;" >',
    'nama' => 'kelvin',
    'judul'=> ' 2023578 ',
    'genre'=> 'kurono@gmail.com',
    'penulis'=>'Teknik Perancangan Industri'
],
[
    'gambar' =>'<img src="./img/rimuru.webp" style="width:300px;height:300px;" >',
    'nama' => 'Rimuru Tempets',
    'judul'=> ' 2023009 ',
    'genre'=> 'rimuru@gmail.com',
    'penulis'=>'Teknik Perencana Desa'
],
[
    'gambar' =>'<img src="./img/fuji.webp" style="width:300px;height:300px;" >',
    'nama' => 'Chika Fujiwara',
    'judul'=> ' 2023007 ',
    'genre'=> 'Chika@gmail.com',
    'penulis'=>'Perencanaan Keuangan'
],
[
    'gambar' =>'<img src="./img/marin.webp" style="width:300px;height:300px;" >',
    'nama' => 'Marin Kitagawa ',
    'judul'=> ' 2023997 ',
    'genre'=> 'marin@gmail.com',
    'penulis'=>'Menejmen Permodelan'
],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Mahasiswa </title>
</head>
<body>
<h2>Daftar Mahasiswa </h2>
    <?php foreach($ff as $f) { ?>
    <ul>
        <li><?=$f['gambar']; ?></li>
        <li>Nama Mahasiswa:<?=$f['nama']; ?></li>
        <li>NPM: <?=$f['judul']; ?> </li>
        <li>Email: <?=$f['genre']; ?> </li>
        <li>Prodi: <?=$f['penulis']; ?></li>

    </ul>
    <?php } ?>
</body>
</html>