<?php
$idade = 16;
$nome = "Leandro";
$quantidadeDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos .".PHP_EOL;

if ($idade >= 18  && $quantidadeDePessoas > 1){

    echo "Você tem $idade anos" . PHP_EOL;
    echo 'Pode entrar';
}else if($idade >= 16  && $quantidadeDePessoas > 1){
    echo "Você tem $idade anos, e está acompanhado.". PHP_EOL; 
    echo "pode entrar.";
}else{

    echo "Você só tem $idade anos, você ainda não pode entrar";
}
?>