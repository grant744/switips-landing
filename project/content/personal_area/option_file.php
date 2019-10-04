<?php 
		if ($_SESSION["current_language"] == "en") {
				include("project/content/personal_area/en_app.php");
		}

		elseif ($_SESSION["current_language"] == "ru") {
				include("project/content/personal_area/ru_app.php");
		}

		else {
				echo "Sorry, the site does not support your language";
		}
?>