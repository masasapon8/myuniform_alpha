<!-- register2 のウェア嗜好内容をDBへINSERTし情報を登録していく -->

<!-- あくまでもregister1 を受け取って処理する裏側の仕組み -->
<!-- なので表にもhtmlなどで表示はされない部分です -->
<?php

session_start();
include('functions.php');


$topbrand = $_POST['topbrand']; // 送信元ファイルのname属性を指定
$topcategory = $_POST['topcategory'];
$topcolor = $_POST['topcolor'];
$pantsbrand = $_POST['pantsbrand']; // 送信元ファイルのname属性を指定
$pantscategory = $_POST['pantscategory'];
$pantscolor = $_POST['pantscolor'];
$shoesbrand = $_POST['shoesbrand']; // 送信元ファイルのname属性を指定
$shoescategory = $_POST['shoescategory'];
$shoescolor = $_POST['shoescolor'];



// DB接続関数
$pdo = connect_to_db();

// ユーザ存在有無確認
$sql = 'SELECT COUNT(*) FROM member_table WHERE member_id=:member_id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':member_id', $member_id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
}

// ユーザー情報の登録は、register の1ページ目でクリアしているはずだから ↓ のチェックは消してもいいのでは？

if ($stmt->fetchColumn() > 0) {
    // user_idが1件以上該当した場合はエラーを表示して元のページに戻る
    // $count = $stmt->fetchColumn();
    echo "<p>すでに登録されているユーザです．</p>";
    echo '<a href="register.php">register</a>';
    exit();
}

// 入力チェック(未入力の場合は弾く,commentのみ任意)
$sql = 'INSERT INTO member_table(id, topsbrand, topscategory, topscolor, pantsbrand, pantscategory, pantscolor, shoesbrand, shoescategory, shoescolor) VALUES(NULL, :topsbrand, :topscategory, :topscolor, :pantsbrand, :pantscategory,:pantscolor,:shoesbrand,:shoescategory, :shoescolor)';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':topsbrand', $topsbrand, PDO::PARAM_STR);
$stmt->bindValue(':topscategory', $topscategory, PDO::PARAM_STR);
$stmt->bindValue(':topscolor', $topscolor, PDO::PARAM_STR);
$stmt->bindValue(':pantsbrand', $pantsbrand, PDO::PARAM_STR);
$stmt->bindValue(':pantscategory', $pantscategory, PDO::PARAM_STR);
$stmt->bindValue(':pantscolor', $pantscolor, PDO::PARAM_STR);
$stmt->bindValue(':shoesbrand', $shoesbrand, PDO::PARAM_STR);
$stmt->bindValue(':shoescategory', $shoescategory, PDO::PARAM_STR);
$stmt->bindValue(':shoescolor', $shoescolor, PDO::PARAM_STR);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    header("Location:main.php");
    exit();
}

?>

<!-- ここはデータを受け取るファイルになるので $_POST みたいな書き方になる -->

<!-- ここはregister1.php の入力内容に不備ないかを確認して -->
<!-- DBに格納し問題なければregister2へ飛ばす処理を書いてあげる場所 -->


<!-- 情報入力が漏れないことを確認しボタンが押されてたら -->
<!-- register2.php に飛んで「お好み」を入力するフォームを表示してあげる -->