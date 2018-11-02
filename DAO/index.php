<?php
    require_once("config.php");
    //$sql = new Sql() ;
    //$usuarios = $sql -> select("SELECT * FROM tb_usuarios") ;
    //echo json_encode($usuarios);
    
    // carrega um usuario
    //$root = new Usuario();
    //$root -> loadbyId(9);
    
    //echo $root ;

    // carrega lista de usuários
    //$lista = Usuario :: getList();
    
    //echo json_encode($lista);

    // carrega lista buscando pelo login
    //$search = Usuario::search("b");
    
    //echo json_encode($search);
    
    // carrega um usuário usando login e senha
    //$usuario = new Usuario();
    //$usuario -> login("kakaroto","sayajin2");
    
    //Inserindo um novo usuário
    //echo $usuario;
    //$aluno = new Usuario();
    //$aluno -> setDeslogin("Freeza") ;
    //$aluno -> setDessenha("741");
    //$aluno -> insert();

    //echo $aluno;

    // Atualizando um usuário
    //$usuario = new Usuario() ;
    //$usuario -> loadById(9) ;
    //$usuario -> update("Kuririn","126");
    
    //

    $usuario = new Usuario() ;
    $usuario -> loadById(8) ;
    $usuario -> delete() ;
    echo $usuario;

?>