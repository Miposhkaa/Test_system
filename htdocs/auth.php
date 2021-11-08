<?php
require_once 'config.php';
require_once 'functions.php';
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."ghjsfkld2345");




$result = $db->query("SELECT * FROM `users` WHERE `login` =
  '$login' AND `pass` = '$pass'");
  $user = $result->fetch_assoc();
  if(count($user) == 0){
    echo "Такой пользователь не найден";
    exit();
  }


  setcookie('user', $user['name'], time() + 36000, "/");

  $db->close();

  header('Location:/');
  ?>
