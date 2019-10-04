<?php
		// Подключение к MySQL
		$sql = mysqli_connect("a279068_1.mysql.mchost.ru", "a279068_1", "BtD233Dc1TZd");
		
		// Выбираем Базу данных
		$db_name = "a279068_1";
		$db = mysqli_select_db($sql, $db_name);

		// Настройка кодировки соединения
		mysqli_query($sql, "SET NAMES 'utf8'"); 
		mysqli_query($sql, "SET CHARACTER SET 'utf8'");
		mysqli_query($sql, "SET SESSION collation_connection = 'utf8_general_ci'");
?>