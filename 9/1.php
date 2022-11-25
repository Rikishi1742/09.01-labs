<?php
$a = rand(0,1);
$b = rand(0,1);
$c = rand(0,1);
$q = 0;

echo "a = ".$a.";<br>";
echo "b = ".$b.";<br>";
echo "c = ".$c.";<br> <br>";

if ($a == 0 and $b == 0 and $c == 0) {
	echo "q = 0;";
}
if ($a == 0 and $b == 0 and $c == 1) {
		echo "q = 1;";
}
if ($a == 0 and $b == 1 and $c == 0) {
		echo "q = 1;";
}
if ($a == 0 and $b == 1 and $c == 1) {
		echo "q = 0;";
}
if ($a == 1 and $b == 0 and $c == 0) {
		echo "q = 1;";
}
if ($a == 1 and $b == 0 and $c == 1) {
		echo "q = 0;";
}
if ($a == 1 and $b == 1 and $c == 0) {
		echo "q = 0;";
}
if ($a == 1 and $b == 1 and $c == 1) {
		echo "q = 1;";
}
?>
