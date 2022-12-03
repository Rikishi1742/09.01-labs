<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<body>
	
<?php
$x = 5;
$y = 2;
$r = --$x / $y;
echo "r = $r </br>";
echo "x = $x </br>";
echo "y = $y </br>";
echo "<p>";
$t = ( $r++ / $y ) / $x--;
echo "t = $t </br>";
echo "r = $r </br>";
echo "x = $x </br>";
echo "y = $y </br>";
echo "<p>";
$s = ( ( $x - $y-- ) / $t++ ) + $r;
echo "s = $s </br>";
echo "t = $t </br>";
echo "r = $r </br>";
echo "x = $x </br>";
echo "y = $y </br>";
?>
	
</body>
</html>