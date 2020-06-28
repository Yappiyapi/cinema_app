<?php

require_once('config.php');
require_once('functions.php');

session_start();
$dbh = connectDb();

$id = $_GET['id'];

//movieテーブル映画タイトルレコードを取得
$sql = 'SELECT * FROM movie where id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$movie = $stmt->fetchAll(PDO::FETCH_ASSOC);

//投稿機能
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $body = $_POST['body'];
  $movie_id = $_POST['movie_id'];
  $user_id = $_SESSION['id'];
  $rating_star = $_POST["rating_star"];

  $errors = [];

  if ($title == '') {
    $errors[] = 'タイトルが未入力です';
  }

  if ($movie_id == '') {
    $errors[] = 'カテゴリーが未選択です';
  }

  if ($body == '') {
    $errors[] = '本文が未入力です';
  }

  if ($rating_star == '---') {
    $errors[] = '評価が選択されていません';
  }

  if (empty($errors)) {
    $sql = <<<SQL
  INSERT INTO
  posts(
  title,
  body,
  movie_id,
  user_id,
  rating_star
)
VALUES
(
  :title,
  :body,
  :movie_id,
  :user_id,
  :rating_star
)
SQL;
    $stmt = $dbh->prepare($sql);

    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindParam(':movie_id', $movie_id, PDO::PARAM_INT);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':rating_star', $rating_star, PDO::PARAM_INT);

    $stmt->execute();

    $id = $dbh->lastInsertId();
    header("Location: movie.php?id={$id}");
    exit;
  }
}

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
    <div class="posts-container">
      <div class="row">
        <div class="col-sm-11 col-md-9 col-lg-7 mx-auto">
          <div class="card my-5 bg-light">
            <div class="card-body">
              <h5 class="card-title text-center">新規記事</h5>
              <?php if ($errors) : ?>
                <ul class="alert alert-danger">
                  <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <form action="new.php" method="post">
                <div class="form-group">
                  <label for="movie_id">作品名</label>
                  <select name="movie_id" class="form-control" required>
                    <option value='' disabled selected>選択してください</option>
                    <?php foreach ($movie as $m) : ?>
                      <option value="<?= h($m['id']) ?>"><?= h($m['title']) ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="title">レビュータイトル</label>
                  <input type="text" class="form-control" required autofocus name="title">
                </div>
                <div class="form-group">
                  <label for="body">レビュー内容</label>
                  <textarea name="body" id="" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <label for="rating_star">評価</label>
                  <select name="rating_star" class="star" required>
                    <option value="---">---</option>
                    <option value="1">★</option>
                    <option value="2">★★</option>
                    <option value="3">★★★</option>
                    <option value="4">★★★★</option>
                    <option value="5">★★★★★</option>
                  </select>
                </div>
                <div class="form-group text-center">
                  <input type="submit" value="投稿" class="login-btn btn-lg">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer font-small bg-light">
      <div class="footer-copyright text-center py-3 text-dark">&copy; 2020 Pelicula</div>
    </footer>
  </div>
</body>

</html>