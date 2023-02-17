<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	$id = $_GET["id"];
	deleteFromBasket($id);
	header("Location: basket.php");