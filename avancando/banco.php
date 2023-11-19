<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 2000
    ],
    '429.298.418-26' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-12'=> [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

$contasCorrentes['429.298.418-26']['saldo'] -= 500;
if (500 < $contasCorrentes['123.456.789-10']['saldo']) {
   echo "Seu saldo é insuficiente";
}

$contasCorrentes['123.456.789-10']['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . " = " . $conta['saldo'] . PHP_EOL; 
};
