<?php
include('parciais/menu.php')
?>

     <!--menu content começa aqui-->
     <div class="main-content">
       <div class="linha">
   
       <h1>Gerenciar serviços</h1>
       <br>
<br>
<br>

<table class="tbl-full">
      <th>S.N.</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Valor</th>
      <th>Status</th>
      <th>Categoria</th>
      <th>Trabalhador</th>

      <?php
            include "conexao.php";
            $resultado = $cn->query("SELECT * FROM servicos");
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $key => $value) { $id = $value['idServ'];
        ?>

      <tr>
        <td><?php echo $value['idServ'];  ?></td>
        <td><?php echo $value['nomeServ']; ?></td>
        <td><?php echo $value['descricaoServ']; ?></td>
        <td>R$<?php echo $value['valorServ']; ?></td>
        <td><?php echo $value['statusServ']; ?></td>
        <td><?php echo $value['categoria_idServ']; ?></td>
        <td><?php echo $value['trabalhador_idServ']; ?></td>
      </tr>
      <?php } ?>
</table>
   

            <div class="clearfix"></div>

          </div>
     </div>
    <!--menu content termina aqui-->
    <!--rodape aqui-->
    <?php 
include('parciais/footer.php');
?>