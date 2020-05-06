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
      <span>ジュディ 虹の彼方に</span>
    </h2>
    <h3 class="movie-time">公開日 2020/3/6</h3>
    <div class="movie-container">
      <div class="hoge">
        <iframe width="760" height="415" src="https://www.youtube.com/embed/ke638dlaVPc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="movie-data">
      <h2 class="title-square">あらすじ</h2>
      <p class="explanation">「オズの魔法使」で知られるハリウッド黄金期のミュージカル女優ジュディ・ガーランドが、47歳の若さで急逝する半年前の1968年冬に行ったロンドン公演の日々を鮮烈に描いた伝記ドラマ。「ブリジット・ジョーンズの日記」シリーズのレニー・ゼルウィガーが、ジュディの奔放で愛すべき女性像と、その圧倒的なカリスマ性で人々を惹きつける姿を見事に演じきり、第92回アカデミー賞をはじめ、ゴールデングローブ賞など数多くの映画賞で主演女優賞を受賞した。1968年。かつてミュージカル映画の大スターとしてハリウッドに君臨したジュディは、度重なる遅刻や無断欠勤によって映画出演のオファーが途絶え、巡業ショーで生計を立てる日々を送っていた。住む家もなく借金も膨らむばかりの彼女は、幼い娘や息子との幸せな生活のため、起死回生をかけてロンドン公演へと旅立つ。共演に「マネー・ショート 華麗なる大逆転」のフィン・ウィットロック、テレビドラマ「チェルノブイリ」のジェシー・バックリー、「ハリー・ポッター」シリーズのマイケル・ガンボン。「トゥルー・ストーリー」のルパート・グールド監督がメガホンをとった。</p>
      <p class="data">
        2019年製作／118分／G／イギリス<br>
        原題：Judy<br>
        配給：ギャガ
      </p>
      <a class="icon" href="https://gaga.ne.jp/judy/">オフィシャルサイト</a>
    </div>
    <div class="movie-staff">
      <h2 class="title-square">Cast・Staff</h2>
      <span class="staff">監督</span>
      <br>
      <p class="director">ルパート・グールド</p>
      <br>
      <span class="staff">キャスト</span>
      <br>
      <p class="cast">レネー・ゼルウィガー</p>
      <p class="cast">ルーファス・シーウェル</p>
      <p class="cast">アンディ・ナイマン</p>
      <p class="cast">マイケル・ガンボン</p>
      <p class="cast">フィン・ウィットロック</p>
      <p class="cast">ジェシー・バックレイ</p>
      <p class="cast">フィル・ダンスター ...</p>
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