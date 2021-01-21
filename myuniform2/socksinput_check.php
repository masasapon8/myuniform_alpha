<?php

$dbn
    = 'mysql:dbname=myuniform001;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = ''; // (空文字)
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

$jancode = $_POST['jancode']; // 送信元ファイルのname属性を指定
$gender = $_POST['gender'];
$adult = $_POST['adult']; // 送信元ファイルのname属性を指定
$price = $_POST['price'];
$brand = $_POST['brand']; // 送信元ファイルのname属性を指定
$category = $_POST['category'];
$color = $_POST['color']; // 送信元ファイルのname属性を指定

// var_dump($jancode);
// var_dump($gender);
// var_dump($adult);
// var_dump($price);
// var_dump($brand);
// var_dump($category);
// var_dump($color);
// exit();

// if (isset($_POST['brand'])) {
//     $img = date('YmdHis') . $_FILES['img']['name'];
//     move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $img);
//     $image = htmlspecialchars('img/' . $img, ENT_QUOTES);



$sql = 'INSERT INTO socks_table(id, jancode, gender, adult, price, brand, category, color, img)
VALUES(NULL, :jancode, :gender, :adult, :price, :brand, :category, :color, null)';


$stmt = $pdo->prepare($sql);
$stmt->bindValue(':jancode', $jancode, PDO::PARAM_INT);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':adult', $adult, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_INT);
$stmt->bindValue(':brand', $brand, PDO::PARAM_STR);
$stmt->bindValue(':category', $category, PDO::PARAM_STR);
$stmt->bindValue(':color', $color, PDO::PARAM_STR);
$status = $stmt->execute(); // SQLを実行


// if ($_POST['gender'] !== '' && $_POST['adult'] !== '' && $_POST['brand'] !== '' && $_POST['category'] !== '' && $_POST['color'] !== '') {
//     $message = $db->prepare('INSERT INTO tops_table SET id=?,jancode=:,gender=?,adult=?,price=?,brand=?,category=?,color=?,img=?');
//     $message->execute(array(NULL, $_POST['jancode'], $_POST['gender'], $_POST['adult'], $_POST['price'], $_POST['brand'], $_POST['category'], $_POST['color'], $img));
//     echo "登録完了！";
// } else {
//     echo ('失敗');
// }
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行す
    header("Location:socksinput.php");
    exit();
}
