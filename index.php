
<!-- 1.データを入力する -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">Book Data</a></div>
            </div>
        </nav>
    </header>


    <!-- 準備 1 -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>BookMark</legend>
                <label>book name: <input type="text" name="name"></label><br>
                <label>book URL: <input type="text" name="url"></label><br>
                <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>



</body>

</html>
