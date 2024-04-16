<?php
require 'connect.php';
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
  <body style="min-height: 500px;" class="d-flex text-white bg-dark">
    
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <!-- Шаг №4 -->
  <section class="px-3 text-center">
    <h1 class="text-warning">Поздравляем с выбором персонажа</h1>
    <a class="lik-success" href="index.php">Перейти на главную страницу</a>
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
