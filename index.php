<?php
require 'connect.php';
$dnone = "d-none";
$btnDnone = "";
$person1 = R::load('persons', 1);
$person2 = R::load('persons', 2);
$person3 = R::load('persons', 3);
$person4 = R::load('persons', 4);
$person5 = R::load('persons', 5);
$person6 = R::load('persons', 6);
if ($person1->name != NULL || $person2->name != NULL || $person3->name != NULL || $person4->name != NULL || $person5->name != NULL || $person6->name != NULL ) {
  $dnone = "";
}
else {
  $dnone = "d-none";
}

if ($person1->name != NULL && $person2->name != NULL && $person3->name != NULL && $person4->name != NULL && $person5->name != NULL && $person6->name != NULL ) {
  $btnDnone = "d-none";
}
else {
  $btnDnone = "";
}

if (isset($_POST['nameSend'])) {
  $_SESSION['name'] = $_POST['name'];
  header('Location: takePerson.php');
}

?>
<!doctype html>
<html lang="ru" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Сердце отдаю детям</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex text-white bg-dark">
    
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <button type="button" class="btn btn-secondary text-white mx-4" data-bs-toggle="modal" data-bs-target="#screenSwap">Переход между окнами?</button>
        <button type="button" class="btn btn-secondary text-white" data-bs-toggle="modal" data-bs-target="#screenShot">Как сделать скрин?</button>
      </nav>
    </div>
  </header>
  <!-- ДП -->
  <section class="px-3 text-center">
    <img width="200" src="https://oktemsec.ru/wp-content/uploads/2021/02/%D0%9E%D1%85%D0%BB%D0%BE%D0%BF%D0%BA%D0%BE%D0%B2%D0%B0-%D0%98%D1%80%D0%B8%D0%BD%D0%B0-%D0%98%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%BD%D0%B0.jpeg" alt="">
    <h3>Добро пожаловать<br>
    на открытое занятие<br>
    <span class="text-primary">"Знакомство со средой программирования Scratch 3.0"</span></h3>
  </section>

  <!-- Шаг №1 -->
  <hr size="5">
  <section class="px-3">
    <div class="<?= $btnDnone; ?>">
      <h1 class="text-warning">Шаг №1 Распределение по номерам</h1>
      <p class="lead">
        <p><img width="100" src="https://oktemsec.ru/wp-content/uploads/2021/04/white.png" alt=""></p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg btn-secondary fw-bold border-white bg-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Выбрать персонажа</button>
      </p>
    </div>
    <!-- PERSONS LIST -->
    <div class="personsList text-center <?= $dnone; ?>">
      <!-- row -->
      <div style="min-height: 250px;" class="row">
        <h1 class="text-white">Итоги распределения:</h1>
        <div class="col-sm-4">
          <div class="person <?= $visible1; ?>">
            <h3>№1</h3>
            <img src="https://oktemsec.ru/wp-content/uploads/2021/04/white.png" width="100">
            <p><?=$person1->name; ?></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="person <?= $visible2; ?>">
            <h3>№2</h3>
            <img src="https://oktemsec.ru/wp-content/uploads/2021/04/red.png" width="100">
            <p><?=$person2->name; ?></p>
          </div> 
        </div>
        <div class="col-sm-4">
          <div class="person <?= $visible3; ?>">
            <h3>№3</h3>
            <img src="https://oktemsec.ru/wp-content/uploads/2021/04/purple.png" width="100">
            <p><?=$person3->name; ?></p>
          </div>
        </div>
      </div>
      <!-- end row -->
      <!-- row -->
      <div class="row mb-4">
        <div class="col-sm-4">
          <div class="person <?= $visible4; ?>">
            <h3>№4</h3>
            <img src="https://oktemsec.ru/wp-content/uploads/2021/04/orange.png" width="100">
            <p><?=$person4->name; ?></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="person <?= $visible5; ?>">
            <h3>№5</h3>
            <img src="https://oktemsec.ru/wp-content/uploads/2021/04/green.png" width="100">
            <p><?=$person5->name; ?></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="person <?= $visible6; ?>">
            <h3>№6</h3>
            <img src="https://oktemsec.ru/wp-content/uploads/2021/04/blue.png" width="100">
            <p><?=$person6->name; ?></p>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- END PERSONS LIST -->
  </section>
  <hr size="5">

  <!-- Шаг №2 -->
  <section class="px-3">
    <h1 class="text-warning">Шаг №2 Выбор проекта</h1>
    
    <div class="row mb-4">
      <div class="col-sm-4">
        <div class="card text-dark" style="width: 18rem;">
          <img src="https://oktemsec.ru/wp-content/uploads/2021/04/Движения-мяча.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Мяч в корзину!</h5>
            <p class="card-text">Описание проекта</p>
            <a target="_blank" href="https://scratch.mit.edu/projects/511825402" class="btn btn-primary">Посмотреть проект</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-dark" style="width: 18rem;">
          <img src="https://oktemsec.ru/wp-content/uploads/2021/04/Инструменты.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Музыкант</h5>
            <p class="card-text">Описание проекта</p>
            <a target="_blank" href="https://scratch.mit.edu/projects/513636945" class="btn btn-primary">Посмотреть проект</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-dark" style="width: 18rem;">
          <img src="https://oktemsec.ru/wp-content/uploads/2021/04/Спаси-животных.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Спаси животных</h5>
            <p class="card-text">Описание проекта</p>
            <a target="_blank" href="https://scratch.mit.edu/projects/513634416" class="btn btn-primary">Посмотреть проект</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-sm-4">
        <div class="card text-dark" style="width: 18rem;">
          <img src="https://oktemsec.ru/wp-content/uploads/2021/04/Лопни-шарик.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Лопни шарик</h5>
            <p class="card-text">Описание проекта</p>
            <a target="_blank" href="https://scratch.mit.edu/projects/513637917" class="btn btn-primary">Посмотреть проект</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-dark" style="width: 18rem;">
          <img src="https://oktemsec.ru/wp-content/uploads/2021/04/Лятучая-мышь.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Собери звезды</h5>
            <p class="card-text">Описание проекта</p>
            <a target="_blank" href="https://scratch.mit.edu/projects/511758926" class="btn btn-primary">Посмотреть проект</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-dark" style="width: 18rem;">
          <img src="https://oktemsec.ru/wp-content/uploads/2021/04/Лови-еду.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Лови еду</h5>
            <p class="card-text">Описание проекта</p>
            <a target="_blank" href="https://scratch.mit.edu/projects/513640180" class="btn btn-primary">Посмотреть проект</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <hr size="5">

  <!-- Шаг №3 -->
  <section class="px-3 text-center">
    <h1 class="text-start text-warning">Шаг №3 Загрузка скриншотов</h1>
    <div>
        <div class="position-relative mb-2">
          <p><img width="100" src="https://play-lh.googleusercontent.com/uFAlmfmhz9p4KSueKwT6FwwreGiDXSgNeo65oF4F5ynnJucMvAJfsb7A507gOABg4yY" alt=""></p>
          <p><a target="_blank" href="https://docs.google.com/document/d/1zARR4IjFt0VKV7gFa_U6Jw4q_i59XnQ4mBqm6YIj9iU/edit?usp=sharing" class="btn btn-lg btn-secondary fw-bold border-white bg-white stretched-link">Открыть таблицу загрузки</a></p>
        </div>
    </div>
    <p><button type="button" class="btn btn-secondary text-white" data-bs-toggle="modal" data-bs-target="#screenShot">Как сделать скрин?</button></p>
  </section>
  <hr size="5">

  <!-- Шаг №4 -->
  <section class="px-3 text-center">
    <h1 class="text-start text-warning">Шаг №4 Тест</h1>
    <div class="position-relative mb-2">
      <p><img width="100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/1200px-Google_Forms_2020_Logo.svg.png" alt=""></p>
      <p><a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScQOfs7xUEFuGDkZhNe6mmFw0F9SrxVSTh28ESFKg68J8A2oA/viewform?usp=sf_link" class="btn btn-lg btn-secondary fw-bold border-white bg-white stretched-link">Перейти в Google форму</a></p>
    </div>
  </section>
  <hr size="5">

  <footer class="mt-auto text-white-50 text-center">
    <p>Edited by brearey only for @irina_okhlopkova</p>
  </footer>
</div>
  <!-- Modal input Name -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="staticBackdropLabel">Введите фамилию и  имя</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
              <div class="mb-3">
                <input name="name" type="text" class="form-control" placeholder="Фамилия Имя" required>
              </div>
          </div>
          <div class="modal-footer">
            <button name="nameSend" type="submit" class="btn btn-primary">Отправить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal screenShot -->
  <div class="modal fade" id="screenShot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark">Клавиша Print Screen [Prt Sc]</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img class="w-100" src="https://oktemsec.ru/wp-content/uploads/2021/04/screenshot.jpg" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Хорошо</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal screenSwap -->
  <div class="modal fade" id="screenSwap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark">Клавиши Alt + Tab</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img class="w-100" src="https://oktemsec.ru/wp-content/uploads/2021/04/screenSwap.jpg" alt="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Хорошо</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
