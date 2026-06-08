<?php
$hackathon="ハッカソン";

$hacks_list=[[],[]];

#1 ファイルの読み込み
$csvPath = __DIR__ . "/data.csv";
$fp = fopen($csvPath, "r");

if ($fp !== false) {
	$data = fgetcsv($fp);

	$i = 0;
	while ($data = fgetcsv($fp)) {
	    // テーブルセルに配列の値を格納
	    $hacks_list[$i] = $data;
	    //echo "<script>alert(" . $data[3] . ")</script>";
	    $i++;
	}

	// #4 ファイルを閉じる
	fclose($fp);
}

$hacks="";
for($i=0;$i<count($hacks_list);$i++){
    $hacks .= "<h1>" . $hacks_list[$i][0] . "</h1>";
    $hacks .= "<h2>" . $hacks_list[$i][1] . "</h2>";
}

?>
<h1><?= $hackathon ?></h1>
<?= $hacks ?>

