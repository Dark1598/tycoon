<?php
    include("conexao.php");//teste passou (var_dump($db););
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //echo "Usuário: ".$username." -> Senha: ".$txt_senha;  //teste passou!
    $sql = "select * from cliente where emailCli = '$email' and senhaCli = '$senha'";
    $resultado = $cn->query($sql);
    //var_dump($resultado);
    $resultado = $resultado->fetch(PDO::FETCH_ASSOC);
    if($resultado["nivelCli"] == 'ADM'){
        $email = $resultado["nomeCli"];
        print "<script type='text/javascript'>location.href='gerenciar-categoria.php?nome=$email'</script>";
    }
    else{
        echo ("Não encontrado");
        print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=login.php'> 
        <script type='text/javascript'>window.alert('Login ou senha não encontrado, tente novamente.')</script> ";   
    }



?>