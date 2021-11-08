
<?php
ini_set("display_errors", 1);
error_reporting(-1);
require_once 'config.php';
require_once 'functions.php';

$results = get_results();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Система тестирования</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white  border-bottom larger shadow">
<h5 class="my-0  mr-md-auto font-weight-normal">Привет, <?= $_COOKIE['user']?>.</h5>
<nav class="my-2 my-md-0 mr-md-3">
  <a class="p-2 text-dark" href="index.php">На главную</a>
<a class="p-2 text-dark" href="about.php">О проекте</a>
<a class="p-2 text-dark" href="about.php">Контакты</a>


</nav>
<a class="btn btn-outline-primary" href="/testing.php">Назад</a>
</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Результаты тестов:</h1>
</div>
  <div class="wrap">
    <div class="row mb-3">
    <div class="col-4 themed-grid-col">Имя пользователя</div>
    <div class="col-4 themed-grid-col">Id теста</div>
    <div class="col-4 themed-grid-col">Баллы </div>

</div>
<?php if ($results): ?>
<?php foreach($results as $result): ?>
  <div class="row mb-3">
  <div class="col-4 themed-grid-col"><?=$result['user']?></div>
  <div class="col-4 themed-grid-col"><?=$result['test_name']?></div>
  <div class="col-4 themed-grid-col"><?=$result['result']?>%</div>

  </div>
<?php endforeach; ?>
<?php else: ?>
  <h3>Нет результатов</h3>
<?php endif; ?>
  </div>
</body>
</html>
