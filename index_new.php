<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>IGovTI</title>
  <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
    @import url("http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/<p>1.0.7/prefixfree.min.js"></script>
  </style>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
$config = "./config.php";
if (!file_exists($config) && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $filename = fopen($config, 'w');
  $data = "<?php
    \\\ Variables to connection
    \$hostname = \"{$_POST['hostname']}\";
    \$username = \"{$_POST['username']}\";
    \$password = \"{$_POST['password']}\";
    \$database = \"{$_POST['database']}\";
    \\\ Conection
    \$conection = mysqli_connect(\$hostname, \$username, \$password, \$database);
?>
";
  fwrite($filename, $data);
  fclose($filename);
} else if (!file_exists($config)) {
?>
  <h1>Dados para Conexão</h1>
  <form action="" method="POST" id="formconfig"> 
    <label>Hostname:
      <input type="text" name="hostname" autofocus>
    </label>
    <label>Username:
      <input type="text" name="username">
    </label>
    <label>Password:
      <input type="password" name="password">
    </label>
    <label>Database:
      <input type="text" name="database">
    </label>
    <input type="submit" name="" value="Enviar">
  </form>
<?php
}
?>
<body>
    
<?php 
  include_once "config.php";
?>
  <form action="proccess.php" method="POST" id="formulario" class="form"> 
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" class="tabs">Liderança</label>
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" class="tabs">Estratégias</label>
    <input id="tab3" type="radio" name="tabs">
    <label for="tab3" class="tabs">Informações</label>
    <input id="tab4" type="radio" name="tabs">
    <label for="tab4" class="tabs">Pessoas</label>
    <input id="tab5" type="radio" name="tabs">
    <label for="tab5" class="tabs">Processos</label>
    <input id="tab6" type="radio" name="tabs">
    <label for="tab6" class="tabs">Resultados</label>
      
    <div id="content1">        

        
<?php
    $query1 = "SELECT * FROM pergunta JOIN area on id_area=pergunta.id WHERE id_area == 1 ";
    $result1 = mysqli_query($connection, $query1);
    while ($row = mysqli_fetch_assoc($result)) {
    printf ("%s) %s<br />", $row['codigo'], $row['pergunta']);
        
?>
    <label>
      <input type=radio name=perguntas[] value=0.0 > Não se Aplica/Não Adota 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
    </label>
    <label>
      <input type=radio name=perguntas[] value=1> Adota Integralmente
    </label>
<?php
  }
?>
      </div>
      <div id="content2">
        <?php
    $query2 = "SELECT * FROM pergunta JOIN area on id_area=pergunta.id WHERE id_area == 2 ";
    $result2 = mysqli_query($connection, $query2);
    while ($row = mysqli_fetch_assoc($result)) {
    printf ("%s) %s<br />", $row['codigo'], $row['pergunta']);
        
?>
    <label>
      <input type=radio name=perguntas[] value=0.0 > Não se Aplica/Não Adota 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
    </label>
    <label>
      <input type=radio name=perguntas[] value=1> Adota Integralmente
    </label>
<?php
  }
?>
      </div>
      <div id="content3">
        <?php
    $query3 = "SELECT * FROM pergunta JOIN area on id_area=pergunta.id WHERE id_area == 3 ";
    $result3 = mysqli_query($connection, $query3);
    while ($row = mysqli_fetch_assoc($result)) {
    printf ("%s) %s<br />", $row['codigo'], $row['pergunta']);
        
?>
    <label>
      <input type=radio name=perguntas[] value=0.0 > Não se Aplica/Não Adota 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
    </label>
    <label>
      <input type=radio name=perguntas[] value=1> Adota Integralmente
    </label>
<?php
  }
?>
      </div>
      <div id="content4">
        <?php
    $query4 = "SELECT * FROM pergunta JOIN area on id_area=pergunta.id WHERE id_area == 4 ";
    $result4 = mysqli_query($connection, $query1);
    while ($row = mysqli_fetch_assoc($result)) {
    printf ("%s) %s<br />", $row['codigo'], $row['pergunta']);
        
?>
    <label>
      <input type=radio name=perguntas[] value=0.0 > Não se Aplica/Não Adota 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
    </label>
    <label>
      <input type=radio name=perguntas[] value=1> Adota Integralmente
    </label>
<?php
  }
?>
      </div>
        <div id="content5">
        <?php
    $query5 = "SELECT * FROM pergunta JOIN area on id_area=pergunta.id WHERE id_area == 5 ";
    $result5 = mysqli_query($connection, $query5);
    while ($row = mysqli_fetch_assoc($result)) {
    printf ("%s) %s<br />", $row['codigo'], $row['pergunta']);
        
?>
    <label>
      <input type=radio name=perguntas[] value=0.0 > Não se Aplica/Não Adota 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
    </label>
    <label>
      <input type=radio name=perguntas[] value=1> Adota Integralmente
    </label>
<?php
  }
?>
      </div>
        <div id="content6">
            <?php
    $query6 = "SELECT * FROM pergunta JOIN area on id_area=pergunta.id WHERE id_area == 6 ";
    $result6 = mysqli_query($connection, $query6);
    while ($row = mysqli_fetch_assoc($result)) {
    printf ("%s) %s<br />", $row['codigo'], $row['pergunta']);
        
?>
    <label>
      <input type=radio name=perguntas[] value=0.0 > Não se Aplica/Não Adota 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
    </label>
    <label>
      <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
    </label>
    <label>
      <input type=radio name=perguntas[] value=1> Adota Integralmente
    </label>
<?php
  }
?>
                <button type="submit" name="" value="" class="botao">Calcule seu Índice de Governança de TI !</button>
             
        </div>
  </form>
  
</body>
</html>

