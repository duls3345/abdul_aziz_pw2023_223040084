<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2D.</title>
</head>
<body>
<table border ="1" cellpadding ="40" cellspacing ="0">
        <?php
        for ($bd = 1; $bd <= 5; $bd++) {
            echo "<tr>";
            for ($b = 1; $b <= 5; $b++) {
                $total = $bd + $b;
                if ($total % 2 == 0) {
                    echo "<td height'50px' width'50px style='background:#000'></td>";
                } else {
                    echo "<td height'50px' width'50px style='background:#fff'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>