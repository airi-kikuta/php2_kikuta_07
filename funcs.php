
<!-- 関数を作る -->

<?php
//
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}

// selectとselectでDBを接続をする関数
function db_conn(){
try {
    $pdo = new PDO('mysql:dbname=book_db; charset=utf8; host=localhost', 'root', 'root');
    return $pdo;
  } catch (PDOException $e) {
    exit('DBConnectError'.$e->getMessage());
  }
}

