<?php 
$x = '84';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        aku adalah angka<b><?php echo " $x" ?></b>
    </p>
    <p>
        jika aku dikali 5 ,maka aku sekarang menjadi <b><?php echo $x*5 ?></b>
    </p>
    <p>
        jika aku dibagi 2, maka aku sekarang menjadi <b><?php echo $x*5/2 ?></b>
    </p>
    <p>
        jika aku ditambah 75, maka aku sekarang menjadi <b><?php echo $x*5/2+75 ?></b>
    </p>
    <p>
        jika aku dikurang 20, maka aku serangrang menjadi <b><?php echo $x*5/2+75-20 ?></b>
    </p>
</body>
</html>