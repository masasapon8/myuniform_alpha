<?php
session_start(); // セッションの開始
include('functions.php'); // 関数ファイル読み込み
check_session_id(); // idチェック関数の実行


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マネキンコーデメインページ</title>
</head>

<body>
    <main>
        <div class="search_input_box">
            <form action="/search/search.php">
                <input class="search_textbox" type="text" name="keyword">
                <label class="search-label" for="Username"><span class="material-icons">
                        search
                    </span>探す</label>
            </form>
        </div>

        <fieldset>
            <legend>ようこそ~~~~~~~~~さん</legend>
            <!-- ここからはマネキン画像の上に各画像を載せたいねん -->
            <div class="manekin">
                <img src="./img/base_manekin.jpeg">
            </div>
            <div id="top-part">
                <img src="./img/base_manekin.jpeg">
            </div>
            <div id="pants-part">
                <img src="./img/base_manekin.jpeg">
            </div>
            <div id="shoes-part">
                <img src="./img/base_manekin.jpeg">
            </div>
        </fieldset>

    </main>



</body>

</html>