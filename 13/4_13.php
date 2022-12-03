<?php

$albums = array(
	array('1','The Dark Side of the Moon', '1973', 'Великобритания','id_team' => '2'),
	array('2','Wish You Were Here', '1975', 'Великобритания','id_team' => '2'),
	array('3','Greatest Hits', '1999', 'США','id_team' => '2'),
	array('4','Abbey Road', '1969', 'Великобритания','id_team' => '3'),
	array('5','A Hard Day\'s Night', '1964', 'Великобритания','id_team' => '3'),
	array('6','Back in Black', '1980', 'США','id_team' => '4'),
	array('7','Highway to Hell', '1979', 'Австралия','id_team' => '4'),
	array('8','The Razors Edge', '1990', 'Австралия','id_team' => '4'),
	array('9','Let There Be Rock', '1977', 'ФРГ','id_team' => '4'),
	array('10','Rocks', '1982', 'Великобритания','id_team' => '1'),
	array('11','Strange Days', '1967', 'США','id_team' => '0'),
	array('12','L.A. Woman', '1971', 'США','id_team' => '0'),
	array('13','Greatest Hits', '1978', 'США','id_team' => '3')
);

$tracks = array(
		array( '1', 'Back in the Saddle','note' => '','10'),
		array( '2', 'Last Child','note' => '','10'),
		array( '3', 'Rats in the Cellar','note' => '','10'),
		array( '4', 'Combination','note' => '','10'),
		array( '5', 'Sick As a Dog','note' => '','10'),
		array( '6', 'Come Together','note' => '','10'),
		array( '7', 'Get the Lead Out','note' => '','10'),
		array( '8', 'Lick and a Promise','note' => '','10'),
		array( '9', 'Home Tonight','note' => '','10'),
		array( '10', 'Come Together','note' => '','4'),
		array( '11', 'Something','note' => '','4'),
		array( '12', 'Maxwell\'s Silver Hammer','note' => '','4'),
		array( '13', 'Oh! Darling','note' => '','4'),
		array( '14', 'Octopus\'s Garden','note' => '','4'),
		array( '15', 'I Want You (She\'s So Heavy)','note' => '','4'),
		array( '16', 'Here Comes The Sun','note' => '','4'),
		array( '17', 'Because','note' => '','4'),
		array( '18', 'You Never Give Me Your Money','note' => '','4'),
		array( '19', 'Sun King','note' => '','4'),
		array( '20', 'Mean Mr Mustard','note' => '','4'),
		array( '21', 'Polythene Pam','note' => '','4'),
		array( '22', 'Shine On You Crazy Diamond (Part One)','note' => '','2'),
		array( '23', 'Welcome to the Machine','note' => '','2'),
		array( '24', 'Have a Cigar','note' => '','2'),
		array( '25', 'Wish You Were Here','note' => '','2'),
		array( '26', 'Shine On You Crazy Diamond (Part Two)','note' => '','2'),
		array( '27', 'Speak to Me','note' => '','1'),
		array( '28', 'Breathe (In the Air)','note' => '','1'),
		array( '29', 'On the Run','note' => '','1'),
		array( '30', 'Time','note' => '','1'),
		array( '31', 'The Great Gig in the Sky','note' => '','1'),
		array( '32', 'Money','note' => '','1'),
		array( '33', 'Us and Them','note' => '','1'),
		array( '34', 'Any Colour You Like','note' => '','1'),
		array( '35', 'Brain Damage','note' => '','1'),
		array( '36', 'Eclipse','note' => '','1'),
		array( '37', 'Hells Bells','note' => '','6'),
		array( '38', 'Shoot to Thrill','note' => '','6'),
		array( '39', 'What Do You Do for Money Honey','note' => '','6'),
		array( '40', 'Given the Dog a Bone','note' => '','6'),
		array( '41', 'Let Me Put My Love Into You','note' => '','6'),
		array( '42', 'Back in Black','note' => '','6'),
		array( '43', 'You Shook Me All Night Long','note' => '','6'),
		array( '44', 'Have a Drink on Me','note' => '','6'),
		array( '45', 'Shake a Leg','note' => '','6'),
		array( '46', 'Rock and Roll Ain\'t Noise Pollution','note' => '','6'),
		array( '47', 'Strange Days','note' => '','0'),
		array( '48', 'You\'re Lost Little Girl','note' => '','11'),
		array( '49', 'Love Me Two Times','note' => '','11'),
		array( '50', 'Unhappy Girl','note' => '','11'),
		array( '51', 'Horse Latitudes','note' => '','11'),
		array( '52', 'Moonlight Drive','note' => '','11'),
		array( '53', 'People Are Strange','note' => '','11'),
		array( '54', 'My Eyes Have Seen You','note' => '','11'),
		array( '55', 'I Can\'t See Your Face in My Mind','note' => '','11'),
		array( '56', 'When the Music\'s Over','note' => '','11')
	);

$count = count($albums);
for ($i=0;$i < $count; $i++) {

$html= "<ol>
<li><b>Название альбома: {$albums[$i][1] } <br /> </li>
Страна альбома: {$albums[$i][3]} </b>
<ul><li>Трек: {$tracks[$i][1]} </ul></li>

</ol>

"; 

echo $html;

};
?>