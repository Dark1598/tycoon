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
                <a href="#" title="Logo">
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
    <!-- pesquisar -->
    <section class="servicos-pesquisar text-center">
        <div class="container">
            
        <form action="admin/pesquisar-servicos.php" method="get">
                <input type="search" name="buscar" placeholder="Pesquise serviços aqui..." required>
                <input type="submit" name="submit" value="Pesquisar" class="btn btn-primary">
        </form>
            
        </div>
    </section>
    <!-- final pesquisar -->
            </div>
         </div>
    </section>
    <!-- Navbar seção termina aqui-->

        <!-- seção categorias -->
        <section class="categorias">
        <form method="get">
        <div class="container">
            <h2 class="text-center">Explore nossos serviços</h2>
           
            <a href="cateserv.php?sid=<?php echo '1';?>">
                <div class="box-3 float-container">
                    <img src="img/prog.jfif" alt="analise" class="img-responsive img-curve">
         
                    <h3 class="float-text" style=" color:#696969;">Desenvolvimento</h3>
                </div>
                </a>

                <a href="cateserv.php?sid=<?php echo '2';?>">
            <div class="box-3 float-container">
                <img src="img/mobile.jfif" alt="manutencao" class="img-responsive img-curve">

                <h3 class="float-text "  style="
                color:#696969; background-color: #f2f2f2;" >Mobile</h3>
            </div>
        </a>
        <a href="cateserv.php?sid=<?php echo '3';?>">
            <div class="box-3 float-container">
                <img src="img/html.jfif" alt="Aplicativos" class="img-responsive img-curve">

                <h3 class="float-text "  style="
                color:#696969; background-color: #f2f2f2;" >Desktop</h3>
            </div>
        </a>

      
          
        <a href="cateserv.php?sid=<?php echo '4';?>">
            <div class="box-3 float-container">
                <img src="img/servidor.jfif" alt="prog" class="img-responsive img-curve">

                <h3 class="float-text"  style="
                color:#696969; background-color: #f2f2f2;">Cloud</h3>
            </div>
            </a>
                

        
            <a href="cateserv.php?sid=<?php echo '5';?>">
       <div class="box-3 float-container">
           <img src="img/segurity.jfif" alt="analise" class="img-responsive img-curve">

           <h3 class="float-text" style=" color:#696969;">Segurança</h3>
       </div>
       </a>
            <div class="clearfix"></div>
        </div>
</form>
    </section>
    
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