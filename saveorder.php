<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$id = $basket["orderid"];
	$date = time();
	$order = $name .  '|' . $email . '|' . $phone . '|' . $address . '|' . $id . '|' . $date . "\n";
	file_put_contents("./admin/orders.log", $order, FILE_APPEND);
	saveOrder($date);
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>