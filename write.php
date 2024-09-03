<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$artist1 = $_POST["artist1"];
$artist2 = $_POST["artist2"];
$artist3 = $_POST["artist3"];
$comment = $_POST["comment"];

// 作成日時,名前,メールアドレス,年齢,性別,アーティスト1,アーティスト2,アーティスト3,コメント
$str = date("Y年m月d日 H時i分s秒") . "," . $name . "," . $mail . "," . $age . "," . $gender . "," . $artist1 . "," . $artist2 . "," . $artist3 . "," . $comment;

// File書き込み
$file = fopen("data/data.txt", "a");	// ファイル読み込み
fwrite($file, $str . "\n");
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>確認画面</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>回答内容確認</h1>
    <div class="container">
        <table class="table">
            <tr><th class="item">氏名</th><td class="body"><?php echo htmlspecialchars($name); ?></td></tr>
            <tr><th class="item">email</th><td class="body"><?php echo htmlspecialchars($mail); ?></td></tr>
            <tr><th class="item">年齢</th><td class="body"><?php echo htmlspecialchars($age); ?></td></tr>
            <tr><th class="item">性別</th><td class="body"><?php echo htmlspecialchars($gender); ?></td></tr>
            <tr><th class="item">好きなアーティスト1</th><td class="body"><?php echo htmlspecialchars($artist1); ?></td></tr>
            <tr><th class="item">好きなアーティスト2</th><td class="body"><?php echo htmlspecialchars($artist2); ?></td></tr>
            <tr><th class="item">好きなアーティスト3</th><td class="body"><?php echo htmlspecialchars($artist3); ?></td></tr>
            <tr><th class="item">フリーコメント</th><td class="body"><?php echo nl2br(htmlspecialchars($comment)); ?></td></tr>
        </table>
        <p>こちらの内容で回答しました</p>
        <ul>
            <li><a href="./post.php">アンケートフォームに戻る</a></li>
        </ul>
    </div>
</body>
</html>