<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se for maior de 18 anos." . PHP_EOL;
echo "A partir de 16 anos só entra acompanhado." . PHP_EOL;


if ($idade >= 18) {
    echo "Como você tem $idade anos. Pode entrar sozinho";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Como você tem $idade anos e esta acompanhado(a). Pode entrar." . PHP_EOL;
} else {
    echo "Como você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;

//Observações:

/*Primeiro os operadores serão avaliadas pelas regras individualmente, 
e depois os operadores serão aplicados na seguinte ordem:

&& (e)
|| (ou)
and (e)
or (ou)

Os operadores de comparação (<, >, ==, !=) têm a mesma precedência,
logo, serão avaliados da esquerda para direita.*/