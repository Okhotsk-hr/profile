<?php
//include 'aboutme/secret.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title><?= $name_en ?></title>

    <style>
        .box {
            display: flex;
            width: 100%;
            height: 300px;
            overflow-x: scroll;
        }

        .box div {
            width: 300px;
            margin: 5px;
            flex-shrink: 0;
            border-radius: 10px;
        }

        .box::-webkit-scrollbar {
            height: 14px;
            /* スクロールバーの高さ */
        }

        .box::-webkit-scrollbar-thumb {
            background: #d2b48c;
            /* ツマミの色 */
            border-radius: 7px;
            /* ツマミ両端の丸み */
        }

        .box::-webkit-scrollbar-track {
            background: #f5deb3;
            /* トラックの色 */
            border-radius: 7px;
            /* トラック両端の丸み */
        }
    </style>
</head>

<body>

    <?php include 'aboutme/aboutme.php' ?>
    <?php include 'hackathon/hackathon.php'; ?>
    <?php include 'ict_ex/ict_ex.php'; ?>
    <?php include 'ent/ent.php'; ?>

</body>

</html>