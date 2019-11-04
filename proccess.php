<?php
include_once("config.php");
?>

<pre>
<?php 
  var_dump($_POST); 
  //echo "TESTE ===>" . $_POST['pergunta']['6.4-G'];
?>
</pre>

<?php
$universidade = S_POST['instituicao'];
$sigla = S_POST['sigla'];
$estado = S_POST['estado'];
$municipio = S_POST['municipio'];

$igovti = (1.794 +
 (1.716 * $_POST['pergunta'][4]) +
 (2.515 * $_POST['pergunta'][38]) +
 (1.272 * $_POST['pergunta'][8]) +
 (1.432 * $_POST['pergunta'][49]) +
 (2.067 * $_POST['pergunta'][41]) +
 (2.005 * $_POST['pergunta'][55]) +
 (3.727 * $_POST['pergunta'][27]) +
 (1.426 * $_POST['pergunta'][5]) +
 (0.875 * $_POST['pergunta'][52]) +
 (0.953 * $_POST['pergunta'][22]) +
 (2.445 * $_POST['pergunta'][30]) +
 (2.249 * $_POST['pergunta'][9]) +
 (0.889 * $_POST['pergunta'][60]) +
 (0.936 * $_POST['pergunta'][24]) +
 (1.247 * $_POST['pergunta'][10]) +
 (1.206 * $_POST['pergunta'][56]) +
 (1.652 * $_POST['pergunta'][17]) +
 (3.084 * $_POST['pergunta'][40]) +
 (2.742 * $_POST['pergunta'][28])+
 (1.547 * $_POST['pergunta'][13]) +
 (1.362 * $_POST['pergunta'][37]) +
 (2.588 * $_POST['pergunta'][16]) +
 (1.709 * $_POST['pergunta'][33]) +
 (1.929 * $_POST['pergunta'][45]) +
 (1.356 * $_POST['pergunta'][32]) +
 (1.556 * $_POST['pergunta'][6]) +
 (2.050 * $_POST['pergunta'][36]) +
 (1.826 * $_POST['pergunta'][14]) +
 (0.981 * $_POST['pergunta'][3]) +
 (1.386 * $_POST['pergunta'][26]) +
 (1.154 * $_POST['pergunta'][53]) +
 (1.372 * $_POST['pergunta'][59]) +
 (1.470 * $_POST['pergunta'][23]) +
 (0.622 * $_POST['pergunta'][58]) +
 (0.886 * $_POST['pergunta'][34]) +
 (0.796 * $_POST['pergunta'][1]) +
 (1.183 * $_POST['pergunta'][25]) +
 (2.700 * $_POST['pergunta'][46]) +
 (1.799 * $_POST['pergunta'][42]) +
 (1.176 * $_POST['pergunta'][43]) +
 (1.119 * $_POST['pergunta'][20]) +
 (1.610 * $_POST['pergunta'][29]) +
 (1.412 * $_POST['pergunta'][39]) +
 (0.775 * $_POST['pergunta'][18]) +
 (0.606 * $_POST['pergunta'][47]) +
 (1.004 * $_POST['pergunta'][2]) +
 (1.210 * $_POST['pergunta'][12]) +
 (0.673 * $_POST['pergunta'][35]) +
 (0.986 * $_POST['pergunta'][31]) +
 (1.242 * $_POST['pergunta'][7])  +
 (1.000 * $_POST['pergunta'][57]) +
 (0.978 * $_POST['pergunta'][44]) +
 (0.746 * $_POST['pergunta'][54]) +
 (1.443 * $_POST['pergunta'][61]) +
 (0.933 * $_POST['pergunta'][48]) +
 (0.952 * $_POST['pergunta'][15]) +
 (1.041 * $_POST['pergunta'][21]) +
 (1.195 * $_POST['pergunta'][50]) +
 (0.931 * $_POST['pergunta'][11]) +
 (0.766 * $_POST['pergunta'][51]) +
 (1.541 * $_POST['pergunta'][19])
);

/*
$sql= "insert into resposta (perguntas[]) values('$respostas[]')";
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

