<?php
//SESSÃO

session_start();

//CONEXÃO
require_once 'db_connect.php';

if(isset($_POST['botao_editar'])):
  $id = mysqli_escape_string($connect, $_POST['id']);
  $marca_car = mysqli_escape_string($connect, $_POST['marca_car']);
  $modelo_car = mysqli_escape_string($connect, $_POST['modelo_car']);
  $descricao_car = mysqli_escape_string($connect, $_POST['descricao_car']);
  $ano_fab_car = mysqli_escape_string($connect, $_POST['ano_fab_car']);
  $ano_mod_car = mysqli_escape_string($connect, $_POST['ano_mod_car']);
  $cor_car = mysqli_escape_string($connect, $_POST['cor_car']);
  $placa_car = mysqli_escape_string($connect, $_POST['placa_car']);
  $valor_car = mysqli_escape_string($connect, $_POST['valor_car']);

  $sql = "UPDATE estoque_car SET marca_car='$marca_car', modelo_car='$modelo_car', descricao_car='$descricao_car',
  ano_fab_car='$ano_fab_car', ano_mod_car='$ano_mod_car', cor_car='$cor_car', placa_car='$placa_car', valor_car='$valor_car' WHERE id ='$id'"; 

  if (mysqli_query($connect, $sql)) : 
    header("Location: ../consultar.php?Sucesso");
  else:
    header("Location: ../consultar.php?Erro");
  endif;
endif;
