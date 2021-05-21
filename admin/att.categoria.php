<?php
include('parciais/menu.php')?>

<div class="main-content">
<div class="linha">
<h1>Atualizar categoria</h1>

<br><br>

<!-- Adicionar form--------->

<form action="op_upCad.php" method="post">
    
      <table class="tbl-30">

      <tr>
              <td>ID:</td>
              <td>
                  <input type="text" name="id" id="id" placeholder="Id da categoria">
              </td>
          </tr>

          <tr>
              <td>Titulo:</td>
              <td>
                  <input type="text" name="nome" id="nome" placeholder="Categoriatitulo">
              </td>
          </tr>         
            <tr>
              <td>Ativo:</td>
              <td>
                  <input type="radio" name="ativo" id="ativo" value="At"> Sim
                  <input type="radio" name="ativo" id="ativo" value="Na"> Não 
              </td>
          </tr>
            <tr>
              <td colspan="2">
                  <input type="submit" name="submit" value="Atualizar Categoria" class="btn-secundario">
              </td>
          </tr>
          
      </table>
    
    
    
    
    
    
</form>
</div>
</div>


<?php include('parciais/footer.php');?>