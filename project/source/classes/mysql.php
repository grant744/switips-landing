<?php
		// Подключение к MySQL
		$sql = mysqli_connect("localhost", "root", "0846");
		
		// Выбираем Базу данных
		$db_name = "myswitips";
		$db = mysqli_select_db($sql, $db_name);

		// Настройка кодировки соединения
		mysqli_query($sql, "SET NAMES 'utf8'"); 
		mysqli_query($sql, "SET CHARACTER SET 'utf8'");
		mysqli_query($sql, "SET SESSION collation_connection = 'utf8_general_ci'");
?>