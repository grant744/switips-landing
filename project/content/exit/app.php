<?php 
		unset($_SESSION["id"]);
		unset($_SESSION["login"]);
		unset($_SESSION["reg_date"]);
		unset($_SESSION["username_a"]);
		unset($_SESSION["username_b"]);
		unset($_SESSION["access"]);

		Header("Location: /login");
?>