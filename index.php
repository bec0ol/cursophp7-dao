<?php

require_once("config.php");

// retorna 1 utilizador
//$root = new Usuario();
//$root->loadByID(2);
//echo $root;

//retorna lista de utilizadores
//$lista = Usuario::getList();
//echo json_encode ($lista);

//retorna uma lista de utilizadores pelo login
//$search = Usuario::search("u");
//echo json_encode($search);

// retorna utilizador usando login e password
$usuario = new Usuario();
$usuario->login("root","12345");
echo $usuario;

 ?>
