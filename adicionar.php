<?php

//HEADER

include_once 'includes/header.php';
?>

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">

          <div class="row center">
            <div class="col s12 m12 l12 xl12">
              <h2 clas="black">Adicionar Carro</div>

                <form  action="php_action/create.php" method="POST">
                  <div class="input-field col s12 m6">
                    <input type="text" name="marca_car" id="marca_car">
                    <label for="marca_car">Marca</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="modelo_car" id="modelo_car">
                    <label for="modelo_car">Modelo</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="descricao_car" id="descricao_car">
                    <label for="descricao_car">Descrição</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="ano_fab_car" id="ano_fab_car">
                    <label for="ano_fab_car">Ano/Fabricação</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="ano_mod_car" id="ano_mod_car">
                    <label for="ano_mod_car">Ano/Modelo</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="cor_car" id="cor_car">
                    <label for="cor_car">Cor</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="placa_car" id="placa_car">
                    <label for="placa_car">Placa</label>
                  </div>

                  <div class="input-field col s12 m6">
                    <input type="text" name="valor_car" id="valor_car">
                    <label for="valor_car">Valor (R$)</label>
                  </div>

               
                  <button type="submit" name="botao_cadastrar" class="btn-large waves-effect waves-light color-btn">Adicionar</button>
             
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
