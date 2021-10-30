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
        <h2>Consultar Carros</h2>
        <table class="striped">
          <thead>
            <tr>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Descrição</th>
              <th>Ano/Fabricação</th>
              <th>Ano/Modelo</th>
              <th>Cor</th>
              <th>Placa</th>
              <th>Valor(R$)</th>
            </tr>
          </thead>

          <tbody>

                <?php
                  $sql = "SELECT * FROM estoque_car";
                  $resultado = mysqli_query($connect, $sql);
                  while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tr>
                      <td><?php echo $dados ['marca_car']; ?></td>
                      <td><?php echo $dados ['modelo_car']; ?></td>
                      <td><?php echo $dados ['descricao_car']; ?></td>
                      <td><?php echo $dados ['ano_fab_car']; ?></td>
                      <td><?php echo $dados ['ano_mod_car']; ?></td>
                      <td><?php echo $dados ['cor_car']; ?></td>
                      <td><?php echo $dados ['placa_car']; ?></td>
                      <td><?php echo $dados ['valor_car']; ?></td>
                    
                     
                      <td><a href="editar.php?id=<?php echo $dados ['id']; ?>"
                      class="btn-floating orange"><i class="material-icons">Editar</i></a></td>
                      

                      <td><a href="#modal<?php echo $dados ['id']; ?>" class="btn-floating red modal-trigger"><i
                      class="material-icons">Excluir</i></a></td>

                       <!-- Modal Structure -->
                          <div id="modal<?php echo $dados ['id']; ?>" class="modal modal-fixed-footer">
                            <div class="modal-content">
                              <h4>Tem certeza que deseja excluir este Carro?</h4>
                              <p><?php echo $dados ['marca_car']; ?><?php echo $dados ['modelo_car']; ?>
                              <?php echo $dados ['placa_car']; ?></p>
                            </div>
                            <div class="modal-footer">
                              <form action="php_action/delete.php" method="POST">
                              <a href="#!" class="modal-close waves-effect waves-green btn green">Não</a>
                              <input type="hidden" name=id value="<?php echo $dados ['id']; ?>">
                              <button type="submit" name="botao_deletar" class="btn red">Sim</button>
                              </form>
                            </div>
                          </div>
                       </tr>

                <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
    
    <br /><br />
  </div>
</div>

<?php
//FOOTER

include_once 'includes/footer.php';
?>


            