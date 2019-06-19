<?php 

$nums = [];

for ($i = 0; $i < 5; $i++) {
    $col = range($i * 15 + 1, $i * 15 + 15);
    shuffle($col);
    $nums[$i] = array_slice($col, 0, 5);
}

$nums[2][2] = 'free';

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }
        th, td {
            width: 50px;
            height: 50px;
        }
        th {
            color: orange;
        }
        td {
            background: skyblue;
            color: #fff;
            font-weight: 600;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>B</th>
        <th>I</th>
        <th>N</th>
        <th>G</th>
        <th>O</th>
    </tr>
    <?php for ($i = 0; $i < 5; $i++) : ?>
    <tr>
        <?php for ($j = 0; $j < 5; $j++) : ?>
        <td><?= h($nums[$j][$i]); ?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>

</body>
</html>