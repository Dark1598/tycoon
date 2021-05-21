<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>iHelp</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!--link css-->
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--nav menu-->
     <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="home.php" title="Logo">
                    <img src="img/logos.png" alt="Logo ihelp" class="img-responsive">
                </a>
            </div>

            <div class="clearfix">
               
                 <!-- Navbar seção termina aqui-->
<!-- pesquisar servico -->
<section class="pesquisa">
    <div class="container">
        
        <h2 class="text-center text-white">Cadastro</h2>
        <form action="admin/op_cadastro.php" method="post" class="order">
        <fieldset>
                <legend class="text-white">Formulario </legend>
                
                <div class="order-label" >Nome Completo</div>
                <input type="text" name="nome" id="nome" placeholder="Por favor digite seu nome Completo" class="input-responsive" required>
                <div class="order-label">Email</div>
                <input type="email" name="email" id="email" placeholder="Jocouve@tycoontech.com" class="input-responsive" required>
                <div class="order-label">Senha</div>
                <input type="password" name="senha" id="senha" placeholder="digite sua senha" class="input-responsive"></label> 
                <div class="order-label">CEP</div>
                <input type="text" name="cep" id="cep" placeholder="Por favor digite seu CPF" class="input-responsive" required>
                <div class="order-label">CPF</div>
                <input type="text" name="cpf" id="cpf" placeholder="Por favor digite seu CPF" class="input-responsive" required>
                <div class="order-label">Celular</div>
                <input type="tel" name="cell" id="cell" placeholder="(xx) 9843xxxxxx" class="input-responsive" required>
                <input href="bapp.php" type="submit" name="submit" value="Confirmar" class="btn btn-primary">
            </fieldset>
        </form>
    </div>
</section>
<!-- final serviços  -->
 
     <!-- social seção-->
     <section class="social">
        <div class="container text-center">
            <div class="servico-menu-desc" style="padding: 2%;">
                <h4><a href="#">Baixe nosso App</a></h4>            
                  
        <p class="servicos-detail">
        Adicione serviços, gerencie-os, receba propostas e mais</p>
        <br>
        </div>
            <ul>
               <li>
                    <a href="#"><img src="img/app.png"/></a>
                </li>
                
                <li>
                    <a href="#"><img src="img/plays.png"/></a>
                </li>
              
                
            </ul>
        </div>
    </section>
    <!-- final seçao -->
    
    <!-- footer Seçao -->
    <section class="footer">
        <div class="container text-center">
            <p>Desenvolvido por <a href="#">TycoonTech</a></p>
        </div>
    </section>
    <!-- fim -->
    
</body>
</html>