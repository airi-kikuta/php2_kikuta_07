
<!-- 2 DBに接続する -->

<?php
// 関数
require_once('funcs.php');

// 準備
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];


// step 1 ------------------------------------
$pdo = db_conn();

// step 2 ------------------------------------
$stmt = $pdo->prepare("INSERT INTO book_table(id, title, author, publisher, date)
                       VALUES(NULL, :title, :author, :publisher, sysdate())");
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':author', $author, PDO::PARAM_STR);
$stmt->bindValue(':publisher', $publisher, PDO::PARAM_STR);
$status = $stmt->execute();



//step 3 ------------------------------------
if ($status === false) {
    $error = $stmt->errorInfo();
    exit("ErrorMessage:" . print_r($error, true));
} else {
    header('Location: index.php');
}

