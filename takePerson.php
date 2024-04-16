<?php
require 'connect.php';
$person1 = R::load('persons', 1);
$person2 = R::load('persons', 2);
$person3 = R::load('persons', 3);
$person4 = R::load('persons', 4);
$person5 = R::load('persons', 5);
$person6 = R::load('persons', 6);

if (isset($_POST)) {
  switch ($_POST['take']) {
    case '1':
      $person1 = R::load('persons', 1);
      if (isset($_SESSION['name']) && $person1->name == NULL) {
        $person1->name = $_SESSION['name'];
        R::store($person1);
        header('Location: complete.php');
      }
      else {
        die('Персонаж уже занят');
      }
      break;
    case '2':
      $person2 = R::load('persons', 2);
      if (isset($_SESSION['name']) && $person2->name == NULL) {
        $person2->name = $_SESSION['name'];
        R::store($person2);
        header('Location: complete.php');
      }
      else {
        die('Персонаж уже занят');
      }
      break;
    case '3':
      $person3 = R::load('persons', 3);
      if (isset($_SESSION['name']) && $person3->name == NULL) {
        $person3->name = $_SESSION['name'];
        R::store($person3);
        header('Location: complete.php');
      }
      else {
        die('Персонаж уже занят');
      }
      break;
    case '4':
      $person4 = R::load('persons', 4);
      if (isset($_SESSION['name']) && $person4->name == NULL) {
        $person4->name = $_SESSION['name'];
        R::store($person4);
        header('Location: complete.php');
      }
      else {
        die('Персонаж уже занят');
      }
      break;
    case '5':
      $person5 = R::load('persons', 5);
      if (isset($_SESSION['name']) && $person5->name == NULL) {
        $person5->name = $_SESSION['name'];
        R::store($person5);
        header('Location: complete.php');
      }
      else {
        die('Персонаж уже занят');
      }
      break;
    case '6':
      $person6 = R::load('persons', 6);
      if (isset($_SESSION['name']) && $person6->name == NULL) {
        $person6->name = $_SESSION['name'];
        R::store($person6);
        header('Location: complete.php');
      }
      else {
        die('Персонаж уже занят');
      }
      break;
  }
}

if ($person1->name == NULL) {
  $visible1 = '';
}
else {
  $visible1 = 'd-none';
}
if ($person2->name == NULL) {
  $visible2 = '';
}
else {
  $visible2 = 'd-none';
}
if ($person3->name == NULL) {
  $visible3 = '';
}
else {
  $visible3 = 'd-none';
}
if ($person4->name == NULL) {
  $visible4 = '';
}
else {
  $visible4 = 'd-none';
}
if ($person5->name == NULL) {
  $visible5 = '';
}
else {
  $visible5 = 'd-none';
}
if ($person6->name == NULL) {
  $visible6 = '';
}
else {
  $visible6 = 'd-none';
}

?>
<!doctype html>
<html lang="ru" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Выбрать персонажа</title>

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

      input.amongus:hover {
        width: 110px;
        height: 160px;
        box-shadow: 0 0 10px rgba(255,255,255,0.5);

      }
      input.amongus {
        color: rgba(0,0,0,0);
        border: none;
        padding: 20px;
        height: 150px;
        width: 100px;
        transition: 0.2s;
      }
      input.amongus-white {
        background: url('https://oktemsec.ru/wp-content/uploads/2021/04/white.png') no-repeat center center;
        background-size: contain;
      }
      input.amongus-red {
        background: url('https://oktemsec.ru/wp-content/uploads/2021/04/red.png') no-repeat center center;
        background-size: contain;
      }
      input.amongus-purple {
        background: url('https://oktemsec.ru/wp-content/uploads/2021/04/purple.png') no-repeat center center;
        background-size: contain;
      }
      input.amongus-orange {
        background: url('https://oktemsec.ru/wp-content/uploads/2021/04/orange.png') no-repeat center center;
        background-size: contain;
      }
      input.amongus-green {
        background: url('https://oktemsec.ru/wp-content/uploads/2021/04/green.png') no-repeat center center;
        background-size: contain;
      }
      input.amongus-blue {
        background: url('https://oktemsec.ru/wp-content/uploads/2021/04/blue.png') no-repeat center center;
        background-size: contain;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body style="min-height: 700px;" class="d-flex text-white bg-dark">
    
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <!-- Шаг №4 -->
  <section class="px-3 text-center">
    <h1 class="text-warning">Выберите персонажа</h1>
      <!-- row -->
      <div style="min-height: 250px;" class="row">
        <div class="col-sm-4">
          <div class="person <?= $visible1; ?>">
            <h3>№1</h3>
            <form action="" method="post">
              <input name="take" class="amongus amongus-white" type="submit" value="1">
            </form>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="person <?= $visible2; ?>">
            <h3>№2</h3>
            <form action="" method="post">
              <input name="take" class="amongus amongus-red" type="submit" value="2">
            </form>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="person <?= $visible3; ?>">
            <h3>№3</h3>
            <form action="" method="post">
              <input name="take" class="amongus amongus-purple" type="submit" value="3">
            </form>
          </div>
        </div>
      </div>
      <!-- end row -->
      <!-- row -->
      <div class="row mb-4">
        <div class="col-sm-4">
          <div class="person <?= $visible4; ?>">
            <h3>№4</h3>
            <form action="" method="post">
              <input name="take" class="amongus amongus-orange" type="submit" value="4">
            </form>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="person <?= $visible5; ?>">
            <h3>№5</h3>
            <form action="" method="post">
              <input name="take" class="amongus amongus-green" type="submit" value="5">
            </form>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="person <?= $visible6; ?>">
            <h3>№6</h3>
            <form action="" method="post">
              <input name="take" class="amongus amongus-blue" type="submit" value="6">
            </form>
          </div>
        </div>
      </div>
      <!-- end row -->
  </section>
</div>

  <!-- Modal screenShot -->
  <div class="modal fade" id="screenShot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
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
