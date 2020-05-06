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
      <span>劇場版 SHIROBAKO</span>
    </h2>
    <h3 class="movie-time">公開日 2020/2/29</h3>
    <div class="movie-container">
      <div class="hoge">
        <iframe width="760" height="415" src="https://www.youtube.com/embed/P6Q1tz83SDI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="movie-data">
      <h2 class="title-square">あらすじ</h2>
      <p class="explanation">いつか必ず何としてでもアニメーション作品を一緒に作ろうと、ひょうたん屋のドーナツで誓いを立てた上山高校アニメーション同好会の5人。卒業後それぞれがそれぞれの場所でアニメーション制作に携わっていく。宮森あおいは「えくそだすっ！」「第三飛行少女隊」の制作を経て、少しずつ夢へ近づきつつ、徐々に自分の本当にやりたいことを考え始めていた。
        あれから、4年。日々の仕事に葛藤しながら過ごしていたあおいは朝礼後、渡辺に呼ばれ新企画の劇場用アニメーションを任されることになる。しかし、この企画には思わぬ落とし穴があった。今の会社の状況で劇場用アニメーションを進行できるのか？不安がよぎるあおい・・・新たな仲間・宮井 楓やムサニメンバーと協力し、完成に向けて動き出す。果たして、劇場版の納品は間に合うのか――！？</p>
      <p class="data">
        2020年製作／119分／G／日本<br>
        配給：ショウゲート
      </p>
      <a class="icon" href="http://shirobako-movie.com/">オフィシャルサイト</a>
    </div>
    <div class="movie-staff">
      <h2 class="title-square">Cast・Staff</h2>
      <span class="staff">監督</span>
      <br>
      <p class="director">水島努</p>
      <br>
      <span class="staff">キャスト</span>
      <br>
      <p class="cast">木村珠莉</p>
      <p class="cast">佳村はるか</p>
      <p class="cast">千菅春香</p>
      <p class="cast">高野麻美</p>
      <p class="cast">大和田仁美</p>
      <p class="cast">佐倉綾音 ...</p>
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