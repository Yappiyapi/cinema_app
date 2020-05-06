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
            </li>
            <li class="nav-item">
              <a href="sign_out.php" class="nav-link">ログアウト</a>
            </li>
            <li class="nav-item">
              <a href="new.php" class="nav-link">New Post</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a href="index.php" class="nav-link">HOME</a>
            </li>
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
    <h2 class="movie-title">
      <span>犬鳴村</span>
    </h2>
    <h3 class="movie-time">公開日 2020/2/7</h3>
    <div class="movie-container">
      <div class="hoge">
        <iframe width="760" height="415" src="https://www.youtube.com/embed/cpzv_wAneZg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="movie-data">
      <h2 class="title-square">あらすじ</h2>
      <p class="explanation">臨床心理士の森田奏の周りで突如、奇妙な出来事が起こり始める。
        「わんこがねぇやに ふたしちゃろ～♪」奇妙なわらべ歌を歌い出しおかしくなった女性、行方不明になった兄弟、そして、繰り返される不可解な変死。
        それらの共通点は心霊スポット【犬鳴トンネル】だった。突然死した女性が死の直後に残した言葉「トンネルを抜けた先に村があって、そこで●●を見た・・・」
        これは、一体どんな意味なのか？
        全ての真相を突き止めるため、奏は犬鳴トンネルに向かう。しかしその先には、決して踏み込んではいけない、驚愕の真相があった・・・。
        身も凍る恐怖と戦慄、古より続く血の祝祭からあなたは逃げられない。</p>
      <p class="data">
        2020年製作／108分／G／日本<br>
        配給：東映
      </p>
      <a class="icon" href="https://www.inunaki-movie.jp/">オフィシャルサイト</a>
    </div>
    <div class="movie-staff">
      <h2 class="title-square">Cast・Staff</h2>
      <span class="staff">監督</span>
      <br>
      <p class="director">清水崇</p>
      <br>
      <span class="staff">キャスト</span>
      <br>
      <p class="cast">三吉彩花</p>
      <p class="cast">坂東龍汰</p>
      <p class="cast">古川毅</p>
      <p class="cast">宮野陽名</p>
      <p class="cast">大谷凜香</p>
      <p class="cast">奥菜恵</p>
      <p class="cast">須賀貴匡 ...</p>
    </div>
    <br>
    <div class="coment">
      <div class="Review">
        <h2><img src="https://img.icons8.com/material-two-tone/24/000000/movie-projector.png" />映画レビュー</h2>
      </div>
    </div>
    <footer class="footer font-small bg-light">
      <div class="footer-copyright text-center py-3 text-dark">&copy; 2020 Pelicula</div>
    </footer>
  </div>
</body>

</html>