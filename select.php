
<!-- 3 データを表示する-->

<?php
// 関数
require_once('funcs.php');


//1.  DB接続
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM book_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= 'No.' . h($result['id']) . '_'. h($result['title']) . '_'. h($result['author']) . '_'. h($result['publisher']) . '_'. h($result['date']);
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>BookDatabase</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

  <a href="index.php">戻る</a>
  <div class="table"><?= $view ?></div>

</body>
</html>
