<?php
require 'autoload.php';
//duas dormas de usar o namespace
// use \matematica\Basico as Basico;
use \foto\Upload;

// $n = new Basico();
// echo $n->somar(10, 12);

//essa é a outra sem codenome.
$n = new \matematica\Basico();
echo $n->somar(10, 12);

$upload = new Upload();