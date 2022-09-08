<?php

$array = [
    1 => 'um',
    2 => 'dois', //valor booleano,quando convertido pra inteiro 1= true 0 = false
    3 => 'três'//aqui será 1 pq só é permitido uma chave de número inteiro ou uma string
];

//percorrendo esse array
foreach($array as $numero){
    echo '<li>'.$numero . PHP_EOL.'</li>';
}
echo '<hr>';
//com chaves
$contador = 0;
foreach($array as $numero => $nomeNumero){
    echo '<li>'."$numero em português é:".$nomeNumero.'</li>'.PHP_EOL;
    $contador++;
}
echo '<hr>';
echo "Total: $contador".PHP_EOL;
echo '<hr>';
echo "Total:". count($array) . PHP_EOL;
echo '<hr>';
echo "Total:". sizeof($array) . PHP_EOL;//sizeof não tão utilizado hoje

