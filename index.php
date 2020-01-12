<?php

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(9);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ad");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("jose", "123456");
//echo $usuario;

//criando um novo usuario
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(11);

$usuario->update("professor", "!@#$%");

echo $usuario;
?>