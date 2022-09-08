<?php


$notasBimestre1 = [
    'Maria' => 10,
    'Ana' => 9,
    'Paulo' => 8
];

$notasBimestre2 = [
    'Maria' => 10,
    'Ana' => 9,
];

var_dump(array_diff($notasBimestre1,$notasBimestre2));