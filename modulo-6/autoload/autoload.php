<?php
spl_autoload_register(function($class){
    // esse if() é pra evitar outros tipos de erros.
    // file_exists - verifica se o arquivo existe.
    if(file_exists('autoload/classes/'.$class.'.php')) {
        require 'autoload/classes/'.$class.'.php';
    }
});