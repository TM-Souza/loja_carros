<?php

//CONEXÃO COM O BANCO DE DADOS

$servername = "localhost";
$username = "thalliamichelle
$password = "13x27x41";
$db_name = "loja_carros";

$connect = mysqli_connect($servername, $username, $password, $db_name);

mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()) :
  echo "Erro de conexão: " . mysqli_connect_error();
endif;

?>
