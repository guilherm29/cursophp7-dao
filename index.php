<?php
require_once("config.php");

$root = new Usuario();
// carrega um usuario
// $root ->loadId(5);
// carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//carrega uma lista de usuario pelo login
// $search = Usuario::search("er");
// echo json_encode($search);

//Carrega usuario usando login e senha

// $usuario = new Usuario();
// $usuario -> login ("joses","789456");
// echo $usuario;

//update
// $aluno = new Usuario("Aluno", "oprdf4");
// $aluno -> insert();

// echo $aluno;

$usuario = new Usuario ();
$usuario ->loadId(10);
$usuario->update ("professor", "%#$%¨*(");
echo $usuario;
?>