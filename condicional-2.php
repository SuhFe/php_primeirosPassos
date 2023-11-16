<?php

for ($contador = 1; $contador <= 30; $contador++) { 
   if ($contador == 13) {
    break; //ou continue.
}
   echo "N° $contador" . PHP_EOL;
}