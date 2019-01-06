<?php
// Busca automaticamente as classes necessarias que estão na raiz
spl_autoload_register(function($class_name){
    // concatena o nome da classe com o .php
    $filename = $class_name . ".php";
    // caso exista o arquivo o mesmo é chamado
    if (file_exists(($filename))) {
        # code...
        require_once($filename);
    }
});

?>