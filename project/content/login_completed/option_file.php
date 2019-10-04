<?php 
		if ($_SESSION["current_language"] == "en") {
				include("project/content/login_completed/en_app.php");
		}

		elseif ($_SESSION["current_language"] == "ru") {
				include("project/content/login_completed/ru_app.php");
		}

		else {
				echo "Sorry, the site does not support your language";
		}
?>