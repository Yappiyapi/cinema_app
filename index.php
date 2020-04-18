<?php

require_once('config.php');
require_once('functions.php');

session_start();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>pelicula</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&display=swap" rel="stylesheet">
</head>

<body>
  <div class="flex-col-area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 shadow">
      <a href="index.php" class="navbar-brand">
        <h2 class="font">
          Pelicula
          <img src="https://img.icons8.com/pastel-glyph/64/000000/movie-beginning.png" />
        </h2>
      </a>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <?php if ($_SESSION['id']) : ?>
            <li class="nav-item">
              <a href="index.php" class="nav-link">HOME</a>
            <li class="nav-item">
              <a href="sign_out.php" class="nav-link">ログアウト</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a href="index.php" class="nav-link">HOME</a>
            <li class="nav-item">
              <a href="sign_in.php" class="nav-link">ログイン</a>
            </li>
            <li class="nav-item">
              <a href="sign_up.php" class="nav-link">アカウント登録</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
    <div class="slide" id="makeImg">
      <img src="images/ハーレイクイン2.jpg" alt="ハーレイ・クインの華麗なる覚醒 BIRDS OF PREY">
      <img src="images/一度死んでみた.jpg" alt="一度死んでみた">
      <img src="images/パラサイト.jpg" alt="パラサイト 半地下の家族">
      <img src="images/仮面病棟.jpg" alt="仮面病棟">
      <img src="images/ミッドサマー.jpg" alt="ミッドサマー">
      <img src="images/スマホ落とした2.jpg" alt="スマホを落としただけのに 囚われの殺人鬼">
      <img src="images/akira imax.jpg" alt="AKIRA_IMAX">
    </div>
    <h2 class="movies text-center">上映中の作品</h2>
    <div class="container">
      <div class="item">
        <a href="movie1.php">
          <div class="item_jacket">
            <img src="images/ハーレイクイン.jpg" alt="ハーレイ・クインの華麗なる覚醒 BIRDS OF PREY" width="250" height="300">
          </div>
          <h5 class="item_title">ハーレイ・クインの華麗なる覚醒<br>BIRDS OF PREY</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie2.php">
          <div class="item_jacket">
            <img src="images/パラサイト2.jpg" alt="パラサイト 半地下の家族" width="250" height="300">
          </div>
          <h5 class="item_title">パラサイト 半地下の家族</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie3.php">
          <div class="item_jacket">
            <img src="images/一度死んでみた2.jpg" alt="一度死んでみた" width="250" height="300">
          </div>
          <h5 class="item_title">一度死んでみた</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie4.php">
          <div class="item_jacket">
            <img src="images/fukushima50(2).jpg" alt="Fukushima 50" width="250" height="300">
          </div>
          <h5 class="item_title">Fukushima 50</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie5.php">
          <div class="item_jacket">
            <img src="images/ミッドサマー2.jpg" alt="ミッドサマー" width="250" height="300">
          </div>
          <h5 class="item_title">ミッドサマー</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie6.php">
          <div class="item_jacket">
            <img src="images/仮面病棟2.jpg" alt="仮面病棟" width="250" height="300">
          </div>
          <h5 class="item_title">仮面病棟</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie7.php">
          <div class="item_jacket">
            <img src="images/AKIRA_imax2.jpg" alt="AKIRA IMAX" width="250" height="300">
          </div>
          <h5 class="item_title">AKIRA IMAX</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie8.php">
          <div class="item_jacket">
            <img src="images/スマホ落とした.jpg" alt="スマホを落としただけのに 囚われの殺人鬼" width="250" height="300">
          </div>
          <h5 class="item_title">スマホを落としただけのに<br>囚われの殺人鬼</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie9.php">
          <div class="item_jacket">
            <img src="images/PSYCHO-PASS3.jpg" alt="PSYCHO-PASS3 FIRST INSPECTER" width="250" height="300">
          </div>
          <h5 class="item_title">PSYCHO-PASS3 FIRST INSPECTER</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie10.php">
          <div class="item_jacket">
            <img src="images/犬鳴村.jpg" alt="犬鳴村" width="250" height="300">
          </div>
          <h5 class="item_title">犬鳴村</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie11.php">
          <div class="item_jacket">
            <img src="images/SHIROBAKO.jpg" alt="劇場版 SHIROBAKO" width="250" height="300">
          </div>
          <h5 class="item_title">劇場版 SHIROBAKO</h5>
        </a>
      </div>
      <div class="item">
        <a href="movie12.php">
          <div class="item_jacket">
            <img src="images/ジュディ.jpg" alt="ジュディ 虹の彼方に" width="250" height="300">
          </div>
          <h5 class="item_title">ジュディ 虹の彼方に</h5>
        </a>
      </div>
    </div>
    <footer class="footer font-small bg-light">
      <div class="footer-copyright text-center py-3 text-dark">&copy; 2020 Pelicula</div>
    </footer>
  </div>
</body>

</html>