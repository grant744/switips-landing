<?php 
		$title_page = "Reference";
		include($ui->panel["full"]["en"]["begin"]);

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
																							<td class="column_denomination" colspan="2">Technical details</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Host</td>
																							<td class="column_data"><?=$_SERVER["HTTP_HOST"]; ?></td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Current server time</td>
																							<td class="column_data"><?=date("Y.m.d H:i:s", time()); ?></td>
																					</tr>
																			</table>
																	</div>

																	<div class="table_place">
																			<table>
																					<tr class="row_denomination">
																							<td class="column_denomination" colspan="2">Site details</td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Site creation date</td>
																							<td class="column_data"><?=date("Y.m.d H:i:s", $project->unix_creation_date); ?></td>
																					</tr>

																					<tr class="row_data">
																							<td class="column_data">Site version</td>
																							<td class="column_data"><?=$project->version; ?></td>
																					</tr>
																			</table>
																	</div>
															</div>
													</div>

<?php 
		include($ui->panel["full"]["en"]["end"]);
?>