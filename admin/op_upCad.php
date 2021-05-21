<?php

include("conexao.php");

$id = $_POST['id'];
$ativo = $_POST['ativo'];
$nome = $_POST['nome'];

$cmd = $cn->prepare("UPDATE categoria set nomeCat = :nome, ativoCat = :ativo WHERE idCat = :id");
$cmd->bindParam( ':id', $id );
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