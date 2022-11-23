<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<body>
	
	<?php
		$dollarsCount = 1000;
		$rublesCount = $dollarsCount  * 78.9;


		echo "1000 USD = ";
		echo $rublesCount;
		echo " RUB <br>  ";
		
		$cny = $rublesCount * 0.08;
		echo "$rublesCount";
		echo "RUB = ";
		echo "$cny";
		echo "CNY";
		
	?>
	
</body>
</html>