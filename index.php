<?php
//include 'aboutme/secret.php';
include 'aboutme/aboutme.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title><?= $name_en ?></title>
</head>

<body>
    <h1><?= $name ?></h1>
    <?= $aboutme ?>

    <?php include 'hackathon/hackathon.php'; ?>
    
</body>

</html>