<?php
$lista = [
    'nome' => 'Jhousef',
    'idade'=> 22,
    'atributos' => [
        'forca' => 80,
        'agilidade' => 90,
        'destreza' => 70
    ],
    'vida' => 1000,
    'mana' => 928
];

echo 'NOME: ' .$lista['nome']. '<br>';
echo 'IDADE: ' .$lista['idade']. '<br>';
echo 'ATRIBUTOS: '. 'FORÇA= '.$lista['atributos']['forca'].' AGILIDADE= '.$lista['atributos']['agilidade']. '<br>';
echo 'VIDA: ' .$lista['vida']. '<br>';
echo 'MANA: ' .$lista['mana'];