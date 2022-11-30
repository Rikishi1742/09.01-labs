<?php
	$head = '
	<meta charset="urf-8">
	<title>Изучаем PHP</title>
	<link rel="stylesheet" href="assets/css/style.css">
	';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<?php echo $head; ?>
</head>

<body>
	<header>
		<div class="content">
		<?php echo $header; ?>
		</div>
	</header>

	<div class="main">
		<div class="content">
			<?php echo $content; ?>
		</div>
	</div>

	<footer>
		<div class="content">
			<?php echo $footer; ?>
		</div>
	</footer>
</body>

</html>