<?php

include("conexao.php");

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

    $cmd = $cn->prepare("INSERT INTO cliente (nomeCli, emailCli, senhaCli) VALUES (:nome, :email, :senha)");
    $cmd->bindParam( ':nome', $nome );
    $cmd->bindParam( ':email', $email );
    $cmd->bindParam( ':senha', $senha );
 
    $result = $cmd->execute();
    if ( ! $result )
{
    var_dump( $cmd->errorInfo() );
    exit;
}
 
    print "<script type='text/javascript'>location.href='../home.php'</script>";
?>
?>