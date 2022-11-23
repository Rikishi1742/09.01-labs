<?php

$disc = array(
array(1, "Atom Heart Mother", "10 октября 1970", "EMI",
"LP, CD", "Золотой (USA)"),
array(2, "Meddle", "30 октября 1971", "EMI", "Vinyl, 
CD", "Платиновый (USA)"),
array(3, "Obscured by Clouds", "3 июня 1972",
"Capitol", "LP, CD", "Золотой (USA)"),
array(4, "The Dark Side of the Moon", "17 марта 1973",
"EMI", "LP, CD", "Платиновый (USA)"),
array(5, "Wish You Were Here", "15 сентября 1975",
"Harvest", "CD, SACD", "Платиновый (USA)")
);

$count = count($disc);
$html = "";

echo "<table>";
echo "<tr>";
echo "<th>ID</th> <br> <th>Альбом</th> <th>Дата выпуска</th> <th>Страна</th> <th>Идентификатор группы</th>";
for ($i=0; $i < $count; $i++) {

$html.= "
<tr> <th>{$disc[$i][0]}</th>
<th>{$disc[$i][1]}</th>
<th>{$disc[$i][2]}</th>
<th>{$disc[$i][3]}</th>
<th>{$disc[$i][4]}</th>
<th>{$disc[$i][5]}</th>
</tr>
"; 
};



echo $html;
echo "</table>";
?>