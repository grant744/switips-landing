<?php
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #
# # # # # # # # # # # Архитектура групп и ссылок
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #

if (isset($_GET["content"])) {
		$content = strval($_GET["content"]);

		switch($content) {
				// Обработчики
				case "debug": include("project/content/debug/app.php"); break;
				case "lang": include("project/content/lang/app.php"); break;
				case "viewer": include("project/content/viewer/app.php"); break;
				case "exit": include("project/content/exit/app.php"); break;

				// Приложения интерфейса login
				case "login": include("project/content/login/option_file.php"); break;
				case "login_completed": include("project/content/login_completed/option_file.php"); break;

				// Приложения интерфейса panel
				case "personal_area": include("project/content/personal_area/option_file.php"); break;
				case "settings": include("project/content/settings/option_file.php"); break;
				case "link_management": include("project/content/link_management/option_file.php"); break; // In developing
				case "order_list": include("project/content/order_list/option_file.php"); break; // In developing
				case "user_management": include("project/content/user_management/option_file.php"); break; // In developing
				case "reference": include("project/content/reference/option_file.php"); break; // In developing

				default: Header("Location: /"); break; 
		}
} 

else include("project/content/index/app.php");
?>