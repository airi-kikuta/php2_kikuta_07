

<?php
// POSTデータ取得
$name = $_POST['name'];
$url = $_POST['url'];
$comment = $_POST['comment'];



// step 1 DBに接続する ------------------------------------
try {
    $pdo = new PDO('mysql:dbname=book_db; charset=utf8; host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DBConnectError:' . $e->getMessage());
}

// step 2 処理 ------------------------------------
$stmt = $pdo->prepare("INSERT INTO book_table(id, name, url, comment, date)VALUES(NULL, :name, :url, :comment, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$status = $stmt->execute();



//step 3 データ登録処理後 ------------------------------------
if ($status === false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("ErrorMessage:" . print_r($error, true));
} else {
    header('Location: index.php');
}
