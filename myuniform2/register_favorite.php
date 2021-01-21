<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>ユーザー情報登録画面</title>
    <link rel="stylesheet" href="css/register_favorite.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/register_favorite.js"></script>
</head>

<body>

    <header>
        <div class="header">
            <div id="myuniform">MyUniform
                <nav class="nav">
                    <ul>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">SERVICE</a></li>
                        <li><a href="#">COMPANY</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </nav>

            </div>
        </div>

    </header>


    <main>
        <form action="register_favorite_check.php" method=POST>
            <fieldset>
                <legend>お好みのウェア診断：好きなメーカーやカラーを選択してください</legend>

                <section class="manekin">
                    <div class="base_manekin">
                        <img src="./img/base_manekin.jpeg">


                        <div id="top_manekin">
                            トップ
                            <!-- ①サンプルのTシャツ画像を表示する部分 / ページ開いたらすぐ表示されてる仕様にする / 画像選択 → 確定 → パンツに移る -->
                            <!-- <select name="brand" id="sources" class="custom-select sources" placeholder="Source Type">
                                <option value="nike">Nike</option>
                                <option value="addidas">アディダス</option>
                                <option value="lacoste">ラコステ </option>
                                <option value="yonex">ヨネックス </option>
                            </select> -->
                            <select name="topbrand" id="topbrand" class="topbrand">
                                <option value="nike">ナイキ</option>
                                <option value="addidas">アディダス</option>
                                <option value="lacoste">ラコステ </option>
                                <option value="yonex">ヨネックス</option>
                            </select>
                            <select name="topcategory" id="topcategory" class="topcategory">
                                <option value="half">半袖</option>
                                <option value="long">長袖</option>
                            </select>
                            <select name="topcolor" id="topcolor" class="topcolor">
                                <option value="black">ブラック</option>
                                <option value="white">ホワイト</option>
                                <option value="red">レッド </option>
                                <option value="blue">ブルー</option>
                                <option value="gray">グレー</option>
                                <option value="pink">ピンク</option>
                                <option value="orange">オレンジ</option>
                                <option value="yellow">イエロー</option>
                            </select>

                        </div>



                        <div id="pants_manekin">
                            パンツ




                        </div>
                        <div id="shoes_manekin">
                            シューズ




                        </div>

                    </div>



                </section>

                <div id="choice-finish">
                    <input type="submit" name="submit" value="入力完了" /><br>
                </div>
            </fieldset>
        </form>
    </main>


</body>

</html>