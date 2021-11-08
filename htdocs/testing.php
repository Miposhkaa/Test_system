<?php
ini_set("display_errors", 1);
error_reporting(-1);
require_once 'config.php';
require_once 'functions.php';

if(isset($_POST['test'])){
  $test = (int)$_POST['test'];
  unset($_POST['test']);
  $result = get_correct_answers($test);
  if(!is_array($result)) exit('Ошибка!');
  //данные теста
  $test_all_data = get_test_data($test);
  // 1-массив вопрос/ответы, 2-правильные ответы, 3-ответы пользователя
  $test_all_data_result = get_test_data_result($test_all_data, $result, $_POST);
  //print_r($_POST);
  //print_r($result);
  //print_r($test_all_data_result);
  echo print_result($test_all_data_result,$test);

  die;
}

//список тестов
$tests = get_tests();

if(isset($_GET['test'])){
  $test_id = (int)$_GET['test'];
  $test_data = get_test_data($test_id);
  if(is_array($test_data) ){
    $count_questions = count($test_data);
    $pagination = pagination($count_questions, $test_data);
  }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Система тестирования</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>


      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white  border-bottom larger shadow">
  <h5 class="my-0  mr-md-auto font-weight-normal">Привет, <?= $_COOKIE['user']?>.</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <?php if($_COOKIE['user'] == 'admin'): ?>
    <a class="p-2 text-dark" href="results.php">Результаты</a>
    <a class="p-2 text-dark" href="index.php">На главную</a>
    <a class="p-2 text-dark" href="about.php">О проекте</a>
    <a class="p-2 text-dark" href="about.php">Контакты</a>
<?php else: ?>
  <a class="p-2 text-dark" href="index.php">На главную</a>
  <a class="p-2 text-dark" href="about.php">О проекте</a>
  <a class="p-2 text-dark" href="about.php">Контакты</a>
<?php endif; ?>

  </nav>
  <a class="btn btn-outline-primary" href="/exit.php">Выход</a>
</div>
<div class="wrap">

  <?php if($tests): ?>

      <h3>Варианты тестов: </h3>
      <?php foreach($tests as $test): ?>
        <p><a href="?test=<?=$test['id']?>"><?=$test['test_name']?></a></p>
      <?php endforeach; ?>


      <br><hr><br>
      <div class="content">
        <?php if(isset($test_data)): ?>

          <p>Всего вопросов: <?=$count_questions?></p>
          <?=$pagination?>
          <span class="none" id="test-id"><?=$test_id?></span>

          <div class="test-data">
            <?php foreach($test_data as $id_question => $item): //получаем каждый конкретный вопрос и ответы?>
              <div class="question" data-id="<?=$id_question?>" id="question-<?=$id_question?>">
                <?php foreach($item as $id_answer => $answer): //проходим по массиву вопрос/ответ ?>

                  <?php if(!$id_answer)://выводим вопрос ?>
                    <p class="q"><?=$answer?></p>
                  <?php else://выводим варианты ответов ?>


                    <p class="a">
                      <input type="radio" id="answer-<?=$id_answer?>" name="question-<?=$id_question?>"
                      value="<?=$id_answer?>">
                      <label for="answer-<?=$id_answer?>"><?=$answer?></label>
                    </p>
                  <?php endif;  //$id_answer ?>

                <?php endforeach; //$item?>

              </div> <!--question -->
            <?php endforeach; //$test_data ?>
          </div><!-- .test-data -->

          <div class="buttons">
            <button class="center btn" id="btn">Закончить тест</button>
          </div>

        <?php else: //isset($test_data)?>
          Выберите тест
        <?php endif; //isset($test_data)?>

      </div> <!-- content -->

    <?php else:  //$tests ?>
      <h3>Нет тестов</h3>
    <?php endif; //$tests?>

  </div><!-- .wrap -->

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="scripts.js"></script>

  <footer class="pt-4 my-md-5 pt-md-5 ">
    <br><hr><br>
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="yRR0ASMzY2s.jpg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">© 2000-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>О проекте</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="about.php">Что это вообще за сайт</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Контакты</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="about.php">Как с нами связаться</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>О нас</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="about.php">Кто мы</a></li>
        </ul>
      </div>
    </div>
  </footer>



</body>
</html>
