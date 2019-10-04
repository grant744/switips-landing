<?php
// Запоминаем текущую страницу
// -------------------------------------------------------------------------------------------------------------------------------------
		$session_array_add = array(
				"current_page" => $_SERVER["REQUEST_URI"]
		);

		$_SESSION = array_merge($_SESSION, $session_array_add);
?>

<!DOCTYPE html>
<html>
	<head>
			<meta name="format-detection" content="telephone=no">
			<meta charset="utf-8">
			<link rel="shortcut icon" href="/project/source/ui/login/image/favicon.ico" type="image/x-icon">
			<link rel="stylesheet" type="text/css" href="/project/source/ui/login/style/common.css" >
			<?php include($unit->jQuery); ?>
			<?php include($unit->jQueryFormStyler); ?>
			<?php include($unit->scroll_up); ?>
			
			<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>

	<body>
			<!-- _BASIS --><div id="_BASIS">

					<div class="identification_screen">
							<div class="inclined"></div>

							<div class="centering">
							<!-- content apps -->