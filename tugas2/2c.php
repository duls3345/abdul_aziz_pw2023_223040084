<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2C.</title>
    <style>
        .tabel {
            background-color: lightcoral;
            border-style: solid;
            border-width: 1px;
        }
    </style>
</head>
<body>
<table cellpadding="15" cellspacing="0">
        <?php for ($y = 11; $y >= 1; $y--) : ?>
            <tr>
                <?php for ($k = 1; $k < $y; $k++) : ?>
                    <?php  ?>
                    <td class="tabel"><?php echo "$k"; ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>

    </table>
    
</body>
</html>