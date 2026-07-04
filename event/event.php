<?php
$lang = "イベント運営";
$lang_list = [[], []];

#1 ファイルの読み込み
$csvPath = __DIR__ . "/data.csv";
$fp = fopen($csvPath, "r");

if ($fp !== false) {
    $data = fgetcsv($fp);

    $i = 0;
    while ($data = fgetcsv($fp)) {
        // テーブルセルに配列の値を格納
        $lang_list[$i] = $data;
        //echo "<script>alert(" . $data[3] . ")</script>";
        $i++;
    }

    // #4 ファイルを閉じる
    fclose($fp);
}


?>
<h1><?= $lang ?></h1>

<div class="box">
    <?php
    for ($i = 0; $i < count($lang_list); $i++) {
    ?>

        <div class="card" style="background:#ff6347;">
            <p><a href="<?= $lang_list[$i][2] ?>"></a><?= $lang_list[$i][0] ?></a></p>
            <p><?= $lang_list[$i][1] ?></p>
            <p><?= $lang_list[$i][3] ?></p>
        </div>


    <?php
    }

    ?>
</div>