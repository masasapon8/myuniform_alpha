<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>ユーザー情報登録画面</title>
    <link href="css/register.css" rel="stylesheet">
</head>
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

<body>
    <div class="message">
        <figure>
            <img src="img/nadalfederrer.jpg" alt="" width="1024" height="200">
        </figure>

        <form action="register_check.php" method="POST">
            <fieldset>
                <legend>初めての方は以下の情報を入力してください(新規登録)</legend>
                <h1>ユーザー情報登録</h1>
                <div id="container">
                </div>
                <div>
                    ユーザーID：<input type="text" name="member_id" />
                </div>
                <div>
                    パスワード：<input type="password" name="password" />
                </div>
                <p>お住まいの国を選択してください</p>
                <select name="country">
                    <option value="japan">日本</option>
                    <option value="china">China</option>
                    <option value="korea">Korea</option>
                    <option value="taiwan">Taiwan</option>
                    <option value="america">America</option>
                    <option value="britain">Britain</option>
                    <option value="germany">Germany</option>
                    <option value="france">France</option>
                    <option value="russia">Russia</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="serbia">Serbia</option>
                    <option value="switzerland">Switzerland</option>
                    <option value="serbia">Spain</option>
                </select>
                <p>性別：</p>
                <input type="radio" name="gender" value="male">男
                <input type="radio" name="gender" value="female">女
                <p>サイズ：</p>
                <input type="radio" name="adult" value="adult">成人
                <input type="radio" name="adult" value="kids">キッズ
                <div>
                    メールアドレス：<input type="text" name="mail" />
                </div>
                <br>
                <input type="submit" name="submit" value="新規登録する" /><br>

            </fieldset>
        </form>

        <form action="not_login.php" method="POST">
            <input type="submit" name="submit" value="情報登録しないでメインページへ行く" />
            ※情報登録をしない場合、関連のないウェア商品などが表示される可能性があります
        </form>
        <br>


        <form action="login.php" method="POST">
            <fieldset>
                <legend>既にアカウントをお持ちの方はこちら</legend>
                <div class="userlogin" method="POST">
                    <input type="submit" name="submit" value="ログイン" /><br>
                </div>
            </fieldset>
        </form>
        <form action="not_login.php" method="POST">
            <input type="submit" name="submit" value="ログインしないでメインページへ行く" />
            ※ログイン情報がない場合、関連のないウェア商品などが表示される可能性があります
        </form>
    </div>
</body>

</html>