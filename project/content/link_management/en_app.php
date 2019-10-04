<?php
		include($ui->panel["full"]["en"]["begin"]);
?>

													<div class="centering">
															<div class="restriction">
																	<link rel="stylesheet" type="text/css" href="/project/content/link_management/style/app.style.css">

<?php 
		if (isset($_GET["add"])) {
		$title_page = "Adding a new link";

		// Узнаем текущий ID и устанавливаем параметры форм
		// -------------------------------------------------------------------------------------------------------------------------------------
		include("project/source/classes/mysql.php");

		if ($sql) {
				$query = "	SELECT MAX(id) FROM table_links	";	
				$result = mysqli_query($sql, $query);

				if ($result) {
						$query_rows = mysqli_num_rows($result);
						$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);

						$current_id = $query_array["MAX(id)"] + 1;
						$current_time = time();
						$current_owner = $_SESSION["username_a"]." ".$_SESSION["username_b"];
				}
		}

		// Отправляем данные
		// -------------------------------------------------------------------------------------------------------------------------------------
		if (isset($_POST["submit"])) {
				// Определяем переменные
				$web_address = $_POST["web_address"];

				$query = "		INSERT INTO table_links (add_time, owner, url_link) VALUES ('$current_time', '$current_owner', '$web_address')		";	
				$result = mysqli_query($sql, $query);
													
				if ($result) {
						echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/ok.png)" class="image"></div><div class="message">Link successfully added</div></div>';
				} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Error during query 1</div></div>';
		}
?>

																	<title><?=$title_page; ?></title>
																	<div class="title"><?=$title_page; ?></div>

																	<div class="function_line">
																			<a href="/link_management"><p style="margin: 0" class="item">List of links</p></a>
																			<a href="/link_management&add"><p class="item">Add new link</p></a>
																			<a href="/link_management&general_statistics"><p class="item">General statistics</p></a>
																			<a href="/link_management&history_visits"><p class="item">History of visits</p></a>
																	</div>

																	<div class="table_place">
																			<form method="post" enctype="multipart/form-data">
																			<table style="width: 100%">
																					<tr class="row_denomination">
																							<td class="column_denomination">Reference number</td>
																							<td class="column_denomination">Date added</td>
																							<td class="column_denomination">Owner</td>
																							<td class="column_denomination">Address</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">
																									<input class="jquery_form" name="id" type="text" value="<?=$current_id; ?>" disabled="disabled">
																							</td>

																							<td class="column_data">
																									<input class="jquery_form" name="" type="text" value="<?=date('m.d.y', $current_time); ?>" disabled="disabled">
																							</td>

																							<td class="column_data">
																									<input class="jquery_form" name="" type="text" value="<?=$current_owner; ?>" disabled="disabled">
																							</td>

																							<td class="column_data">
																									<input class="jquery_form" name="web_address" type="text" required>
																							</td>
																					</tr>

																					<tr>
																							<td colspan="4" class="column_submit">
																									<input class="jquery_form" name="submit" type="submit" value="Add link">
																							</td>
																					</tr>
																			</table>
																			</form>
																	</div>
<?php
		} elseif (isset($_GET["general_statistics"]))  {
		$title_page = "General statistics";
?>

																	<title><?=$title_page; ?></title>
																	<div class="title"><?=$title_page; ?></div>

																	<div class="function_line">
																			<a href="/link_management"><p style="margin: 0" class="item">List of links</p></a>
																			<a href="/link_management&add"><p class="item">Add new link</p></a>
																			<a href="/link_management&general_statistics"><p class="item">General statistics</p></a>
																			<a href="/link_management&history_visits"><p class="item">History of visits</p></a>
																	</div>

																	<div class="table_place">
																			<table style="width: 100%">
																					<tr class="row_denomination">
																							<td class="column_denomination">Reference number</td>
																							<td class="column_denomination">Link address</td>
																							<td class="column_denomination">Owner</td>
																							<td class="column_denomination">Jumps for all time</td>
																					</tr>
<?php
		// Соеденение с базой данных MySQL
		include("project/source/classes/mysql.php");

		if ($sql) {
				$query = "		SELECT * FROM table_links ORDER BY id ASC		";	
				$result = mysqli_query($sql, $query);

				if ($result) {
						$query_rows = mysqli_num_rows($result);

						if ($query_rows > 0) {
								for ($j = 0; $j < $query_rows; ++$j) {
										$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);
										$link_id = $query_array["id"];

										// Считаем переходы за все время
										$query_2 = "		SELECT * FROM table_links_history WHERE url_id = '$link_id'		";	
										$result_2 = mysqli_query($sql, $query_2);
										$query_rows_2 = mysqli_num_rows($result_2);
echo <<<_END
																					<tr class="row_data">
																							<td class="column_data">$query_array[id]</td>
																							<td class="column_data">$query_array[url_link]</td>
																							<td class="column_data">$query_array[owner]</td>
																							<td class="column_data">$query_rows_2</td>
																					</tr>\n\n
_END;
								}
						} else {
echo <<<_END
																					<tr class="row_data">
																							<td colspan="5" class="column_data">No data</td>
																					</tr>
_END;
						}
				}
		}
