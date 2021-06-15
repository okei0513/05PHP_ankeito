<?php
$str = '';
$file = fopen('data/todo.txt', 'r');
flock($file, LOCK_EX);
if ($file) {
    while ($line = fgets($file)) {
        $str .= "<tr><td>{$line}</td></tr>";
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

<body>
    <fieldset>
        <legend>一覧画面</legend>
        <a href="input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>todo</th>
                </tr>
            </thead>
            <tbody>
                <?= $str ?>
            </tbody>
        </table>
    </fieldset>

    <script>
        const array = <?= json_encode($array) ?>;
        console.log(array);
    </script>
</body>

</body>

</html>