
<!-- 1.データを入力する -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>BookMark</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">Book Data</a></div>
            </div>
        </nav>
    </header>


    <form method="post" action="insert.php">
        <h1>BookMark</h1>
        <input type="text" placeholder="タイトル" name="title"><br>
        <input type="text" placeholder="著者" name="author"><br>
        <input type="text" placeholder="出版社" name="publisher"><br>
        <button type="submit" value="入力">入力</button>
    </form>



</body>

</html>
