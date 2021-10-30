<?php
//SESSÃO

session_start();

//CONEXÃO
require_once 'db_connect.php';

if(isset($_POST['botao_deletar'])):
  $id = mysqli_escape_string($connect, $_POST['id']);
  

  $sql = "DELETE FROM estoque_car WHERE id ='$id'"; 

  if (mysqli_query($connect, $sql)) : 
    header("Location: ../consultar.php?Sucesso");
  else:
    header("Location: ../consultar.php?Erro");
  endif;
endif;
