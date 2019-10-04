<?php
class ui {
		// public $main = array("begin" => "project/source/ui/main/cover_begin.php", "end" => "project/source/ui/main/cover_end.php");
		// include($ui->main["begin"]);

		public $lending = array(
								"ru" => "project/source/ui/lending/cover_ru.php",
								"en" => "project/source/ui/lending/cover_en.php"
								);

		public $login = array(
							"ru" => array(
									"begin" => "project/source/ui/login/login_ru_begin.php",
									"end" => "project/source/ui/login/login_ru_end.php"
										),

							"en" => array(
										"begin" => "project/source/ui/login/login_en_begin.php",
										"end" => "project/source/ui/login/login_en_end.php"
										)
							);

		public $panel = array(
							"full" => array(
											"ru" => array(
														"begin" => "project/source/ui/panel/panel_full_ru_begin.php",
														"end" => "project/source/ui/panel/panel_full_ru_end.php"
														),

											"en" => array(
														"begin" => "project/source/ui/panel/panel_full_en_begin.php",
														"end" => "project/source/ui/panel/panel_full_en_end.php"
														)
											)
							);
}
?>