<?php

$bolo1 = [
    'acucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

$bolo2 = [
    'vasilha',
    'agua morna',
    ...$bolo1,
    'corante'
];

echo $bolo2[4];

echo '<br><hr>';

$lista1 = ['jhousef', 'ana', 'bruno'];
$lista2 = ['fernando', 'bruna', 'tiago'];
$lista3 = [...$lista1, 'diego', 'alice', ...$lista2];

echo '<pre>';
    print_r($lista3);
echo '</pre>';