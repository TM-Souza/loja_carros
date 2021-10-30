<?php

//CONSULTAR
//HEADER
include_once 'includes/header.php';

//CONEXÃO
include_once 'php_action/db_connect.php';

?>

<div class="parallax-container" id="index-banner">
  <div class="container">
    <br /><br />
    <div class="row center">
      <div class="col s12 m12 l12 xl12">
        <h2>Relatório</h2>
      <form action="php_action/report.php" target="_blank" method="POST">
      <label for="marca_car">Selecione a marca:</label>
      <select name="marcaselecionada">
        <option>Todas as marcas</option>
       <?php
        $sql = "SELECT DISTINCT marca_car FROM estoque_car";
        $resultado = mysqli_query($connect, $sql);
        while ($dados = mysqli_fetch_array($resultado)) :
       ?>
       <option><?php echo $dados ['marca_car']; ?></option>
       <?php endwhile; ?>
      </select>
      <input type="submit" name="btn-relatorio" class="btn black" value="Selecionar" />
      </form>


      </div>
    </div>
    
    <br /><br />
  </div>
</div>

<?php
//FOOTER

include_once 'includes/footer.php';
?>


            