?>		
																			</table>
																	</div>
<?php
		} elseif (isset($_GET["history_visits"]))  {
		$title_page = "History of visits";
?>

																	<title><?=$title_page; ?></title>
																	<div class="title"><?=$title_page; ?></div>

																	<div class="function_line">
																			<a href="/link_management"><p style="margin: 0" class="item">List of links</p></a>
																			<a href="/link_management&add"><p class="item">Add new link</p></a>
																			<a href="/link_management&general_statistics"><p class="item">General statistics</p></a>
																			<a href="/link_management&history_visits"><p class="item">History of visits</p></a>
																	</div>

																	<div class="table_place">
																			<table style="width: 100%">
																					<tr class="row_denomination">
																							<td class="column_denomination">Transition number</td>
																							<td class="column_denomination">Reference number</td>
																							<td class="column_denomination">Link address</td>
																							<td class="column_denomination">Date</td>
																							<td class="column_denomination">Browser</td>
																					</tr>

<?php 
		// Соеденение с базой данных MySQL
		include("project/source/classes/mysql.php");

		if ($sql) {
				$query = "		SELECT * FROM table_links_history		";	
				$result = mysqli_query($sql, $query);

				if ($result) {
						$query_rows = mysqli_num_rows($result);

						if ($query_rows > 0) {
								for ($j = 0; $j < $query_rows; ++$j) {
										$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);
										$formatted_time = date("Y.m.d H:i:s", $query_array["data"]);
echo <<<_END
																					<tr class="row_data">
																							<td class="column_data">$query_array[id]</td>
																							<td class="column_data">$query_array[url_id]</td>
																							<td class="column_data">$query_array[url_link]</td>
																							<td class="column_data">$formatted_time</td>
																							<td class="column_data">$query_array[browser]</td>
																					</tr>\n\n
_END;
								}
						} else {
echo <<<_END
																					<tr class="row_data">
																							<td colspan="5" class="column_data">No data</td>
																					</tr>
_END;
						}
				}
		}
?>
																			</table>
																	</div>
<?php 
		} else { 
		$title_page = "List of links";

		// Соеденение с базой данных MySQL
		include("project/source/classes/mysql.php");

		// Удаляем ссылку
		// -------------------------------------------------------------------------------------------------------------------------------------
		if (isset($_POST["submit"])) {
				$url_id_post = $_POST["url_id_post"];

				// Формируем запрос
				$query = "		DELETE FROM table_links WHERE id = '$url_id_post'		";	
				$result = mysqli_query($sql, $query);

				if ($result) {
						echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/ok.png)" class="image"></div><div class="message">Link removed successfully</div></div>';
				} else echo '<div class="notification"><div style="background-image: url(/project/source/ui/panel/image/notification_images/error_image.png)" class="image"></div><div class="message">Error during query 1</div></div>';
		}
?>

																	<title><?=$title_page; ?></title>
																	<div class="title"><?=$title_page; ?></div>

																	<div class="function_line">
																			<a href="/link_management"><p style="margin: 0" class="item">List of links</p></a>
																			<a href="/link_management&add"><p class="item">Add new link</p></a>
																			<a href="/link_management&general_statistics"><p class="item">General statistics</p></a>
																			<a href="/link_management&history_visits"><p class="item">History of visits</p></a>
																	</div>

																	<div class="table_place">
																			<table style="width: 100%">
																					<tr class="row_denomination">
																							<td class="column_denomination">Reference number</td>
																							<td class="column_denomination">Date added</td>
																							<td class="column_denomination">Owner</td>
																							<td class="column_denomination">Link address</td>
																							<td class="column_denomination"></td>
																					</tr>
																					
<?php
		if ($sql) {
				$query = "		SELECT * FROM table_links ORDER BY id ASC		";	
				$result = mysqli_query($sql, $query);

				if ($result) {
						$query_rows = mysqli_num_rows($result);

						if ($query_rows > 0) {
								for ($j = 0; $j < $query_rows; ++$j) {
										$query_array = mysqli_fetch_array($result, MYSQLI_ASSOC);
										$formatted_time = date("Y.m.d H:i:s", $query_array["add_time"]);
echo <<<_END
																					<tr class="row_data">
																							<td class="column_data">$query_array[id]</td>
																							<td class="column_data">$formatted_time</td>
																							<td class="column_data">$query_array[owner]</td>
																							<td class="column_data">$query_array[url_link]</td>

																							<td class="column_data">
																									<form method="post" enctype="multipart/form-data">
																											<input type="hidden" name="url_id_post" value="$query_array[id]">
																											<input class="jquery_form" name="submit" type="submit" value="Delete">
																									</form>
																							</td>
																					</tr>\n\n
_END;
								}
						} else {
echo <<<_END
																					<tr class="row_data">
																							<td colspan="5" class="column_data">No data</td>
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
		include($ui->panel["full"]["en"]["end"]);
?>