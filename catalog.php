	<?php
		// подключение библиотек
		require "inc/lib.inc.php";
		require "inc/config.inc.php";
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Каталог товаров</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</head>
	<body>
	<p>Товаров в <a href="basket.php">корзине</a>: <?= $count?></p>
	<table class="table table-striped">
	<tr>
		<th>Название</th>
		<th>Автор</th>
		<th>Год издания</th>
		<th>Цена, руб.</th>
		<th>В корзину</th>
	</tr>
	<?php
	$goods = selectAllItems();
	foreach ($goods as $item):
	?>

	<tr>
		<td><?= $item['title']?></td> 
		<td><?= $item['author']?></td> 
		<td><?= $item['pubyear']?></td> 
		<td><?= $item['price']?></td> 
		<td> <a href="add2basket.php?id=<?= $item['id'] ?>">В корзину</a></td> 
	</tr>

	<?php endforeach ?>
	</table>
	</body>
	</html>