<?php

$sum = 0;
while ($i!= 3){
$i++;
$a = rand(0, 5);
$b = $a + 1;
echo "'<img src ='".$b.".jpg'>";
$sum+=$b;
}
echo "<h1>Сумма набранных чисел = ".$sum."</h1>";

?>