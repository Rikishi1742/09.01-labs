<?php
	$track = array(
		array('1','Back in the Saddle','','10'),
		array('2','Last Child','','10'),
		array('3','Rats in the Cellar','','10'),
		array('4','Combination','','10'),
		array('5','Sick As a Dog','','10'),
		array('6','Come Together','','10'),
		array('7','Get the Lead Out','','10'),
		array('8','Lick and a Promise','','10'),
		array('9','Home Tonight','','10'),
		array('10','Come Together','','4'),
		array('11','Something','','4'),
		array('12','Maxwell\'s Silver Hammer','','4'),
		array('13','Oh! Darling','','4'),
		array('14','Octopus\'s Garden','','4'),
		array('15','I Want You (She\'s So Heavy)','','4'),
		array('16','Here Comes The Sun','','4'),
		array('17','Because','','4'),
		array('18','You Never Give Me Your Money','','4'),
		array('19','Sun King','','4'),
		array('20','Mean Mr Mustard','','4'),
		array('21','Polythene Pam','','4'),
		array('22','Shine On You Crazy Diamond (Part One)','','2'),
		array('23','Welcome to the Machine','','2'),
		array('24','Have a Cigar','','2'),
		array('25','Wish You Were Here','','2'),
		array('26','Shine On You Crazy Diamond (Part Two)','','2'),
		array('27','Speak to Me','','1'),
		array('28','Breathe (In the Air)','','1'),
		array('29','On the Run','','1'),
		array('30','Time','','1'),
		array('31','The Great Gig in the Sky','','1'),
		array('32','Money','','1'),
		array('33','Us and Them','','1'),
		array('34','Any Colour You Like','','1'),
		array('35','Brain Damage','','1'),
		array('36','Eclipse','','1'),
		array('37','Hells Bells','','6'),
		array('38','Shoot to Thrill','','6'),
		array('39','What Do You Do for Money Honey','','6'),
		array('40','Given the Dog a Bone','','6'),
		array('41','Let Me Put My Love Into You','','6'),
		array('42','Back in Black','','6'),
		array('43','You Shook Me All Night Long','','6'),
		array('44','Have a Drink on Me','','6'),
		array('45','Shake a Leg','','6'),
		array('46','Rock and Roll Ain\'t Noise Pollution','','6'),
		array('47','Strange Days','','0'),
		array('48','You\'re Lost Little Girl','','11'),
		array('49','Love Me Two Times','','11'),
		array('50','Unhappy Girl','','11'),
		array('51','Horse Latitudes','','11'),
		array('52','Moonlight Drive','','11'),
		array('53','People Are Strange','','11'),
		array('54','My Eyes Have Seen You','','11'),
		array('55','I Can\'t See Your Face in My Mind','','11'),
		array('56','When the Music\'s Over','','11')
	);
	$count = count($track);
$html = "";

for ($i=0; $i < $count; $i++) {

$html .= "<ul>
<li>ID альбома: {$track[$i][0]} <br /></li>
<li>Название: {$track[$i][1]} <br /></li>
</ul>

"; 
};

echo $html;
?>