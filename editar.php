<?php
//CONEXÃO
include_once 'php_action/db_connect.php';

//HEADER
include_once 'includes/header.php';

//SELECT
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM estoque_car WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;

?>

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container"> 

          <div class="row center">
            <div class="col s12 m12 l12 xl12">
              <h2 clas="black">Editar Carro</div>

                <form  action="php_action/update.php" method="POST">
                  <input type="hidden" name="id" value = "<?php echo $dados['id']; ?>">

                  <div class="input-field col s12 m6">
                    <input type="text" name="marca_car" id="marca_car" value = "<?php  echo $dados['modelo_car']; ?>"> 
                    <label for="marca_car">Marca</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="modelo_car" id="modelo_car" value = "<?php echo $dados['modelo_car']; ?>">
                    <label for="modelo_car">Modelo</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="descricao_car" id="descricao_car" value = "<?php echo $dados['descricao_car']; ?>">
                    <label for="descricao_car">Descrição</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="ano_fab_car" id="ano_fab_car" value = "<?php echo $dados['ano_fab_car']; ?>">
                    <label for="ano_fab_car">Ano/Fabricação</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="ano_mod_car" id="ano_mod_car" value = "<?php echo $dados['ano_mod_car']; ?>">
                    <label for="ano_mod_car">Ano/Modelo</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="cor_car" id="cor_car" value = "<?php echo $dados['cor_car']; ?>">
                    <label for="cor_car">Cor</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="placa_car" id="placa_car" value = "<?php echo $dados['placa_car']; ?>">
                    <label for="placa_car">Placa</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="valor_car" id="valor_car" value = "<?php echo $dados['valor_car']; ?>">
                    <label for="valor_car">Valor (R$)</label>
                  </div>

               
                  <button type="submit" name="botao_editar" class="btn-large waves-effect waves-light color-btn">Editar</button>
             
                </form>
            </div>
          </div>
          <br /><br />
        </div>
      </div>
    </div>


   

<?php
//FOOTER

include_once 'includes/footer.php';
?>
