<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ウェア商品登録ページ(シューズ)</title>
    <style>
        body {
            padding: 1rem 3rem;
        }

        input {
            width: 500px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            margin-bottom: 0.5rem;
        }

        .img {
            font-size: 20px;
        }

        button {
            height: 100px;
            width: 500px;
            font-size: 3rem;
        }
    </style>
</head>

<body>
    <form action="shoesinput_check.php" method="POST" enctype="multipart/form-data">
        <p><input type="text" name="jancode" placeholder="JANコード"></p>
        <!-- <p><input type="radio" name="gender" placeholder="性別"></p> -->
        <p>性別：</p>
        <input type="radio" name="gender" value="male">男
        <input type="radio" name="gender" value="female">女
        <p>サイズ：</p>
        <input type="radio" name="adult" value="adult">成人
        <input type="radio" name="adult" value="kids">キッズ
        <p><input type="text" name="price" placeholder="価格"></p>
        <p><input type="text" name="brand" placeholder="メーカー"></p>
        <p><input type="text" name="category" placeholder="カテゴリ"></p>
        <p><input type="text" name="color" placeholder="カラー"></p>
        <p><input type="file" name="img" class="img"></p>
        <p><button type="submit">登録！</button></p>
    </form>
</body>

</html>