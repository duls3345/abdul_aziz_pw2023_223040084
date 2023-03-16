<?php 
$ff = [
[
    'poster' => '<img src="./img/serigala.webp" style="width:150px;height:200px;" >',
    'judul' => 'Serigala Terakhir2',
    'tahun'=> 2022,
    'Genre'=> ['Laga , ' ,'Cerita seru'],
    'pemeran'=>['Abimana Aryasatya , ','Ganindra Bimo' ],
    'sutradara'=>'Tommy Dewo'
],
[
    'poster' => '<img src="./img/harry.jfif" style="width:150px;height:200px;" >',
    'judul' => "Harry Potter and the Sorcerer's Stone",
    'tahun'=> 2001,
    'Genre'=> ['Fantasi , ' ,'Adventure , ', 'fiksi , ','kids flim'],
    'pemeran'=>['Daniel Radcliffe , ','Emma Watson , ','Rupert Grint' ],
    'sutradara'=>'Chris Columbus'
],
[
    'poster' => '<img src="./img/sperow.jfif" style="width:150px;height:200px;" >',
    'judul' => 'Pirates of the Caribbean: The Curse of the Black Pearl',
    'tahun'=> 2003,
    'Genre'=> ['action' ,'adventure ,','comedy ,','fantasi ,','Swashbukler'],
    'pemeran'=>['Johnny Depp , ','Keira Knightley ,','Orlando Bloom' ],
    'sutradara'=>'Gore Verbinski'
],
[
    'poster' => '<img src="./img/tenki.jfif" style="width:150px;height:200px;" >',
    'judul' => 'Weathering with You',
    'tahun'=> 2019,
    'Genre'=> ['anime ,' ,'fantasi ,','Animasi , ','Drama ,','romantic ,','bencana ,','remaja'],
    'pemeran'=>['Kotaro Daigo , ','Alison Brie' ],
    'sutradara'=>'Makoto Shinkai'
],
[
    'poster' => '<img src="./img/kage.jpg" style="width:150px;height:250px;" >',
    'judul' => 'Kage no Jitsuryokusha ni Naritakute!',
    'tahun'=> 2023,
    'Genre'=> ['dark fantasy' ,'isekai ,','Action ,','Comedy , ','Reincarnation'],
    'pemeran'=>['Seiichiro Yamashita , ','Fairouz Ai ,','Kana Hanazawa' ],
    'sutradara'=>'Kazuya Nakanishi'
],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>flim  </title>
</head>
<body>
<h2>Daftar flim kesukaan </h2>
    <?php foreach($ff as $f) { ?>
    <ul>
        <li><?=$f['poster']; ?></li>
        <li>Judul:<?=$f['judul']; ?></li>
        <li>Tahun:<?=$f['tahun']; ?></li>
        <li>Genre: <?php foreach($f['Genre'] as $makan ){
            echo $makan;
        } ?> </li>
        <li>Pemeran Utama: <?php foreach($f['pemeran'] as $m ){
            echo $m;
        } ?> </li>
        <li>Sutradara <?=$f['sutradara']; ?></li>

    </ul>
    <?php } ?>
</body>
</html>