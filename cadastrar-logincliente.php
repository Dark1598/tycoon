<?php include('admin/conexao.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <!------Cadastrar-->
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Seja Bem-vindo!</h2>
                <p class="description description-primary">Clique em entrar para efetuar login</p>
                <button id="signin" class="btn btn-primary">Entrar</button><br><br><br>
                <p class="description description-primary"><a href="admin/login.php">Administrador</a></p>
                <p class="text-center"><a href="home.php"> Voltar</a></p>
            </div>    

            <div class="second-column">
                <h2 class="title title-second">Crie uma Conta</h2>
                <div class="social-media">

                    <ul class="list-social-media">

                        <a class="link-social-media" href="https://www.apple.com/br/app-store/">
                            <li class="item-social-media">
                                <i class="fab fa-apple"></i>            
                             </li>
                      </a>   
                        
                        <a class="link-social-media" href="https://play.google.com/store?hl=pt_BR&gl=US">
                            <li class="item-social-media">
                                <i class="fab fa-google-play"></i>
                            </li>
                      </a>
                    </ul>
                    
                </div><!-- social media -->
                <!---Descrição-->
                <p class="description description-second ">Baixe nosso App</p>    
                   <p class="description description-second">Use suas informações para cadastro</p> <!--- fim Descrição-->
               
               <!-----Cadastro-->
                <form class="form" action="admin/op_cadCliente.php" method="post">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" id="nome" placeholder="Name">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" id="senha" placeholder="Password">
                    </label>
                    
                    
                    <button type="submit" class="btn btn-second" href="index.php">Cadastrar</button>        
                </form>               

            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá,Amigo!</h2>
                <p class="description description-primary text-center">Insira seus dados pessoais</p>
                <p class="description description-primary">embarque nessa jornada em busca de novos serviços</p>
                <button id="signup" class="btn btn-primary">Cadastrar</button><br><br><br>
                <p class="description description-primary"><a href="admin/login.php">Administrador</a></p>
                <p class="text-center"><a href="home.php"> Voltar</a></p>

             
            </div>

            <!---segunda coluna-->
            <div class="second-column">
                <h2 class="title title-second">Faça Login</h2>
                <div class="social-media">
                    
                    <ul class="list-social-media">

                        <a class="link-social-media" href="https://www.apple.com/br/app-store/">
                            <li class="item-social-media">
                                <i class="fab fa-apple"></i>            
                             </li>
                      </a>   
                        
                        <a class="link-social-media" href="https://play.google.com/store?hl=pt_BR&gl=US">
                            <li class="item-social-media">
                                <i class="fab fa-google-play"></i>
                            </li>
                      </a>
                    </ul>
                    
              
                </div><!-- social media -->
             
                <p class="description description-second ">Baixe nosso App para se cadastrar como </p>
                <p class="description description-second ">prestador de serviços e acompanhar suas solicitações</p>
                <br>
                <!---Login-->

                <form class="form" action="admin/op_login.php" method="post" >
                
                    <labelclass="label-input">
                        <i class="far fa-envelope icon-modify" for=""></i>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" id="senha" placeholder="Password">
                    </label>
                
                    <a class="password" href="admin/cadastrar.php">Esqueceu a senha?</a>
                    <button type="submit" class="btn btn-second">Entrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>