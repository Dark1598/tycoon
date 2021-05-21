<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iHelp</title>
    <!-- CSS -->
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
                    <li >
                        <a href="admin/login.php" class="login">Login</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix">
               
                 <!-- Navbar seção termina aqui-->

    <!-- pesquisar -->
    <section class="servico-pesquisa text-center">
        <div class="container">
            
        <form action="admin/pesquisar-servicos.php" method="get">
                <input type="search" name="buscar" placeholder="Pesquise serviços aqui..." required>
                <input type="submit" name="submit" value="Pesquisar" class="btn btn-primary">
        </form>
            
        </div>
    </section>
            </div>
         </div>
    </section>
    <!-- final pesquisar -->
    
     <!-- serviços MEnu -->
    <section class="servicos-menu">
    <form action="../order.php" method="get">
        <div class="container">
            <h2 class="text-center">Serviços disponiveis</h2>
            <?php
                    include "admin/conexao.php";
                    $resultado = $cn->query("SELECT * FROM servicos where statusServ = 'at'");
                    $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($resultado as $key => $value) { $id = $value['idServ'];
                ?>

                <div class="servicos-menu-box">
                <div class="servicos-menu-img">
                    <img src="img/analise.jfif" alt="analise" class="img-responsive img-curve">
                </div>

                <div class="servicos-menu-desc">
                    <h4><?php echo $value['nomeServ'] ?></h4>
                    <p class="servicos-price">R$<?php echo $value['valorServ'] ?></p>
                    <p class="servicos-detail"><?php echo $value['descricaoServ'] ?></p>
                    <br>

                    <a href="order.php?sid=<?php echo $value['idServ'];?>&tid=<?php echo $value['trabalhador_idServ'];?>" class="btn btn-primary">Contatar Serviço</a>
                </div></div>
                <?php } ?>
         <div class="clearfix"></div>
     </div>
     </form>
    </section>
    <!--final menu serviços -->
    
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