<?php

require_once('config.php');
require_once('functions.php');

session_start();

$id = $_GET['id'];


$dbh = connectDb();

$sql = 'SELECT * FROM movie WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();


$movie = $stmt->fetch(PDO::FETCH_ASSOC);


$sql = <<<SQL
SELECT
  p.*,
  u.name as user_name
FROM
  posts p
LEFT JOIN
  movie m
ON
  p.movie_id = m.id
LEFT JOIN
  users u
ON
  p.user_id = u.id
WHERE
  m.id = :id
order by
  p.created_at desc
SQL;

$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
  <script src="https://kit.fontawesome.com/0ac73359b5.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- ヘッダー -->
  <div class="flex-col-area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 shadow">
      <a href="index.php" class="navbar-brand">
        <h2 class="font">
          Pelicula
          <img src="https://img.icons8.com/pastel-glyph/64/000000/movie-beginning.png" />
        </h2>
      </a>
      <!-- ログイン・ログアウト・アカウント登録 -->
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
              <a href="new.php?id=<?= h($movie['id']) ?>" class="nav-link">レビュー投稿</a>
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
    <!-- 映画情報 -->
    <h2 class="movie-title">
      <p><?= h($movie['title']) ?></p>
    </h2>
    <h3 class="movie-time"><?= h($movie['screening_date']) ?></h3>
    <div class="movie-container">
      <div class="hoge">
        <iframe width="760" height="415" src=<?= h($movie['trailer']) ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="movie-data">
      <h2 class="title-square">あらすじ</h2>
      <p class="explanation"><?= h($movie['explanation']) ?></p>
      <p class="data"><?= h($movie['production']) ?></p>
      <a class="icon" href=<?= h($movie['website']) ?>>オフィシャルサイト</a>
    </div>
    <div class="movie-staff">
      <h2 class="title-square">Cast・Staff</h2>
      <span class="staff">監督</span>
      <br>
      <p class="cast"><?= h($movie['director']) ?></p>
      <br>
      <span class="staff">キャスト</span>
      <br>
      <p class="cast"><?= h($movie['casts1']) ?></p>
      <p class="cast"><?= h($movie['casts2']) ?></p>
      <p class="cast"><?= h($movie['casts3']) ?></p>
      <p class="cast"><?= h($movie['casts4']) ?></p>
      <p class="cast"><?= h($movie['casts5']) ?>...</p>
    </div>
    <br>
    <!-- レビュー機能 -->
    <div class="coment">
      <div class="Review">
        <h2>
          <img src="https://img.icons8.com/material-two-tone/24/000000/movie-projector.png" />新着レビュー
        </h2>
        </div>
        <div class="posts-container">
          <div class="row">
            <div class="col-md-11 col-lg-9 mx-auto mt-4">
              <?php foreach ($posts as $post) : ?>
                <h3 class="blog-title">
                  <i class="far fa-comment-alt">
                    <a href="show.php?id=<?= h($post['id']) ?>"><?= h($post['title']) ?></a>
                  </i>
                </h3>
                <i class="far fa-user">：<?= h($post['user_name']) ?></i>
                <br>
                <i class="far fa-clock"> : <?= h($post['created_at']) ?></i>
                <br>
                <i class="far fa-thumbs-up"> : <span class=rate><?= str_repeat("★", h($post['rating_star'])) ?></i>
                <p>
                  <?= h(mb_strimwidth($post['body'], 0, 50, "...")) ?>
                </p>
                <hr>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- フッター -->
    <footer class="footer font-small bg-light">
      <div class="footer-copyright text-center py-3 text-dark">&copy; 2020 Pelicula</div>
    </footer>
  </div>
</body>

</html>