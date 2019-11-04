<?php
include_once("config.php");
?>

<pre>
<?php var_dump($_POST); ?>
</pre>

<?php
$universidade = S_POST['instituicao'];
$sigla = S_POST['sigla'];
$estado = S_POST['estado'];
$municipio = S_POST['municipio'];

$igovti = (1.794 +
 (1.716 * $_POST['pergunta']['1.2-A']) +
 (2.515 * $_POST['pergunta']['4.1-D']) +
 (1.272 * $_POST['pergunta']['1.3-D']) +
 (1.432 * $_POST['pergunta']['5.5-A']) +
 (2.067 * $_POST['pergunta']['4.2-B']) +
 (2.005 * $_POST['pergunta']['5.8-D']) +
 (3.727 * $_POST['pergunta']['3.1-A']) +
 (1.426 * $_POST['pergunta']['1.2-C']) +
 (0.875 * $_POST['pergunta']['5.7-D']) +
 (0.953 * $_POST['pergunta']['2.2-D']) +
 (2.445 * $_POST['pergunta']['3.1-D']) +
 (2.249 * $_POST['pergunta']['1.4-B']) +
 (0.889 * $_POST['pergunta']['6.4-E']) +
 (0.936 * $_POST['pergunta']['2.2-G']) +
 (1.247 * $_POST['pergunta']['1.5-B']) +
 (1.206 * $_POST['pergunta']['5.9-B']) +
 (1.652 * $_POST['pergunta']['2.1-E']) +
 (3.084 * $_POST['pergunta']['4.2-A']) +
 (2.742 * $_POST['pergunta']['3.1-B']) +
 (1.547 * $_POST['pergunta']['1.7-A']) +
 (1.362 * $_POST['pergunta']['4.1-C']) +
 (2.588 * $_POST['pergunta']['2.1-C']) +
 (1.709 * $_POST['pergunta']['3.2-D']) +
 (1.929 * $_POST['pergunta']['5.2-F']) +
 (1.356 * $_POST['pergunta']['3.2-C']) +
 (1.556 * $_POST['pergunta']['1.3-A']) +
 (2.050 * $_POST['pergunta']['4.1-B']) +
 (1.826 * $_POST['pergunta']['1.7-C']) +
 (0.981 * $_POST['pergunta']['1.1-E']) +
 (1.386 * $_POST['pergunta']['2.2-J']) +
 (1.154 * $_POST['pergunta']['5.7-E']) +
 (1.372 * $_POST['pergunta']['6.4-C']) +
 (1.470 * $_POST['pergunta']['2.2-F']) +
 (0.622 * $_POST['pergunta']['6.2-A']) +
 (0.886 * $_POST['pergunta']['3.2-E']) +
 (0.796 * $_POST['pergunta']['1.1-C']) +
 (1.183 * $_POST['pergunta']['2.2-H']) +
 (2.700 * $_POST['pergunta']['5.3-C']) +
 (1.799 * $_POST['pergunta']['4.2-C']) +
 (1.176 * $_POST['pergunta']['4.3-B1']) +
 (1.119 * $_POST['pergunta']['2.2-B']) +
 (1.610 * $_POST['pergunta']['3.1-C']) +
 (1.412 * $_POST['pergunta']['4.1-F']) +
 (0.775 * $_POST['pergunta']['2.1-H']) +
 (0.606 * $_POST['pergunta']['5.4-C']) +
 (1.004 * $_POST['pergunta']['1.1-D']) +
 (1.210 * $_POST['pergunta']['1.5-E']) +
 (0.673 * $_POST['pergunta']['3.2-G']) +
 (0.986 * $_POST['pergunta']['3.2-A']) +
 (1.242 * $_POST['pergunta']['1.3-B']) +
 (1.000 * $_POST['pergunta']['5.9-E']) +
 (0.978 * $_POST['pergunta']['5.1-M']) +
 (0.746 * $_POST['pergunta']['5.7-I']) +
 (1.443 * $_POST['pergunta']['6.4-G']) +
 (0.933 * $_POST['pergunta']['5.4-P']) +
 (0.952 * $_POST['pergunta']['1.7-E']) +
 (1.041 * $_POST['pergunta']['2.2-C']) +
 (1.195 * $_POST['pergunta']['5.5-B']) +
 (0.931 * $_POST['pergunta']['1.5-C']) +
 (0.766 * $_POST['pergunta']['5.6-B']) +
 (1.541 * $_POST['pergunta']['2.1-I'])
);

// Laço para montar query insert.
foreach ($_POST['pergunta'] as $p => $v) {
  //printf ("%s => %s<br />", $p, $v);
  $perguntas .= "'$p',";
  $respostas .= "'$v',";
}
// Removendo último caractere indesejado.
$perguntas = substr($perguntas, 0, -1);
$respostas = substr($respostas, 0, -1);

$query = "INSERT INTO resposta (".$perguntas.") VALUES (".$respostas.")";
if(mysqli_query($connection, $query)){
  echo "Cadastrado com sucesso!";
} else {
  echo mysqli_error($connection);
}
mysqli_free_result($result);

/*
$sql= "insert into resposta (perguntas[]) values('$_POST['pergunta'][]')";
$salvar = mysql_query($sql,$conexao);

$sql= "insert into origem (universidade, sigla, estado, municipio) values('$universidade','$sigla','$estado','$municipio')";
$salvar = mysql_query($sql,$conexao);
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Calcular IgovTI Ajustado</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <style type="text/css">
      :root { background-color: #E6E5E5; }
      li, p { color:#373636;
         font-family: 'Lato';
         font-size: 1.1em;
         font-weight: 300;
         font-style: normal;
         font-stretch: normal;
         line-height: 1.33;
         letter-spacing: normal;
         margin: 0 0 40px;
      }
    </style>
  </head>
  <body>
    <div>
      <p>O valor do seu Índice de Governança Ajustado é : <?php echo $igovti ?>. Confira abaixo sua categoria correspondente</p>
    </div>
    <p>Nível de Governança de TI </p>
    <ol>
      <li>Inicial        0  &le; iGovTI &lt; 30 </li>
      <li>Básico        30  &le; iGovTI &lt; 50 </li>
      <li>Intermediário 50  &le; iGovTI &lt; 70 </li>
      <li>Aprimorado    70  &le; iGovTI &le; 100</li>
    </ol>
  </body>
</html>

