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
      <span>AKIRA IMAX</span>
    </h2>
    <h3 class="movie-time">公開日 2020/4/3</h3>
    <div class="movie-container">
      <div class="hoge">
        <img src="images/akira imax.jpg" alt="AKIRA IMAX" width="760" height="415">
      </div>
    </div>
    <div class="movie-data">
      <h2 class="title-square">あらすじ</h2>
      <p class="explanation">漫画家の大友克洋が1982年から「ヤングマガジン」で連載した同名コミックを、大友自らが監督を務めて1988年にアニメーション映画化。近未来の東京を舞台に超能力者と暴走族の少年たちや軍隊が繰り広げる戦いを描き、製作期間3年、総製作費10億円という当時としては破格の歳月や労力をつぎ込んで生み出された濃密でハイクオリティなアニメーションが国内外に多くの影響を与えた伝説的な一作。1988年7月、関東に新型爆弾が落とされて第3次世界大戦が勃発。それから31年が過ぎた2019年、東京湾上に築かれた新たな都市＝ネオ東京は翌年にオリンピック開催を控え、繁栄を取り戻しつつあった。ある夜、職合訓練校に通う不良少年の金田と仲間の鉄雄らは、閉鎖された高速道路でバイクを走らせていたが、そこで26号と呼ばれる奇妙な男と遭遇する。その男は、軍と対立するゲリラによって、「アキラ」という軍事機密と間違えてラボから連れ出され、軍に追われていた。そこへ現れた軍によって、26号と接触して負傷した鉄雄が連れ去られてしまい……。製作から30年以上を経た2020年、4Kリマスターと音楽監督の山城祥二指揮のもとで行われた5.1ch音源のリミックスを施した「AKIRA 4Kリマスターセット」が20年4月23日にブルーレイ発売。それを受けて同年4月3日から全国のIMAXシアターで4Kリマスター版が劇場公開される。</p>
      <p class="data">
        1988年製作／124分／PG12／日本<br>
        配給：東宝<br>
        日本初公開：1988年7月16日
      </p>
      <a class="icon" href="https://v-storage.bnarts.jp/sp-site/akira/">オフィシャルサイト</a>
    </div>
    <div class="movie-staff">
      <h2 class="title-square">Cast・Staff</h2>
      <span class="staff">監督</span>
      <br>
      <p class="director">大友克洋</p>
      <br>
      <span class="staff">キャスト</span>
      <br>
      <p class="cast">岩田光央</p>
      <p class="cast">佐々木望</p>
      <p class="cast">小山茉美</p>
      <p class="cast">石田太郎</p>
      <p class="cast">玄田哲章</p>
      <p class="cast">草尾毅</p>
      <p class="cast">鈴木瑞穂 ...</p>
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