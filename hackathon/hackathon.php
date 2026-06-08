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


?>
<h1><?= $hackathon ?></h1>

<?php
for($i=0;$i<count($hacks_list);$i++){
    ?>
    <h1><?= $hacks_list[$i][0] ?></h1>
    <h2><?= $hacks_list[$i][1] ?></h2>
    <h3><?= $hacks_list[$i][2] ?></h3>

    <div>
        <p><a href="<?= $hacks_list[$i][3] ?>" target="_blank"><?= $hacks_list[$i][0] ?></a></p>
        <p>期間：<?= $hacks_list[$i][1] ?></p>
        <p>会場：<?= $hacks_list[$i][2] ?></p>
        <p>チーム：<?= $hacks_list[$i][4] ?>（<?= $hacks_list[$i][5] ?>）</p>
        <p><a href="<?= $hacks_list[$i][7] ?>" target="_blank"><?= $hacks_list[$i][6] ?></a></p>
        <p><?= $hacks_list[$i][8] ?></p>
    </div>


    <?php
}

?>