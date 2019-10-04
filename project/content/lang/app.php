<?php 
		if (@$_GET["type"] == TRUE) {
				// Определяем переменные
				$type = strval($_GET["type"]);
				$current_page = $_SESSION["current_page"];

				switch($type) {
						case "ru": 
								$_SESSION["current_language"] = "ru";
								Header("Location: $current_page");
						break;

						case "en": 
								$_SESSION["current_language"] = "en";
								Header("Location: $current_page");
						break;

						default: 
								Header("Location: /");
						break; 
				}
		}
		// /lang&type=
?>