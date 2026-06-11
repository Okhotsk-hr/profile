<?php
$ent = "アントレプレナーシップ";
$ent_list = [[], []];

#1 ファイルの読み込み
$csvPath = __DIR__ . "/data.csv";
$fp = fopen($csvPath, "r");

if ($fp !== false) {
    $data = fgetcsv($fp);

    $i = 0;
    while ($data = fgetcsv($fp)) {
        // テーブルセルに配列の値を格納
        $ent_list[$i] = $data;
        //echo "<script>alert(" . $data[3] . ")</script>";
        $i++;
    }

    // #4 ファイルを閉じる
    fclose($fp);
}


?>
<h1><?= $ent ?></h1>

<div class="box">
    <?php
    for ($i = 0; $i < count($ent_list); $i++) {
    ?>

        <div class="card" style="background:#ff6347;">
            <p><a href="<?= $ent_list[$i][3] ?>" target="_blank"><?= $ent_list[$i][0] ?></a></p>
            <p>期間：<?= $ent_list[$i][1] ?></p>
            <p>開催地：<?= $ent_list[$i][2] ?></p>
        </div>


    <?php
    }

    ?>
</div>