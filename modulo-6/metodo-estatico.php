<?php 

// METODO ESTÁTICO - podem ser chamados sem uma instância do objeto criada.
class Matematica {

    public static string $nome = 'Muniz';

    public static function somar($x, $y){
        return $x + $y;
    }

}

// $m = new Matematica();
// echo $m->somar(15, 15);

echo Matematica::somar(30, 35); // Acessando o método estático.
echo "\n";
echo Matematica::$nome;