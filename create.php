<?php

// var_dump($_POST);
// exit();

$Name = $_POST["Name"];
$mail = $_POST["mail"];
$nine = $_POST["nine"];
$seven = $_POST["seven"];
$five = $_POST["five"];
$three = $_POST["three"];
$ika = $_POST["ika"];
$gohan = $_POST["gohan"];
$pan = $_POST["pan"];
$kudamono = $_POST["kudamono"];
$none = $_POST["none"];
$sonota = $_POST["sonota"];
$write_data = "{$Name}{$mail}{$nine}{$seven}{$five}{$three}{$ika}{$gohan}{$pan}{$kudamono}{$none}{$sonota}{}\n";
$file = fopen('data/todo.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header("Location:input.php");
