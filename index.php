<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма Регистрация</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container mt-4">
    <?php
    if($_COOKIE['user'] == ''):
    ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Добро пожаловать, перед вами процеес входа на тестирование по отдельным дисциплинам.</h1>
      <p class="lead">Если у вас еще нет аккаунта, пройдите процесс регистрации, затем авторизации, если есть, то только авторизации.</p>
    </div>
    <div class="row">
      <div class="col">
        <h1>Регистрация</h1>
        <form action="check.php" method="post">

          <input type="text" class="form-control" name="login" value="" id="login" placeholder="Введите ваш логин"><br>

            <input type="text" class="form-control" name="name" value="" id="name" placeholder="Введите ваше имя"><br>

            <input type="password" class="form-control" name="pass" value="" id="pass" placeholder="Введите ваш пароль"><br>

          <button class="btn btn-success"
          type="submit">Зарегестрировать</button>
        </form>
      </div>
      <div class="col">
        <h1>Авторизация</h1>
        <form action="auth.php" method="post">
          <input type="text" class="form-control" name="login" value="" id="login" placeholder="Введите ваш логин"><br>

               <input type="password" class="form-control" name="pass" value="" id="pass" placeholder="Введите ваш пароль"><br>
          <button class="btn btn-success"
          type="submit">Авторизоваться</button>
        </form>
      </div>
    <?php elseif($_COOKIE['user'] == 'admin'): ?>
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <p class="lead">Привет, <?= $_COOKIE['user']?>, чтобы зайти на страницу теста, нажмите<a href="testing.php"> здесь</a></p>
        <p class="lead">Чтобы просмотреть результаты тестирования всех пользователей, нажмите<a href="results.php"> здесь</a></p>
        <p class="lead">Если вы не <?=$_COOKIE['user']?>. ,<a href="/exit.php"> авторизируйтесь</a> заново</p>
        <br><hr><br>
        <p><h1 class="card-title pricing-card-title"><img src="k4VGxlqewhk.jpg" width="500" height="500"></h1></p>
      </div>
    <?php else: ?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <p class="lead">Привет, <?= $_COOKIE['user']?>, чтобы приступить к тестированию, нажмите<a href="testing.php"> здесь</a></p>
<p class="lead">Если вы не <?=$_COOKIE['user']?>. ,<a href="/exit.php"> авторизируйтесь</a> заново</p>
<br><hr><br>
<p><h1 class="card-title pricing-card-title"><img src="k4VGxlqewhk.jpg" width="500" height="500"></h1></p>
</div>
<?php endif; ?>

    </div>
  </div>

  </body>
  </html>
