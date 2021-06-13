<?php

$file = "db/kimetsudata.csv";
if ( ( $handle = fopen ( $file, "r" ) ) !== FALSE ) {
    echo "<table>
            <tr><th>番号</th><th>日時</th><th>名前</th><th>メールアドレス</th><th>好きな人</th><th></th></tr>\n";
    
    while ( ( $data = fgetcsv ( $handle, 1000, ",", '"' ) ) !== FALSE ) { 
        $count = $count + 1;
        echo "\t<tr><td>{$count}</td>\n";
        for ( $i = 0; $i < count( $data ); $i++ ) {
            echo "\t\t<td>{$data[$i]}</td></td>\n";
        }
        echo "\t<td>
            <form method=\"post\" action=\"delete.php\">
            <input type=\"submit\" name={$count} value=\"削除\"></tr>
            </form>\n";
    }
    echo "</table>\n";
    fclose ( $handle );

}

$data = file("db/kimetsudata.csv"); //fileの行数が確認できる
// echo sizeof($data) . "</br>";

//CSVファイルを配列に直す手順//
$csv_file = file_get_contents("db/kimetsudata.csv");
$aryHoge = explode("\n", $csv_file);
$aryCsv = [];
foreach($aryHoge as $key => $value){
    //if($key == 0) continue; 1行目が見出しなど、取得したくない場合
    if(!$value) continue; //空白行が含まれていたら除外
    $aryCsv[] = explode(",", $value);
}
// var_dump( $aryCsv[0] );

    // $counts= array_count_values($aryCsc[0]);
    // echo $counts. "</br>";
    // echo array_count_values($aryCsc[0]);

//array_count_valuesを使用して配列に含まれる値を集計。全配列を試したかったが、結局１行目[0]のものしかできなかった//    
// $cnt = count($aryCsv[0]);
// echo "</br>".$cnt;
// $aryCsv_count = array_count_values($aryCsv[0]);
// foreach($aryCsv_count as $key => $value){
//   echo 'key : '.$key;
//   echo '<br>';
//   echo ' value : '.$value;
//   echo '<br>';
// }



?>

<style>
table{
    border-collapse:collapse;
}

table th{
    border:1px solid #000066;
    background:royalblue;
}

table td{
    border:1px solid #000066;
    background:#ffffff;
}

ul {
  list-style: none;
}

</style>

<html>
<head>
    <meta charset="utf-8">
    <title>集計結果</title>
</head>

<body>


<ul>
    <li><a href="kimetsu.php">戻る</a></li>
</ul>
</body>
</html>
