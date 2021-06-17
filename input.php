<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="main">
    <form action="create.php" method="POST">
        <fieldset class="main_zentai">
            <h1 class="title">アンケート</h1>

            <div class="topbox">
                <p>お名前<input type="text" name="Name" required></p>
                <p>性別<input type="radio" name="gender" value="男性">男
                    <input type="radio" name="gender" value="女性">女
                </p>
            </div>
            <div>
                <P>(1)睡眠時間</P>
                ９時間以上 <input type="checkbox" name="suimin" value="９時間以上">
                ７〜９時間 <input type="checkbox" name="suimin" value="７〜９時間">
                ５〜７時間 <input type="checkbox" name="suimin" value="５〜７時間">
                ３〜５時間 <input type="checkbox" name="suimin" value="３〜５時間">
                ３時間以下 <input type="checkbox" name="suimin" value="３時間以下">
            </div>
            <div class="gohanbox">
                <p>(2)朝食</p>
                ごはんを食べる <input type="checkbox" name="gohan" value="ごはん">
                パンを食べる <input type="checkbox" name="gohan" value="パン">
                果物を食べる <input type="checkbox" name="gohan" value="果物">
                何も食べない <input type="checkbox" name="gohan" value="食べない">
                その他 <input type="checkbox" name="gohan" value="その他">
            </div>
            <div class="sapiribox">
                <p>(3)サプリメント</p>
                飲まない<input type="checkbox" name="sapuri" value="飲まない">
                １種類飲む<input type="checkbox" name="sapuri" value="１種類">
                ２種類以上飲む<input type="checkbox" name="sapuri" value="２種類以上">
                たまに飲む<input type="checkbox" name="sapuri" value="２種類以上">
            </div>
            <div class="tabako">
                <p>(4)タバコ</p>
                吸わない <input type="checkbox" name="tabako" value="吸わない">
                毎日吸う <input type="checkbox" name="tabako" value="毎日吸う">
                たまに吸う <input type="checkbox" name="tabako" value="たまに吸う">
            </div>
            <div class="osake">
                <p>(5)お酒</p>
                飲まない <input type="checkbox" name="osake" value="飲まない">
                毎日飲む <input type="checkbox" name="osake" value="毎日飲む">
                週５〜６日飲む <input type="checkbox" name="osake" value="週５〜６日">
                週３〜４日飲む <input type="checkbox" name="osake" value="週３〜４日">
                週１〜２日飲む <input type="checkbox" name="osake" value="週１〜２日">
            </div>

            <div class="sousin">
                <button>送信</button>
            </div>
            <div class="kekka">
                <a href="read.php">集計結果一覧</a>
            </div>
        </fieldset>
    </form>
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

    .main_zentai {
        display: inline-block;
        text-align: left;
        border: none;
    }

    .title {
        position: relative;
        color: #158b2b;
        font-size: 40px;
        text-align: center;
        margin: 1.5em 0;
    }

    .title:before {
        content: "";
        position: absolute;
        top: -8px;
        left: 50%;
        width: 150px;
        height: 58px;
        border-radius: 50%;
        border: 5px solid #a6ddb0;
        border-left-color: transparent;
        border-right-color: transparent;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .topbox {
        padding-bottom: 10px;
    }

    .gohanbox {
        padding-top: 20px;
    }

    .sapiribox {
        padding-top: 20px;
    }

    .tabako {
        padding-top: 20px;
    }

    .osake {
        padding-top: 20px;
        padding-bottom: 30px;
    }

    .sousin {
        color: black;
        background-color: FFFACD;
        border-color: 66CC66;
    }

    .kekka {
        padding-top: 20px;
    }
</style>


</html>