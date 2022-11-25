<?php
    $a = 1;
    $b = 6;
    $c = 8;

    $d = $b^2 - 4 * $a * $c;

    if ($d > 0){
        $x1 = ((-$b + sqrt($d)) / 2 * $a);
        $x2 = ((-$b - sqrt($d)) / 2 * $a);
        echo $x1;
        echo $x2;
    }
    elseif($d < 0){
        echo "Корней нет";
    }
    elseif($d == 0){
        $x = ((-$b + sqrt($d)) / 2 * $a);
        echo $x;
    }

?>