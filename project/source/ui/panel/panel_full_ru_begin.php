<?php
// Проверка авторизации
// -------------------------------------------------------------------------------------------------------------------------------------
if ($_SESSION["id"] == FALSE) {
		Header("Location: /login");
}

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
			<link rel="shortcut icon" href="/project/source/ui/panel/image/favicon.ico" type="image/x-icon">
			<link rel="stylesheet" type="text/css" href="/project/source/ui/panel/style/common.css" >
			<?php include($unit->jQuery); ?>
			<?php include($unit->jQueryFormStyler); ?>
			<?php include($unit->scroll_up); ?>
	</head>

	<body>
			<!-- _BASIS --><div id="_BASIS">
								
					<div class="flex">
							<div class="menu_place">
									<!-- sticky -->
									<div class="sticky">
											<div class="container">
													<div class="restriction">
															<div class="logo"></div>
													</div>

													<div class="restriction">
															<a href="/settings"><div class="item">
																	<div style="background-image: url(/project/source/ui/panel/image/menu_images/settings.png)" class="item_image"></div>
																	<div class="item_name">Настройки</div>
																	<div class="border_bottom"></div>
															</div></a>

															<a href="/link_management"><div class="item">
																	<div style="background-image: url(/project/source/ui/panel/image/menu_images/link.png)" class="item_image"></div>
																	<div class="item_name">Центр управления реферальными ссылками</div>
																	<div class="border_bottom"></div>
															</div></a>

															<a href="/order_list"><div class="item">
																		<div style="background-image: url(/project/source/ui/panel/image/menu_images/orders.png)" class="item_image"></div>
																		<div class="item_name">Список заказов</div>
																		<div class="border_bottom"></div>
															</div></a>

															<a href="/user_management"><div class="item">
																		<div style="background-image: url(/project/source/ui/panel/image/menu_images/lock.png)" class="item_image"></div>
																		<div class="item_name">Центр управления пользователями</div>
																		<div class="border_bottom"></div>
															</div></a>

															<a href="/reference"><div class="item">
																		<div style="background-image: url(/project/source/ui/panel/image/menu_images/reference.png)" class="item_image"></div>
																		<div class="item_name">Справка</div>
																		<div class="border_bottom"></div>
															</div></a>
													</div>
											</div>
									</div>
									<!-- sticky end -->
							</div>

							<div class="content_place">
									<div class="container">
											<div class="header">
													<!-- left alignment -->
													<div class="button_menu_off"><div class="button_menu_image"></div></div>
													<div class="button_menu_on"><div class="button_menu_image"></div></div>

													<!-- right alignment -->
													<a href="/exit"><div class="exit_place"><div class="exit_image"></div></div></a>

													<a href="/personal_area"><div class="username_place">
															<div class="user_image"></div>
															<div class="username"><?php echo $_SESSION["username_a"]." ".$_SESSION["username_b"]; ?><div class="small"><?=$_SESSION["login"]; ?></div></div>
													</div></a>

													<a href="/lang&type=en"><div class="language_place"><div class="language_type">En</div></div></a>
													<a href="/lang&type=ru"><div class="language_place"><div class="language_type_active">Ру</div></div></a>
											</div>

											<div class="content">
											<!-- content apps -->