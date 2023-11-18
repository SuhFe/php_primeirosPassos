<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 2000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-12'=> [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

//adicionando um novo elemento dentro de um array
$contasCorrentes['123.456.789-13'] = [
    'titular' => 'Suzana',
    'saldo' => 5000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . " = " . $conta['saldo'] . PHP_EOL; 
}