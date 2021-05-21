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
              <div class="menu text-right">
                <ul>
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="servicos.php">Serviços</a>
                    </li>
                    <li>
                        <a href="trabalhar.php">Trabalhe conosco</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix">
               
                 <!-- Navbar seção termina aqui-->
<!-- pesquisar servico -->
<section class="pesquisa">
    <div class="container">
        
        <h2 class="text-center text-white">Informaçoes de contato do prestador</h2>
        <form class="order">
        <?php
                    include("admin/conexao.php");

                    $tid = $_GET['tid'];
                    $ids = $_GET['sid'];

                    $resultado = $cn->query("SELECT trabalhador.nomeTrab, trabalhador.emailTrab, trabalhador.celularTrab, servicos.nomeServ, servicos.valorServ, servicos.descricaoServ FROM trabalhador INNER JOIN servicos ON trabalhador.idTrab = $tid and servicos.idServ = $ids");
                    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
                ?>

            <fieldset>
                <legend>Serviço selecionado</legend>
                <div class="servicos-menu-img">
                    <img src="img/prog3.jfif" alt="site web" class="img-responsive img-curve">
                </div>
                <div class="servicos-menu-desc">
                    <h3><?php echo $linha['nomeServ']; ?></h3>
                    <p class="servicos-price">R$<?php echo $linha['valorServ']; ?></p>
                    <p class="servicos-price"><?php echo $linha['descricaoServ'] ?></p>
                </div>
            </fieldset>
            <fieldset>
                <legend>Informações do Prestador</legend>
                <div class="order-label">Nome: <?php echo $linha['nomeTrab'] ?></div>
                <div class="order-label">Telefone: <?php echo $linha['celularTrab'] ?></div>
                <div class="order-label">email: <?php echo $linha['emailTrab'] ?></div>
            </fieldset>
  <?php } ?>
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
        Adicione serviços, gerencie-os, receba propostas e mais       </p>
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