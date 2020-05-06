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
      <span>一度死んでみた</span>
    </h2>
    <h3 class="movie-time">公開日 2020/3/20</h3>
    <div class="movie-container">
      <div class="hoge">
        <iframe width="760" height="415" src="https://www.youtube.com/embed/g3t3GhpMBrA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="movie-data">
      <h2 class="title-square">あらすじ</h2>
      <p class="explanation">大学４年生の野畑七瀬は、野畑製薬の社長である父親の計（はかる）と二人暮らし。研究に没頭する仕事人間で母親の死に際も立ち会わず、何かと口うるさく干渉してくる計のことが大嫌いな七瀬は、「一度死んでくれ！」と日々毒づいている。ところがそんなある日、計が本当に「一度死んで」しまう。実は計の会社では「若返りの薬」を開発しており、その途中で偶然出来上がった「一度死んで2日後に生き返る薬」を飲んだためだった。会社乗っ取り計画を知った計は、「一度死んでみる」ことで、社内のスパイ社員を突き止めようとしたのだ。
        社長が死んでしまったと会社は大騒ぎ。遺言により、七瀬は社長を継ぐはめになる。事情を知らず動揺する七瀬の前に、なんと計が”おばけ”となって現れる。野畑製薬の社員で、存在感が薄すぎるせいで”ゴースト”と呼ばれている松岡から、ライバル会社と通じるスパイ社員の陰謀、そして父の死の真相を聞かされた七瀬は、”おばけ”の計、”ゴースト”松岡とともに、その計画を阻止し、計を無事生き返らせようと乗り出すが、なんと、計の“遺体”が予定よりも早く焼かれてしまうことに！果たして、3人の行方はどうなるのだろうか…！？</p>
      <p class="data">
        2020年製作／93分／G／日本<br>
        配給：松竹
      </p>
      <a class="icon" href="https://movies.shochiku.co.jp/ichidoshindemita/">オフィシャルサイト</a>
    </div>
    <div class="movie-staff">
      <h2 class="title-square">Cast・Staff</h2>
      <span class="staff">監督</span>
      <br>
      <p class="director">浜崎慎治</p>
      <br>
      <span class="staff">キャスト</span>
      <br>
      <p class="cast">広瀬すず</p>
      <p class="cast">堤真一</p>
      <p class="cast">吉沢亮</p>
      <p class="cast">リリー・フランキー</p>
      <p class="cast">小澤征悦</p>
      <p class="cast">嶋田久作</p>
      <p class="cast">木村多江 ...</p>
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