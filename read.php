<?php
$str = ''; //出力用のからの文字列
$file = fopen('data/data.csv', 'r'); //ファイルを開く
flock($file, LOCK_EX); //ファイルロック
if ($file) {
    while (($data = fgetcsv($file, 1000, ",", '"')) !== FALSE) { //コンマ毎に取得
        $str .= "<tr>";
        for ($i = 0; $i < count($data); $i++) {
            $str .= "<td>{$data[$i]}</td>";
        }
    }
}
flock($file, LOCK_UN);
fclose($file);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧画面</title>
</head>

<body class="main">
    <fieldset class="main_zenbu">
        <legend class="uratitle">結果一覧</legend>
        <table>
            <thead>
                <tr class="koumoku">
                    <th>名前</th>
                    <th>性別</th>
                    <th>睡眠</th>
                    <th>朝食</th>
                    <th>サプリ</th>
                    <th>たばこ</th>
                    <th>お酒</th>
                </tr>
            </thead>
            <tbody>
                <?= $str ?>
            </tbody>
        </table>
        <a href="input.php">入力画面</a>
        <script>
            const array = <?= json_encode($array) ?>;
            console.log(array);
        </script>
</body>
<style>
    .main {
        text-align: center;
        background-color: #FFFFCC;
        margin-top: 10%;
        margin-bottom: 10%;
        margin-left: 10%;
        margin-right: 10%;
        border-style: double;
        border-width: 20px;
        border-color: #a6ddb0;
    }

    .main_zenbu {
        border: none;
    }

    .uratitle {
        position: relative;
        color: #158b2b;
        font-size: 35px;
        text-align: center;
        margin: 1.5em 0;
    }

    .uratitle:before {
        content: "";
        position: absolute;
        top: -5px;
        left: 50%;
        width: 180px;
        height: 60px;
        border-radius: 50%;
        border: 5px solid #a6ddb0;
        border-left-color: transparent;
        border-right-color: transparent;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .koumoku {
        color: 000080;
    }
</style>

</html>