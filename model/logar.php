<?php
session_start();
    if(isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['senha']) && !empty($_POST['senha']) &&
    isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['sobrenome']) && !empty($_POST['sobrenome']) && 
    isset($_POST['cpf']) && !empty($_POST['cpf'])){

        
        require 'conexao.php';
        require 'usuario.class.php';

        $u = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $nome = addslashes($_POST['nome']);
        $sobrenome = addslashes($_POST['sobrenome']); 
        $cpf = addslashes($_POST['cpf']);

        if($u->login($email, $senha)==true){
            if(isset($_SESSION['iduser'])){
                header("Location: ../view/index.php");
            }
            else{
                header("Location: ../view/logi.php");
            }
        }
        else{
            header("Location: ../view/log.php");
        }

    }


    else{
        header("Location: ../view/lo.php");
    }
   
?>