<?php 
		$title_page = "Справка";
		include($ui->panel["full"]["ru"]["begin"]);

// Debug
// -------------------------------------------------------------------------------------------------------------------------------------
?>


													<div class="centering">
															<div class="restriction">
																	<title><?=$title_page; ?></title>
																	<link rel="stylesheet" type="text/css" href="/project/content/reference/style/app.style.css">

																	<div class="title"><?=$title_page; ?></div>

																	<div class="table_place">
																			<table>
																					<tr class="row_denomination">
																							<td class="column_denomination" colspan="2">Технические данные</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Хост</td>
																							<td class="column_data"><?=$_SERVER["HTTP_HOST"]; ?></td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Текущее время на сервере</td>
																							<td class="column_data"><?=date("Y.m.d H:i:s", time()); ?></td>
																					</tr>
																			</table>
																	</div>

																	<div class="table_place">
																			<table>
																					<tr class="row_denomination">
																							<td class="column_denomination" colspan="2">Сведения о сайте</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Дата создания сайта</td>
																							<td class="column_data"><?=date("Y.m.d H:i:s", $project->unix_creation_date); ?></td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Версия сайта</td>
																							<td class="column_data"><?=$project->version; ?></td>
																					</tr>
																			</table>
																	</div>
															</div>
													</div>

<?php 
		include($ui->panel["full"]["ru"]["end"]);
?>