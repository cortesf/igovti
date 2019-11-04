<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>IGovTI</title>
  <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
    @import url("http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
  <h1 style="background-color: #fff; font-weight: bold;">IGovTI</h1>
  <form action="proccess.php" method="POST" id="formulario" class="form"> 
<?php 
  include_once "config.php";
  $query = "SELECT id,nome FROM area";
  $result = mysqli_query($connection, $query);
  $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);

  foreach ($arr as $areas) {
    //printf ("(%s) %s<br />", $areas['id'], $areas['nome']);
    if ($areas['id'] == 1)
      echo '<input id="tab'.$areas['id'].'" type="radio" name="tabs" checked>';
    else
      echo '<input id="tab'.$areas['id'].'" type="radio" name="tabs">';
    echo '<label for="tab'.$areas['id'].'" class="tabs">'.$areas['nome'].'</label>';
  }
  mysqli_free_result($result);

  foreach ($arr as $areas) {
    $query = 'SELECT pergunta.id,pergunta.codigo,area.nome,pergunta FROM pergunta INNER JOIN area WHERE pergunta.id_area=area.id AND pergunta.id_area='.$areas['id'];
    $result = mysqli_query($connection, $query);
    $arr2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo '<div id="content'.$areas['id'].'">';
    
    foreach ($arr2 as $perguntas) {
      echo $perguntas['codigo'].') '.$perguntas['pergunta'].'<br />';
?>
      <label>
        <input type="radio" name="pergunta[<?php echo $perguntas['codigo']?>]" value="0.0"> Não se Aplica/Não Adota 
      </label>
      <label>
        <input type="radio" name="pergunta[<?php echo $perguntas['codigo']?>]" value="0.2"> Iniciou Plano 
      </label>
      <label>
        <input type="radio" name="pergunta[<?php echo $perguntas['codigo']?>]" value="0.5"> Adota Parcialmente 
      </label>
      <label>
        <input type="radio" name="pergunta[<?php echo $perguntas['codigo']?>]" value="1"> Adota Integralmente
      </label>
<?php  
    }
?>
    </div>
<?php
  }
  mysqli_free_result($result);
?>
    </div>
    <div class="bottom">
      <input class="button" type="submit" value="Calcular índice de Governança de TI">
    </div>
  </form>
</body>
</html>

