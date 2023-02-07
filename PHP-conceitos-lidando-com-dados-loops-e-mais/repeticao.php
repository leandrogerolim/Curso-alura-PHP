<?php
//utilizando while
$contador = 1;
while($contador <= 15){
    echo "#$contador" . PHP_EOL;
    $contador ++;
} 
echo "" . PHP_EOL;
echo "********************************************************";
echo "" . PHP_EOL;

// utilizando o for 

for ($contador = 1; $contador <=15; $contador += 2){
    echo "#$contador" . PHP_EOL;
}