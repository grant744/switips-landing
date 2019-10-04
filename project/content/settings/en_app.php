<?php 
		include($ui->panel["full"]["en"]["begin"]);

		$title_page = "Settings";

// Программа смены пароля
// -------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST["submit"])) {
  		// Соеденение с базой данных MySQL
		include("project/source/classes/mysql.php");

		// Проверка соединения с MySQL
		if ($sql) {
				// Ищем данные пользователя в базе данных
				$old_password = $_POST["old_password"];
				$new_password = $_POST["new_password"];
				$repeat_password = $_POST["repeat_password"];
				$user_id = $_SESSION["id"];

				$query = "		SELECT * FROM table_account WHERE id='$user_id'		";	
				$result = mysqli_query($sql, $query);
				if ($result) {
						$query_rows = mysqli_num_rows($result);
						$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);

						// Сравниваем пароль
						if ($query_array["password"] == $old_password) {
								if ($new_password == $repeat_password) {
										// Обновляем новый пароль
										$query = "		UPDATE table_account SET password='$new_password' WHERE id='$user_id'		";	
										$result = mysqli_query($sql, $query);
										if ($result) {
												echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/ok.png)" class="image"></div><div class="message">Пароль успешно изменен</div></div>';

										} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Ошибка в ходе выполнения запроса 2</div></div>';
								} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Новый пароль не совпадает</div></div>';
						} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Старый пароль введен неверно</div></div>';
				} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Ошибка в ходе выполнения запроса 1</div></div>';
		} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">База данных недоступна</div></div>';
}

// Debug
// -------------------------------------------------------------------------------------------------------------------------------------
?>


													<div class="centering">
															<div class="restriction">
																	<title><?=$title_page; ?></title>
																	<link rel="stylesheet" type="text/css" href="/project/content/settings/style/app.style.css">

																	<div class="title"><?=$title_page; ?></div>

																	<div class="table_place">
																			<form method="post" enctype="multipart/form-data">
																			<table>
																					<tr class="row_denomination">
																							<td class="column_denomination" colspan="2">Change password</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Your password</td>

																							<td class="column_data">
																									<input class="jquery_form" name="old_password" type="password" required>
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">New password</td>

																							<td class="column_data">
																									<input class="jquery_form" name="new_password" type="password" required>
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Repeat new password</td>

																							<td class="column_data">
																									<input class="jquery_form" name="repeat_password" type="password" required>
																							</td>
																					</tr>

																					<tr>
																							<td class="column_submit" colspan="2">
																									<input class="jquery_form" name="submit" type="submit" value="Change password">
																							</td>
																					</tr>
																			</table>
																			</form>
																	</div>
															</div>
													</div>

<?php 
		include($ui->panel["full"]["en"]["end"]);
?>