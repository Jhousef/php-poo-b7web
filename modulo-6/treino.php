<?php 

// TREINO INTENSIVO

class Pessoas {
    private string $nome;
    private string $apelido;
    private int $idade;
    private int $id;

    public function __construct($i)
    {
        $this->setId($i);
    }

    public function setId($i) {
        $this->id = $i;
    }
    public function getId() {
        return $this->id;
    }

    public function setNome($n) {
        if($n == 'Isabella'){
            $this->nome = $n;
        } else {
            $this->nome = 'Desconhecido';
        }
    }
    public function getNome() {
        return $this->nome;
    }

    public function setApelido($a) {
        $this->apelido = $a;
    }
    public function getApelido() {
        return $this->apelido;
    }

    public function setIdade($i) {
        $this->idade = $i;
    }
    public function getIdade() {
        return $this->idade;
    }

    public function falarBio(){
        if($this->nome >= 4){
        return "eu sou $this->nome, meu apelido é $this->apelido, minha idade é $this->idade";
        }
    }
}

$pessoa = new Pessoas(10);
$pessoa->setNome('Isbella');
$pessoa->setApelido('Bel');
$pessoa->setIdade(18);
echo $pessoa->falarBio();