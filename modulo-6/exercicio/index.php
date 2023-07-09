<?php
require 'calculadora.php';

$calc = new Calculadora();
$calc->add(5);
$calc->add(5);
$calc->sub(8);
$calc->multiply(2);
$calc->divide(2);
$calc->clear();

echo 'TOTAL: '.$calc->total();