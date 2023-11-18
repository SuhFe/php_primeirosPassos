<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18, 78];

$idadeList[] = 9;
$idadeList[] = 3;
$idadeList[] = 6;

for ($i = 0; $i < count($idadeList) ; $i++) { 
    echo $idadeList[$i] . PHP_EOL;
} 