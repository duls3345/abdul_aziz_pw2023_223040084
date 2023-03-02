<?php 
$dp = "Abdul";
$bk = "aziz";
for($x=1; $x <= 100; $x++) {
    if ( $x %15 == 0) {
        echo "$dp <br>";
    }elseif ($x % 5 == 0) {
        echo "$bk <br>";
    }elseif ($x % 3 == 0) {
        echo "$dp <br>";
    } else {
        echo "$x <br>";
    }
}
?>