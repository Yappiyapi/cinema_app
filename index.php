<?php

require_once('config.php');
require_once('functions.php');

try {
  $dbh = new PDO(DSN, DB_USER, DB_PASSWORD);
  echo '接続に成功しました！' . '<br>';
} catch (PDOException $e) {
  // 接続がうまくいかない場合こちらの処理がなされる
  echo $e->getMessage();
  exit;
}