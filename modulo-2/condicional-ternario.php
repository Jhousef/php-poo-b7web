<?php 
$idade = 17;

if($idade >= 18){
    echo "maior de idade\n"; // \n para saltar linho no direto no terminal
} else {
    echo "menor de idade\n";
}

// OPERADOR TERNARIO
echo ($idade < 18) ? 'Menor de Idade' : 'Maior de idade';