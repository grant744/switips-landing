<?php 
		if ($_SESSION["current_language"] == "en") {
				include($ui->lending["en"]);
		}

		elseif ($_SESSION["current_language"] == "ru") {
				include($ui->lending["ru"]);
		}
?>