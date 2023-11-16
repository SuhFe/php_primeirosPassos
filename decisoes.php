<?php

$idade = 17;

echo "Você só pode entrar se for maior de 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Como você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

else {
    echo "Como você só tem $idade anos. Você não pode entrar";
}

/*Primeiro os operadores serão avaliadas pelas regras individualmente, 
e depois os operadores serão aplicados na seguinte ordem:

&& (e)
|| (ou)
and (e)
or (ou)

Os operadores de comparação (<, >, ==, !=) têm a mesma precedência,
logo, serão avaliados da esquerda para direita.*/