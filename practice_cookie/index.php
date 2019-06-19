<?php

var_dump($_COOKIE);

if (isset($_COOKIE['counter'])) {
    $count = $_COOKIE['counter'];
} else {
    $count = 0;
}

$count++;

setcookie('counter', $count, time()+60*60);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
    あなたは<?= $count; ?>回目の訪問です。
</body>
</html>