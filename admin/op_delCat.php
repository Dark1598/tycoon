<?php
include("conexao.php");

$id = $_POST['id'];
var_dump([$id]);

$cmd = $cn->prepare("DELETE FROM categoria WHERE idCat = :id");
$cmd->bindParam( ':id', $id );
 
$result = $cmd->execute();
if ( ! $result )
{
var_dump( $cmd->errorInfo() );
exit;
}

print "<script type='text/javascript'>location.href='gerenciar-categoria.php'</script>";
?>