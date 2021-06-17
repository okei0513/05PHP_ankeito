<?php

// var_dump($_POST);
// exit();

$Name = $_POST["Name"];
$gender = $_POST["gender"];
$suimin = $_POST["suimin"];
$gohan = $_POST["gohan"];
$sapuri = $_POST["sapuri"];
$tabako = $_POST["tabako"];
$osake = $_POST["osake"];
$write_data = "{$Name},{$gender},{$suimin},{$gohan},{$sapuri},{$tabako},{$osake}\n";
$file = fopen('data/data.csv', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header("Location:input.php");
