<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Корзина пользователя</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Ваша корзина</h1>
<?php
if ($count == 0):
?>
<p>Корзина пуста! <a href="catalog.php">Вернуться в каталог</a></p>
<?php else: ?>
<table class="table table-striped">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?php
	$sum = 0;
	$goods = myBasket();
	foreach($goods as $item) {
		$sum += $item["quantity"] * $item["price"];
	}
	foreach ($goods as $item):
?>
<tr>
	<td><?= $item["id"] ?></td>
	<td><?= $item["title"] ?></td>
	<td><?= $item["author"] ?></td>
	<td><?= $item["pubyear"] ?></td>
	<td><?= $item["price"] ?></td>
	<td><?= $item["quantity"] ?></td>
	<td><a href="delete_from_basket.php?id=<?= $item['id'] ?>">Удалить</a></td>
</tr>
<?php endforeach; ?>
</table>

<p align="center">Всего товаров в корзине на сумму: <?= $sum ?> руб.</p>

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='orderform.php'" />
</div>
<p align="center"> Вернуться в <a href="catalog.php">каталог</a> </p>
<?php endif; ?>

</body>
</html>