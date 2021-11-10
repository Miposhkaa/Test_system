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
<a class="p-2 text-dark" href="about.php">О проекте</a>
<a class="p-2 text-dark" href="about.php">Контакты</a>


</nav>
<a class="btn btn-outline-primary" href="/testing.php">Назад</a>
</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Доброго времени суток, на этой странице вы найдете всю нужную вам информацию</h1>
  <p class="lead">Позвольте представиться, создатели этого чудного сайта:.</p>
</div>
<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Данил Веремьёв</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="wYoLmv9eQzA.jpg" width="500" height="500"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li><a href="https://vk.com/weremyov" >Даня</a></li>
        </ul>

      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Рафаэль Асатрян</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="X-q-PK5Cafc.jpg" width="350" height="500"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li><a href="https://vk.com/dontstopthinkingaboutme">Раф</a></li>

        </ul>
      </div>
    </div>
  </div>

</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">О себе </h1>
<p class="lead">Расскажем немного о себе. Мы молодые программисты. Учимся в Воронежском государственном университете, на Факультете компьютерных наук.
Мы абсолютно разные, из разных семей, из разных городов, но мышление у нас одинаковое и поэтому работать вместе очень легко. Наша команда сделала этот сайт специально
для сдачи практики в университете, все что вы видете на своих экранах, это многочасовой труд, кровь, пот и слезы, через которые мы прошли.</p>
<br><hr><br>
<h1 class="display-4">О проекте </h1>
<p class="lead">Данный сайт представляет собой систему тестирования студентов или школьников по любой возможной дисциплине. Мы надеемся, что он может быть полезным как
для учащихся, так и для их преподавателей. Наше приложение упрощает построение образовательного процесса, а также дает дополнительные возможности для домашнего обучения студентов.</p>
<br><hr><br>
<h1 class="display-4">Наши контакты </h1>
<p class="lead">Вы можете связаться с нами в социальной сети "ВКонтакте" по ссылкам, представленным под фотографиями, а так же по нашей рабочей почте MaksveL_L@mail.ru . Пишите по
любым вопросам, касающимся нашего сайта, постараемся ответить быстро и качественно.</p>
</div>

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
