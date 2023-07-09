<?php
interface Database {
    public function listarProdutos();
    public function adicionarProdutos();
    public function alterarProdutos();
}

class MysqlDB implements Database {

    public function listarProdutos() {

    }

    public function adicionarProdutos() {
        echo 'Adicionando com Mysql';
    }

    public function alterarProdutos() {
        
    }

    // leitura
    // escrita
    // alteração
    // remoção

}

class OracleDB implements Database{

    public function listarProdutos() {

    }

    public function adicionarProdutos() {
        echo 'Adicionando com OracleDB';    
    }

    public function alterarProdutos() {
        
    }
}

class MongoDB implements Database {
    public function listarProdutos(){
        
    }
    public function adicionarProdutos() {
        echo 'Adicionando com MongoDB';    
    }
    public function alterarProdutos() {

    }
}

$db = new MongoDB();
$db->adicionarProdutos();