<?php
include("conexao.php");

$ativo = $_POST['ativo'];
$nome = $_POST['nome'];



    $cmd = $cn->prepare("INSERT INTO categoria (nomeCat, ativoCat) VALUES (:nome, :ativo)");
    $cmd->bindParam( ':nome', $nome );
    $cmd->bindParam( ':ativo', $ativo );

    $result = $cmd->execute();
    if ( ! $result )
{
    var_dump( $cmd->errorInfo() );
    exit;
}
 
    print "<script type='text/javascript'>location.href='gerenciar-categoria.php'</script>";
?>
?>