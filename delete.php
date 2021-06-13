<?php

// フォームから送られてきたデータを取得し変数に代入
// $deleteno = $_POST[$count];
// echo $file[$deleteno];

$file   = file('db/kimetsudata.csv');
unset($file[0]);
file_put_contents('db/kimetsudata.csv', $file);

// XSS対策関数
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

header( "Location: resultcsv.php" ) ;
	exit ;

?>

<html>
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>

    <!-- <ul>
        <li> 削除：<?= h($deleteno); ?> </li>

    </ul> -->

<!-- <ul>
    <li><a href="resultcsv.php">戻る</a></li>
</ul> -->
</body>
</html>