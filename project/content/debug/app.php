<link rel="stylesheet" type="text/css" href="/project/content/debug/style/app.style.css">

<div class="debug_place">
		Проверка массива $_SESSION
		<?php 	
				echo "<pre>";
				print_r($_SESSION);
				echo "</pre>";
		?>
</div>

<div class="debug_place">
		Проверка MySQL
		<?php
				// Соеденение с базой данных MySQL
				include("project/source/classes/mysql.php");

				$query = "		SELECT * FROM table_account		";	
				$result = mysqli_query($sql, $query);

				$query_rows = mysqli_num_rows($result);
				$query_row = mysqli_fetch_row($result);
				$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);

				echo "<pre>";
				print_r($result);
				echo "</pre>";

				echo "<pre>";
				print_r($query_rows);
				echo "</pre>";

				echo "<pre>";
				print_r($query_row);
				echo "</pre>";

				echo "<pre>";
				print_r($query_array);
				echo "</pre>";
		?>
</div>