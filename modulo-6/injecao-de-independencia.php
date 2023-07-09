<?php
// INJEÇÃO DE INDEPENDENCIA - É QUANDO INSERE UMA CLASSE DENTRO DE OUTRA.
Interface MatematicaBasica {
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica {
    public function somar($x, $y){
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica {
    public function somar($x, $y) {
        $res = $x;
        for($q=0;$q<$y;$q++) {
            $res++;
        }
        return $res;
    }
}

class Basico3 implements MatematicaBasica{
    public function somar($x, $y){
        return 100;
    }
}

class Matematica {
    private $basico;

    public function __construct(MatematicaBasica $b)
    {
        //$this->basico = new Basico2();
        $this->basico = $b;
    }

    public function somar($x, $y) {
        return $this->basico->somar($x, $y);
    }

}

/*
    ESSE CÓDIGO É A MESMA COISA DO CODIGO RODANDO ABAIXO.
    $basico = new Basico1();
    $mat = new Matematica($basico);
*/
$mat = new Matematica(new Basico3());
echo $mat->somar(10, 15);



// AULÃO DE INJEÇÃO DE INDEPENDENCIA
/*
interface DateInterface{

}
class Database {
    private $engine;

    public function __construct(DatabaseInterface $eng)
    {
        $this->engine = $eng;
    }

    public function listarTudo() {
        return $this->engine->listar();
    }

}

class MysqlEngine implements DateInterface {
    public function listar() {
        // .....
    }
}
class OraclEngine implements DateInterface {
    public function listar() {
        // .....
    }
}
class MongoEngine implements DateInterface {
    public function listar() {
        // .....
    }
}

$db = new Database( new MysqlEngine() );
$db->listarTudo();
*/