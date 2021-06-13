<?php

// フォームから送られてきたデータを取得し変数に代入
$name = $_POST["name"];
$mail = $_POST["mail"];
$pic  = $_POST["pic"];

// XSS対策関数
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

$time = date('Y-m-d H:i:s');
$str = $time . ',' . $name . ',' .  $mail . ',' .  $pic;
$file = fopen("db/kimetsudata.csv","a"); //対象のファイルを開く
fwrite($file, $str . "\n");
fclose($file);


// echo " <li> 好きな人：<img src=\"img/{$pic}\" class=\"picture\" alt=\"tanjiro\"></li>";

?>




<html>
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
    <style>
    img{
        width: 60px;
        height: 60px;
    }
    ul {
        list-style: none;
    }
    </style>
</head>

<body>
<h3>確認画面</h3>
    <ul>
        <li> お名前：<?= h($name); ?> </li>
        <li> Mail：<?= h($mail); ?> </li>
        <li> 好きなキャラ： <img src="img/<?= $pic;?>" class="picture" alt="tanjiro"></li>
    </ul>
    <!-- <img src="img/($pic)" class="picture" alt="tanjiro"> -->
<ul>
    <li><a href="kimetsu.php">戻る</a></li>
    <li><a href="resultcsv.php">集計結果【表】</a></li>
</ul>
</body>
</html>