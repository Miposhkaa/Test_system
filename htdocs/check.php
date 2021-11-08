<?php
require_once 'config.php';
require_once 'functions.php';
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
if(mb_strlen($login)<5 || mb_strlen($login)>90){
  echo "Недопустимая длина логина";
  exit();
} else if(mb_strlen($name)<3 || mb_strlen($name)>50){
  echo "Недопустимая длина имени";
  exit();
}else if(mb_strlen($pass)<2 || mb_strlen($pass)>6){
  echo "Недопустимая длина пароля(от 2 до 6 символов)";
  exit();
}

$pass = md5($pass."ghjsfkld2345");


$db->query("INSERT INTO `users` (`login`,`pass`,`name`)
VALUES('$login', '$pass','$name')");
$db->query("INSERT INTO `example1` (`login`)
VALUES('$login')");

$db->close();

header('Location:/');

?>
