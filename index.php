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
//$usuario = new Usuario();
//$usuario->login("root","12345");
//echo $usuario;

// insere novo utilizador
/*
$aluno = new Usuario("aluno", "@alun0");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;
*/
/*
//altera utilizador

$usuario = new Usuario();

$usuario->loadByID(7);

$usuario->update("professor","53/&/(g)");

echo "$usuario";
*/

$usuario = new Usuario();
$usuario->loadByID(7);
$usuario->delete();

echo "$usuario";
 ?>
