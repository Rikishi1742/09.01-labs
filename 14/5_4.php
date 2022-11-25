<?php

if (empty($_GET["ss"])and empty($_GET["ss1"] and empty($_GET["ss2"]))){
echo "<h3>GET-переменная a,b, или написана нерпавильно пример : ?ss=54&ss1=54&ss2=5</h3>";
}
else {
echo "<h3>a = {$_GET['ss']} b = {$_GET['ss1']} c = {$_GET['ss2']}<br>";
$a = $_GET['ss'];
$b = $_GET['ss1'];
$c = $_GET['ss2'];

$d = $b**2 - 4 * $a * $c;
echo "D = ".$d."<br>";
if ($d > 0) {
	$x1 = (-$b + sqrt($d)) / 2 * $a;
	$x2 = (-$b - sqrt($d)) / 2 * $a;
	echo "x1 = ".$x1."<br>";
	echo "x2 = ".$x2;
}
if ($d < 0)
{
	echo "Нет корней";
}
if ($d == 0) {
	$x = (-$b + sqrt($d)) / 2 * $a;
	echo "x = ".$x;
}

}



?>