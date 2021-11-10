<?php
define("HOST", "localhost");
define("USER", "a0598336_testing");
define("PASS", "06092000");
define("DB", "a0598336_testing");

$db = @mysqli_connect(HOST, USER, PASS, DB) or die('Нет соединения с БД');
mysqli_set_charset($db, 'utf8') or die('Не установлена кодировка соединения');
