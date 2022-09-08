<?php

$notas = [
   
    'Maria' => 10,
    'Ana' => 9,
    'Paulo' => 8
   

];


// function ordenaNotas(array $nota1, array $nota2):int 
// {
//     //exemplo1
//     // if($nota1['nota'] > $nota2['nota']){
//     //     return -1;
//     // }
//     // if($nota2['nota'] > $nota1['nota']){
//     //     return 1;
//     // }
//     // return 0;
//     //exemplo2
//     return $nota1['nota'] <=> $nota2['nota'];
// }

ksort($notas);
var_dump($notas);

if(is_array($notas)){
    echo 'sim é um array' . PHP_EOL;
}

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'quem tirou 10 ? ' . PHP_EOL;
echo array_search(6,$notas, true);



