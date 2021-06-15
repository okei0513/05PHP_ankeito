<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
</head>

<body>
    <form action="create.php" method="POST">
        <fieldset>
            <legend>アンケート</legend>

            <div>
                Name: <input type="text" name="Name" value="カナ">
            </div>
            <div>
                E-mail: <input type="text" name="mail">
            </div>
            <div>
                <P>(1)睡眠時間</P>
                ９時間以上 <input type="checkbox" name="nine">
                ７〜９時間 <input type="checkbox" name="seven">
                ５〜７時間 <input type="checkbox" name="five">
                ３〜５時間 <input type="checkbox" name="three">
                ３時間以下 <input type="checkbox" name="ika">
            </div>
            <div>
                <p>(2)朝食</p>
                ごはんを食べる <input type="checkbox" name="gohan">
                パンを食べる <input type="checkbox" name="pan">
                果物を食べる <input type="checkbox" name="kudamono">
                何も食べない <input type="checkbox" name="none">
                その他 <input type="checkbox" name="sonota">
            </div>
            <div>
                <button>submit</button>
            </div>

            <a href="read.php">結果一覧</a>
        </fieldset>
    </form>
</body>

</html>