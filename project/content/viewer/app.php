<?php 
// Соеденение с базой данных MySQL
include("project/source/classes/mysql.php");

// Проверка соединения с MySQL
if ($sql) {
		// Выбираем случайную реферальную ссылку из таблицы
		$query = "		SELECT * FROM table_links ORDER BY RAND() LIMIT 1		";	
		$result = mysqli_query($sql, $query);

		if ($result) {
				// Узнаем сколько строк в таблице
				$query_rows = mysqli_num_rows($result);

				if ($query_rows > 0) {
						// Узнаем данные об ссылке
						$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);

						// Добавляем запись о переходе в базу данных
						$url_id = $query_array["id"];
						$url_link = $query_array["url_link"];
						$url_time = time();

						$user_agent = $_SERVER["HTTP_USER_AGENT"];
		  				if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
		 				elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
		 				elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
						elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
						elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
						else $browser = "Неизвестный";

						$query = "		INSERT INTO table_links_history (url_id, url_link, data, browser) VALUES ('$url_id', '$url_link', '$url_time', '$browser')		";	
						$result = mysqli_query($sql, $query);

						if ($result) {
								Header("Location: $url_link");

						} else echo "Ошибка в ходе выполнения запроса 2";
				} else echo "Нет данных";
		} else echo "Ошибка в ходе выполнения запроса 1";
} else echo "Ошибка соединения с базой данных";
?>