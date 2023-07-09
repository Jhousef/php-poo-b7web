<?php
require 'classe1.php';
require 'classe2.php';

// MODO DE USAR O NAMESPACE QUANDO FOR INSTACIAR.
$a = new classe1\MinhaClasse();
echo $a->testar();