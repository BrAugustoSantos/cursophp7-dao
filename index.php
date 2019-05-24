<?php


require_once("config.php");
//SELECIONA USUARIO POR ID
//$root = new Usuario();
//$root -> loadById(3);
//echo $root;
 //========================

 //  LISTA TODOS USUARIOS $lista= Usuario::getList();
// echo json_encode ($lista);
//===============================================

// Carrega uma lista de usuario buscando por Login
//$search = Usuario::search("br");
//echo json_encode ($search);
//=============================================

//Carrega usuario por Login e Senha 
//======================
// LOGIN
//$usuario= new Usuario ();
//$usuario -> login("bruno","123");
//echo  $usuario;

// INsert
//==============
//$aluno= new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@luno");

//$aluno->insert();

//echo $aluno;

// ALTERAR USUARIO

//$usuario= new Usuario ();
//$usuario -> loadById(8);
//$usuario ->update("Professor","123");
//echo $usuario;
//===================================================
    $usuario=  new Usuario();
    $usuario-> loadById(8);
    $usuario->delete();

    echo $usuario;




?>