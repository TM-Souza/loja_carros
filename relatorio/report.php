<?php

include_once  'db_connect.php' ;

?>

<!DOCTYPE html>
<html lang ="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loja GenneralCAR.</title>

    <!--CSS  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
   
    <link href=" ..css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    
    <link href=" ..css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
      
    <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js">defer</script>
      <script src=" ..js/materialize.js">defer</script>
      <script src=" ..js/init.js">defer</script>
  
</head>


<body>
<div class="parallax-container" id="index-banner">
      <div class="container">
        <br /><br />
        <div class = "row center">
              <div  class = "col s12 n12 l12 xl12">
                <h2 class = "black">Relatórios</h2>

                <?php 
                if (isset($_POST ['btn-relatorio'])):
                    $marcaselecionada = $_POST['marcaselecionada'];
                endif;
                ?>

                <h3 class="black"><?php echo $marcaselecionada; ?></h3>
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
                    </thead >

                    <tbody>

                   <?php 
                        if (isset ( $_POST ['btn-relatorio'])) :
                            if ($marcaselecionada == "Todas as marcas") :
                                $sql = "SELECT * FROM estoque_car ORDER BY marca_car, modelo_car, ano_fab_car";
                            else:
                                $sql = "SELECT * FROM estoque_car WHERE marca_car = '$marcaselecionada' ORDER BY marca_car, modelo_car, ano_fab_car";
                            endif ;
                        
                    
                   
                        $resultado = mysqli_query($connect , $sql);
                        while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                            <tr>
                                <td> <?php  echo  $dados ['marca_car'] ?> </td>
                                <td> <?php  echo  $dados ['modelo_car'] ?> </td>
                                <td> <?php  echo  $dados ['descricao_car'] ?> </td>
                                <td> <?php  echo  $dados ['ano_fab_car'] ?> </td>
                                <td> <?php  echo  $dados ['ano_mod_car'] ?> </td>
                                <td> <?php  echo  $dados ['cor_car'] ?> </td>
                                <td> <?php  echo  $dados ['placa_car'] ?> </td>
                                <td> <?php  echo  $dados ['valor_car'] ?> </td>
                            </tr>
                           <?php  endwhile;
                          endif ;  ?>
                        
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>



