<?php
$hostname = "localhost"; /* inserir ip do servidor */
$user="root";
$password="";
$database="igov_ti_ajustado";
$conexao = new mysqli($hostname,$user,$password,$database);
/*$conexao=mysqli_connect($hostname,$user,$password,$database);*/
if (!$conexao) {
    die('Erro na conexão' . mysqli_error());
}

?>