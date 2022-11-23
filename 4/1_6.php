<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<body>
	<?php
	define('Автор', array(
		'М.А. Булгаков',
		'А.С. Пушкин',
		'С.И. Есенин'
		)); 
		echo Автор[0];
		echo "<p>"; 
		
		define('Произведение', array(
		'Золотой петушок',
		'Белый человек',
		'Мастер и Маргарита'
		)); 
		echo Произведение[2];
		echo "<p>"; 
		
		define('god', array(
		'1921',
		'1966',
		'1950'
		)); 
		echo god[1];
		echo "<p>"; 
?>
	
</body>
</html>

