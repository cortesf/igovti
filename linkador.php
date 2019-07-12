<?php
$hostname = "localhost";
$user="igovti";
$password="";
$database="igovti";
$conexao=mysqli_connect($hostname,$user,$password,$database);
if (!$conexao) {
    die('Erro na conexão' . mysqli_error());
}

?>