<?php
$peso = 60;
$altura = 1.90;

$imc = $peso / $altura ** 2 ;
$imc = number_format($imc, 2, '.', '');


if ($imc < 18.5){
    echo "Menor que 18.5 - Abaixo do peso:  $imc";

}elseif($imc  >= 18.5 && $imc <=24.9 ){
    echo "Entre 18.5 e 24.9 - Peso normal:  $imc";
}elseif($imc  >= 25.0 && $imc <=29.9 ){
    echo "Entre 25.0 e 29.9 - Pré-obesidade:  $imc";
}elseif($imc  >= 30.0 && $imc <=34.9 ){
    echo "Entre 30.0 e 34.9 - Obesidade Grau 1  $imc";
}elseif($imc  >= 35.0 && $imc <=39.9 ){
    echo "Entre 35.0 e 39.9 - Obesidade Grau 2  $imc";
}else {
	echo "Acima de 40 - Obesidade Grau 3 $imc";
}


