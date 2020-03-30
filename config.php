<?php

// DB接続の情報
define('DSN', 'mysql:host=db;dbname=movie_blog;charset=utf8');
define('DB_USER', 'yappy');
define('DB_PASSWORD', '0713');

// エラー表示の設定(Noticeが表示されなくなる)
error_reporting(E_ALL & ~E_NOTICE);
