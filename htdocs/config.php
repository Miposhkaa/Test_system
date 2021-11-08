<?php
define("HOST", "ftp.f0453107.xsph.ru");
define("USER", "f0453107_testing");
define("PASS", "DanilA06092000");
define("DB", "f0453107_testing");

$db = @mysqli_connect(HOST, USER, PASS, DB) or die('Нет соединения с БД');
mysqli_set_charset($db, 'utf8') or die('Не установлена кодировка соединения');
