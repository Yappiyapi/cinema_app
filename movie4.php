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
      <span>Fukushima 50</span>
    </h2>
    <h3 class="movie-time">公開日 2020/3/6</h3>
    <div class="movie-container">
      <div class="hoge">
        <iframe width="760" height="415" src="https://www.youtube.com/embed/JO2U_5jRDEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="movie-data">
      <h2 class="title-square">あらすじ</h2>
      <p class="explanation">本作は、2011年3月11日午後2時46分に発生し、マグニチュード9.0、最大震度7という、日本の観測史上最大の地震となった東日本大震災時の福島第一原発事故を描く物語。想像を超える被害をもたらした原発事故の現場：福島第一原子力発電所に残った地元福島出身の名もなき作業員たちは、世界のメディアから “Fukushima 50”（フクシマ フィフティ）と呼ばれました。世界中が注目した現場では何が起きていたのか？何が真実なのか？浮き彫りになる人間の強さと弱さ。東日本壊滅の危機が迫る中、死を覚悟して発電所内に残った職員たちの知られざる“真実”が、今、遂に明らかになります。</p>
      <p class="data">
        2020年製作／122分／G／日本<br>
        配給：松竹、KADOKAWA
      </p>
      <a class="icon" href="https://www.fukushima50.jp/">オフィシャルサイト</a>
    </div>
    <div class="movie-staff">
      <h2 class="title-square">Cast・Staff</h2>
      <span class="staff">監督</span>
      <br>
      <p class="director">若松節朗</p>
      <br>
      <span class="staff">キャスト</span>
      <br>
      <p class="cast">佐藤浩市</p>
      <p class="cast">渡辺謙</p>
      <p class="cast">吉岡秀隆</p>
      <p class="cast">安田成美</p>
      <p class="cast">緒形直人</p>
      <p class="cast">吉岡里帆</p>
      <p class="cast">斎藤工（齊藤工） ...</p>
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