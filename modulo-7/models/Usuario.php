<?php

class Usuario {
    private $id;
    private $nome;
    private $email;

    public function getId(){
        return $this->id;
    }
    public function setId($i){
        $this->id = trim($i); // trim - remove espaços.
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = ucwords(trim($n)); // ucwords - faz com que cada palavra tenha a primeira letra maiúscula.
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = strtolower(trim($e)); // strtolower - todas as letras ficam minúscula.
    }

}

interface UsuarioDAO {
    public function add(Usuario $u);
    public function findAll();
    public function findId($id);
    public function update(Usuario $u);
    public function delete($id);
}