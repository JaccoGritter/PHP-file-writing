<?php

$mijnWoordenlijst = fopen("woordenlijst.txt", "a") or die("Unable to open file!");

$mijnWoord = $_REQUEST["woord"] . PHP_EOL;

fwrite($mijnWoordenlijst, $mijnWoord);

fclose($mijnWoordenlijst);

echo ($mijnWoord);
