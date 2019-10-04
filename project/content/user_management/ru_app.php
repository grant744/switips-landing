<?php
		include($ui->panel["full"]["ru"]["begin"]);
?>

													<div class="centering">
															<div class="restriction">
																	<link rel="stylesheet" type="text/css" href="/project/content/user_management/style/app.style.css">

<?php
		if (isset($_GET["add"]))  {
		$title_page = "Регистрация нового пользователя";

		// Узнаем текущий номер полльзователя и устанавливаем параметры форм
		// -------------------------------------------------------------------------------------------------------------------------------------
		include("project/source/classes/mysql.php");

		if ($sql) {
				$query = "		SELECT MAX(id) FROM table_account		";	
				$result = mysqli_query($sql, $query);

				if ($result) {
						$query_rows = mysqli_num_rows($result);
						$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);

						$current_user_id = $query_array["MAX(id)"] + 1;
						$current_time = time();
				}
		}

		// Отправляем данные
		// -------------------------------------------------------------------------------------------------------------------------------------
		if (isset($_POST["submit"])) {
				// Определяем переменные
				$login = $_POST["login"];
				$reg_date = $_POST["reg_date"];
				$username_a = $_POST["username_a"];
				$username_b = $_POST["username_b"];
				$username_c = $_POST["username_c"];
				$password = $_POST["password"];
				$access = $_POST["access"];

				$query = "		INSERT INTO table_account (login, password, reg_date, username_a, username_b, username_c, access) VALUES ('$login', '$password', '$current_time', '$username_a', '$username_b', '$username_c', '$access')		";	
				$result = mysqli_query($sql, $query);
													
				if ($result) {
						echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/ok.png)" class="image"></div><div class="message">Пользователь успешно зарегистрирован</div></div>';
				} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Ошибка в ходе выполнения запроса 1</div></div>';
		}
?>

																	<title><?=$title_page; ?></title>
																	<div class="title"><?=$title_page; ?></div>

																	<div class="function_line">
																			<a href="/user_management"><p style="margin: 0" class="item">Список пользователей</p></a>
																			<a href="/user_management&add"><p class="item">Регистрация нового пользователя</p></a>
																	</div>

																	<div class="table_place">
																			<form method="post" enctype="multipart/form-data">
																			<table>
																					<tr class="row_denomination">
																							<td class="column_denomination" colspan="2">Введите данные</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Номер пользователя</td>

																							<td class="column_data">
																									<input class="jquery_form" type="text" name="user_id" value="<?=$current_user_id; ?>" disabled="disabled">
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Логин</td>

																							<td class="column_data">
																									<input class="jquery_form" type="text" name="login" value="">
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Дата регистрации</td>

																							<td class="column_data">
																									<input class="jquery_form" type="text" name="reg_date" value="<?=date('m.d.y', $current_time); ?>" disabled="disabled">
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Имя</td>

																							<td class="column_data">
																									<input class="jquery_form" type="text" name="username_a" value="">
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Фамилия</td>

																							<td class="column_data">
																									<input class="jquery_form" type="text" name="username_b" value="">
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Отчество</td>

																							<td class="column_data">
																									<input class="jquery_form" type="text" name="username_c" value="">
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Пароль</td>

																							<td class="column_data">
																									<input class="jquery_form" type="text" name="password" value="">
																							</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Права доступа</td>

																							<td class="column_data">
																									<select class="jquery_form" name="access">
																										    <option value="full">full</option>
																									</select>
																							</td>
																					</tr>

																					<tr>
																							<td class="column_submit" colspan="2">
																									<input class="jquery_form" name="submit" type="submit" value="Зарегистрировать">
																							</td>
																					</tr>
																			</table>
																			</form>
																	</div>
<?php 
		} else { 
		$title_page = "Список пользователей";

		// Соеденение с базой данных MySQL
		include("project/source/classes/mysql.php");

		// Удаляем ссылку
		// -------------------------------------------------------------------------------------------------------------------------------------
		if (isset($_POST["submit"])) {
				$user_id_post = $_POST["user_id_post"];

				// Формируем запрос
				$query = "		DELETE FROM table_account WHERE id = '$user_id_post'		";	
				$result = mysqli_query($sql, $query);

				if ($result) {
						echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/ok.png)" class="image"></div><div class="message">Пользователь успешно удален</div></div>';
				} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Ошибка в ходе выполнения запроса 1</div></div>';
		}
?>

																	<title><?=$title_page; ?></title>
																	<div class="title"><?=$title_page; ?></div>

																	<div class="function_line">
																			<a href="/user_management"><p style="margin: 0" class="item">Список пользователей</p></a>
																			<a href="/user_management&add"><p class="item">Регистрация нового пользователя</p></a>
																	</div>

																	<div class="table_place">
																			<table style="width: 100%">
																					<tr class="row_denomination">
																							<td class="column_denomination">Номер пользователя</td>
																							<td class="column_denomination">Логин</td>
																							<td class="column_denomination">Дата регистрации</td>
																							<td class="column_denomination">Имя</td>
																							<td class="column_denomination">Фамилия</td>
																							<td class="column_denomination">Отчество</td>
																							<td class="column_denomination">Права доступа</td>
																							<td class="column_denomination"></td>
																					</tr>

<?php 
		if ($sql) {
				$query = "		SELECT * FROM table_account		";	
				$result = mysqli_query($sql, $query);

				if ($result) {
						$query_rows = mysqli_num_rows($result);

						if ($query_rows > 0) {
								for ($j = 0; $j < $query_rows; ++$j) {
										$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);
										$formatted_time = date("Y.m.d H:i:s", $query_array["reg_date"]);
echo <<<_END
																					<tr class="row_data">
																							<td class="column_data">$query_array[id]</td>
																							<td class="column_data">$query_array[login]</td>
																							<td class="column_data">$formatted_time</td>
																							<td class="column_data">$query_array[username_a]</td>
																							<td class="column_data">$query_array[username_b]</td>
																							<td class="column_data">$query_array[username_c]</td>
																							<td class="column_data">$query_array[access]</td>

																							<td class="column_data">
																									<form method="post" enctype="multipart/form-data">
																											<input type="hidden" name="user_id_post" value="$query_array[id]">
																											<input class="jquery_form" name="submit" type="submit" value="Удалить">
																									</form>
																							</td>
																					</tr>\n\n
_END;
								}
						} else {
echo <<<_END
																					<tr class="row_data">
																							<td colspan="8" class="column_data">Нет данных</td>
																					</tr>
_END;
						}
				}
		}
?>
																			</table>
																	</div>
<?php
		}
?>
															</div>
													</div>
<?php
		include($ui->panel["full"]["ru"]["end"]);
?>