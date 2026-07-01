<?php

include 'aboutme/secret.php';

$language = "BASIC, PHP, HTML, CSS, JavaScript, Python, C++, Java, Go, Kotlin, Swift";
$hardware = "IchigoJam, micro:bit, Arduino, ESP32";
$github = "Okhotsk-hr";
$github_link = "https://github.com/Okhotsk-hr";


?>
<div>
    <h1>About Me</h1>
    <p>名前：<?= $name ?></p>
    <p>Name: <?= $name_en ?></p>
    <p>誕生日：<?= $birthday ?></p>
    <p>学校：<?= $school ?></p>
    <p>使用言語：<?= $language ?></p>
    <p>ハードウェア：<?= $hardware ?></p>
    <p>GitHub: <a href="<?= $github_link ?>"><?= $github ?></a></p>

</div>