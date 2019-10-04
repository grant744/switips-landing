<?php 
		include($ui->login["en"]["begin"]);

// Проверка авторизации
// -------------------------------------------------------------------------------------------------------------------------------------
if ($_SESSION["id"] == TRUE) {
	Header("Location: /login_completed");
}

// Программа авторизации
// -------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST["submit"])) {
		// Проверка reCAPTCHA
		$response = $_POST["g-recaptcha-response"];
 		$url = 'https://www.google.com/recaptcha/api/siteverify';
  		$data = [
    			'secret' => '6LeAap0UAAAAAPF-MJqbKAqMps03micf3eA1Kdq5',
   				'response' => $_POST["g-recaptcha-response"]
  				];
		$options = [
    				'http' => [
     							'method' => 'POST',
      							'content' => http_build_query($data)
    						]
  					];
  		$context  = stream_context_create($options);
  		$verify = @file_get_contents($url, false, $context);
  		$captcha_success=json_decode($verify);

		if ($captcha_success->success==false) {
				echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Confirm reCAPTCHA verification</div></div>';
  		} 

  		else if ($captcha_success->success==true) {
  				// Соеденение с базой данных MySQL
				include("project/source/classes/mysql.php");

				// Проверка соединения с MySQL
				if ($sql) {
						// Ищем пользователя в базе данных
						$login = $_POST["login"];
						$password = $_POST["password"];

						$query = "		SELECT * FROM table_account WHERE login='$login'		";	
						$result = mysqli_query($sql, $query);
						if ($result) {
								$query_rows = mysqli_num_rows($result);
								$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);

								if ($query_rows >= 1) {
										// Сравниваем пароль
										if ($query_array["password"] == $password) {
												// Создаем сессию
												$session_array_add = array(
														"id" => $query_array["id"],
														"login" => $query_array["login"],
														"username_a" => $query_array["username_a"],
														"username_b" => $query_array["username_b"],
														"access" => $query_array["access"]
												);

												$_SESSION = array_merge($_SESSION, $session_array_add);
												
												// Добавляем запись об авторизации в базу данных
												$session_time = time();

												$user_agent = $_SERVER["HTTP_USER_AGENT"];
  												if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
 												elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
 												elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
												elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
												elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
												else $browser = "Неизвестный";

												$query = "		INSERT INTO table_account_sessions (login, data, browser) VALUES ('$login', '$session_time', '$browser')		";	
												$result = mysqli_query($sql, $query);

												if ($result) {
														Header("Location: /personal_area");

												} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Error during query 2</div></div>';
										} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Wrong login or password</div></div>';
								} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Wrong login or password</div></div>';
						} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Error during query 1</div></div>';
				} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Database unavailable</div></div>';
	  	}
}

// Debug
// -------------------------------------------------------------------------------------------------------------------------------------
// echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/ok.png)" class="image"></div><div class="message">Все хорошо</div></div>';
?>


									<title>Login to control panel</title>
									<link rel="stylesheet" type="text/css" href="/project/content/login/style/app.style.css">

									<div class="logo"></div>
									<p class="headline">Control panel site<br><?=$_SERVER["HTTP_HOST"]; ?></p>

									<div class="language_tool">
											<a href="/lang&type=ru"><div class="language_option">Ру</div></a>
											<a href="/lang&type=en"><div class="language_option_active">En</div></a>
									</div>

									<div class="identification_place">
											<form method="post" enctype="multipart/form-data">
													<div class="inscription_login">Login</div>
													<input class="jquery_form" name="login" type="text" required>

													<div class="inscription_password">Password</div>
													<input class="jquery_form" name="password" type="password" required>

													<div class="indent">
															<div class="g-recaptcha" data-sitekey="6LeAap0UAAAAAG4t7ue4_e0Yfl30I-5xXkqY_NUR"></div>
													</div>

													<div class="indent">
															<input class="jquery_form" name="submit" type="submit" value="Login to control panel">
													</div>
											</form>
									</div>
<?php 
		include($ui->login["en"]["end"]);
?>