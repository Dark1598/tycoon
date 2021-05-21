<?php
include('parciais/menu.php')
?>

     <!--menu content começa aqui-->
     <div class="main-content">
       <div class="linha">
   
       <h1>Gerenciar Categoria</h1>
       <br>

<a href="add.categoria.php" class="btn-primary" method='post'>Adicionar Categoria</a>
<a href="att.categoria.php" class="btn-primary" method='post'>Atualizar Categoria</a>

<br><br><br>

<table class="tbl-full">
      <th>ID</th>
      <th>Categoria</th>
      <th>Situação</th>

      <?php
            include "conexao.php";
            $resultado = $cn->query("SELECT * FROM categoria");
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $key => $value) { $id = $value['idCat'];
        ?>

      <tr>
        <td><?php echo $value['idCat'];  ?></td>
        <td><?php echo $value['nomeCat']; ?></td>
        <td><?php echo $value['ativoCat']; ?></td>
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