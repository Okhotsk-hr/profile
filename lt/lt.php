<?php
$lt = "LT等";
$lt_list = [[], []];

#1 ファイルの読み込み
$csvPath = __DIR__ . "/data.csv";
$fp = fopen($csvPath, "r");

if ($fp !== false) {
    $data = fgetcsv($fp);

    $i = 0;
    while ($data = fgetcsv($fp)) {
        // テーブルセルに配列の値を格納
        $lt_list[$i] = $data;
        //echo "<script>alert(" . $data[3] . ")</script>";
        $i++;
    }

    // #4 ファイルを閉じる
    fclose($fp);
}


?>
<h1><?= $lt ?></h1>

<div class="box">
    <?php
    for ($i = 0; $i < count($lt_list); $i++) {
    ?>

        <div class="card" style="background:#ff6347;">
            <p><a href="<?= $lt_list[$i][3] ?>" target="_blank"><?= $lt_list[$i][0] ?></a></p>
            <p>開催日：<?= $lt_list[$i][1] ?></p>
            <p>開催場所：<?= $lt_list[$i][2] ?></p>
            <p><?= $lt_list[$i][4] ?></p>
        </div>


    <?php
    }

    ?>
</div>