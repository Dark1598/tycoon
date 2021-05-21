<?php include('conexao.php'); 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
   
   <div class="login">
       <h1 class="text-center">Login</h1><br><br>
           
       <!--form ---->
       
       <form action="op_login.php" method="post" class="text-center">
         <label> Email:<br><br>
             <input type="text" name="email" id="email" placeholder="digite usuario ex:maria123">  </label> <br><br>
     
                   <label>Senha: <br><br>
           <input type="password" name="senha" id="senha" placeholder="digite sua senha"></label>     <br>  <br>  
           
           <label >
               <input type="submit" name="adm_login" id="adm_login" value="login" class="btn-primary"></label><br><br>  
           
       </form><br><br>
       
       <p class="text-center"><a href="../home.php"> Voltar</a></p>
   </div>


</body>
</html>

