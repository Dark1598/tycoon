<?php

include("conexao.php");

$nome		= $_POST['nome'];
$email	    = $_POST['email'];
$senha	    = $_POST['senha'];
$cep		= $_POST['cep'];
$cpf		= $_POST['cpf'];
$cell       = $_POST['cell'];

    $cmd = $cn->prepare("INSERT INTO trabalhador (nomeTrab, emailTrab, senhaTrab, cepTrab, cpfTrab, celularTrab) VALUES (:nome, :email, :senha, :cep, :cpf, :cell)");
    $cmd->bindParam( ':nome', $nome );
    $cmd->bindParam( ':email', $email );
    $cmd->bindParam( ':senha', $senha );
    $cmd->bindParam( ':cep', $cep );
    $cmd->bindParam( ':cpf', $cpf );
    $cmd->bindParam( ':cell', $cell );
    
    $result = $cmd->execute();
    if ( ! $result )
{
    var_dump( $cmd->errorInfo() );
    exit;
}
 
    print "<script type='text/javascript'>location.href='../bapp.php'</script>";
?>