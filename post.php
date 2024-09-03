<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>好きなアーティスト アンケート</title>
</head>
<body>
    <h1>好きなアーティストについて</h1>
    <div class="container">
        <form action="write.php" method="post">
            <table class="table">
                <tr>
                    <th class="item">氏名(必須)</th>
                    <td class="body"><input type="text" name="name" id="name" required></td>
                </tr>
                <tr>
                    <th class="item">email(必須)</th>
                    <td class="body"><input type="email" name="mail" id="mail" required></td>
                </tr>
                <tr>
                    <th class="item">性別(必須)</th>
                    <td class="body">
                        <select name="gender" id="gender" required>
                            <option value="" selected disabled>選択してください</option>
                            <option value="男性">男性</option>
                            <option value="女性">女性</option>
                            <option value="その他">その他</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="item">年齢(必須)</th>
                    <td class="body"><input type="number" name="age" id="age" min="0" required></td>
                </tr>
                <tr>
                    <th class="item">好きなアーティスト1(必須)</th>
                    <td class="body"><input type="text" name="artist1" id="artist1" required></td>
                </tr>
                <tr>
                    <th class="item">好きなアーティスト2(必須)</th>
                    <td class="body"><input type="text" name="artist2" id="artist2" required></td>
                </tr>
                <tr>
                    <th class="item">好きなアーティスト3(必須)</th>
                    <td class="body"><input type="text" name="artist3" id="artist3" required></td>
                </tr>
                <tr>
                    <th class="item">フリーコメント</th>
                    <td class="body"><textarea name="comment" id="comment"></textarea></td>
                </tr>
            </table>
            <button type="submit" class="submit">送信</button>
        </form>
    </div>
    <ul>
        <li><a href="read.php">結果はこちら</a></li>
    </ul>
</body>
</html>