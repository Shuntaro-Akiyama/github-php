<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>アンケート結果</h1>
    <div class="container">
        <?php
        $file = fopen('data/data.txt', 'r'); // ファイルを開く

        echo "<table class='table'>";
        echo '<tr>';
        echo '<th class="item">回答日時</th>';
        echo '<th class="item">氏名</th>';
        echo '<th class="item">email</th>';
        echo '<th class="item">年齢</th>';
        echo '<th class="item">性別</th>';
        echo '<th class="item">アーティスト1</th>';
        echo '<th class="item">アーティスト2</th>';
        echo '<th class="item">アーティスト3</th>';
        echo '<th class="item">フリーコメント</th>';
        echo '</tr>';

        // ファイル内容を1行ずつ読み込んで出力
        while (($line = fgets($file)) !== false) {
            $fields = explode(",", $line);
            echo '<tr>';
            foreach ($fields as $field) {
                echo '<td class="body">'.htmlspecialchars($field).'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        fclose($file); // ファイルを閉じる
        ?>
        <ul>
            <li><a href="./post.php">アンケートフォームに戻る</a></li>
        </ul>
    </div>
</body>
</html>