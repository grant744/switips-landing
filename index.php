<?php
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #
# # # # # # # # # # # Параметры загрузки сайта
# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #

# Запуск сессий
session_start();

# Скрыть все ошибки
error_reporting(E_ALL | E_STRICT) ;
ini_set('display_errors', 'Off');

# Загрузка библиотеки "Встроенные плагины"
include("engine/unit.class.php");
$unit = new unit;

# Загрузка библиотеки "Программные интерфейсы"
include("project/source/ui/ui.class.php");
$ui = new ui;

# Загрузка библиотеки "Данные о проекте"
include("project/source/classes/project.class.php");
$project = new project;

# Языковые настройки 
if (@$_SESSION["current_language"] == FALSE) {
		# Язык по умолчанию
		$_SESSION["current_language"] = "ru";
}

# Загрузка архитектуры групп и ссылок
include("project/root.php");
?>