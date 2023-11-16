<?php

for ($contador = 1; $contador <= 30; $contador++) { 
   if ($contador == 13) {
    break; //ou continue.
}
   echo "N° $contador" . PHP_EOL;
}

/*
Existem algumas variações de laços, dentre elas:
while: que possui uma condição de entrada
do-while: que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez)
for: que possui a declaração de uma variável, uma condição entrada e o increment
*/