<?php
//SESSÃO

session_start();

//CONEXÃO
require_once 'db_connect.php';

if(isset($_POST['botao_cadastrar'])):
  $marca_car = mysqli_escape_string($connect, $_POST['marca_car']);
  $modelo_car = mysqli_escape_string($connect, $_POST['modelo_car']);
  $descricao_car = mysqli_escape_string($connect, $_POST['descricao_car']);
  $ano_fab_car = mysqli_escape_string($connect, $_POST['ano_fab_car']);
  $ano_mod_car = mysqli_escape_string($connect, $_POST['ano_mod_car']);
  $cor_car = mysqli_escape_string($connect, $_POST['cor_car']);
  $placa_car = mysqli_escape_string($connect, $_POST['placa_car']);
  $valor_car = mysqli_escape_string($connect, $_POST['valor_car']);

  $sql = "INSERT INTO estoque_car (marca_car, modelo_car, descricao_car, ano_fab_car, ano_mod_car, cor_car,placa_car, valor_car)  VALUES ('$marca_car', '$modelo_car', '$descricao_car', '$ano_fab_car', '$ano_mod_car','$cor_car', '$placa_car', '$valor_car')";

  if (mysqli_query($connect, $sql)) : 
    header("Location: ../index.php?Sucesso");
  else:
    header("Location: ../index.php?Erro");
  endif;
endif;
