<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	$id = $_GET["id"];
	add2basket($id);
	header("Location: catalog.php");