<?php 
$idade = 80;

if($idade >= 0 && $idade < 12){
    echo 'eu sou criança';
} else if ($idade >= 12 && $idade < 18) {
    echo 'eu sou adolescente';
} else if ($idade >= 18 && $idade < 24){
    echo 'eu sou jovem';
} else if ($idade >=24 && $idade < 45){
    echo 'eu sou adulto';
} else {
    echo 'eu sou velho';
}