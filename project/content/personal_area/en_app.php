<?php
		include($ui->panel["full"]["en"]["begin"]);
?>

													<div class="centering">
															<div class="restriction">
																	<link rel="stylesheet" type="text/css" href="/project/content/personal_area/style/app.style.css">

<?php
		if (isset($_GET["sessions"]))  {
		$title_page = "Profile activity";
?>

																	<title><?=$title_page; ?></title>
																	<div class="title"><?=$title_page; ?></div>

																	<div class="function_line">
																			<a href="/personal_area"><p style="margin: 0" class="item">Main screen</p></a>
																			<a href="/personal_area&sessions"><p class="item">Profile activity</p></a>
																	</div>

																	<div class="table_place">
																			<table style="width: 100%">
																					<tr class="row_denomination">
																							<td class="column_denomination">Authorization number</td>
																							<td class="column_denomination">Time</td>
																							<td class="column_denomination">Browser</td>
																					</tr>

<?php 
		// Соеденение с базой данных MySQL
		include("project/source/classes/mysql.php");

		if ($sql) {
				$login = $_SESSION["login"];

				$query = "		SELECT * FROM table_account_sessions WHERE login = '$login'		";	
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
																							<td class="column_data">$formatted_time</td>
																							<td class="column_data">$query_array[browser]</td>
																					</tr>\n\n
_END;
								}
						} else {
echo <<<_END
																					<tr class="row_data">
																							<td colspan="3" class="column_data">Нет данных</td>
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
		$title_page = "Main screen";
?>

																	<title><?=$title_page; ?></title>
																	<div class="title"><?=$title_page; ?></div>

																	<div class="function_line">
																			<a href="/personal_area"><p style="margin: 0" class="item">Main screen</p></a>
																			<a href="/personal_area&sessions"><p class="item">Profile activity</p></a>
																	</div>

																	<div class="table_place">
																			<table>
																					<tr class="row_denomination">
																							<td class="column_denomination" colspan="2">Current user</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Name</td>
																							<td class="column_data"><?=$_SESSION["username_a"]; ?></td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Registration date</td>
																							<td class="column_data"><?=date("m.d.y", $_SESSION["reg_date"]); ?></td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Login in the system</td>
																							<td class="column_data"><?=$_SESSION["login"]; ?></td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Access rights</td>
																							<td class="column_data"><?=$_SESSION["access"]; ?></td>
																					</tr>
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