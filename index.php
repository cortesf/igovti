<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>IGovTI Ajustado</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
  <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
    @import url("http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="javascript.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<?php
$config = "./config.php";
if (!file_exists($config) && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $filename = fopen($config, 'w');
  $data = "<?php
    \$hostname = \"{$_POST['hostname']}\";
    \$username = \"{$_POST['username']}\";
    \$password = \"{$_POST['password']}\";
    \$database = \"{$_POST['database']}\";
    \$connection = mysqli_connect(\$hostname, \$username, \$password, \$database);
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
  <h1 style="background-color: #fff; font-weight: bold;">IGovTI Ajustado</h1>
  <form action="proccess.php" method="POST" id="formulario" class="form"> 
     
    <select id="instituicao" name="instituicao">
      <option value ="">Selecione a Instituição onde você trabalha</option>
      <option value="UNB">UnB – UNIVERSIDADE DE BRASÍLIA</option>
      <option value="UFG">UFG – UNIVERSIDADE FEDERAL DE GOIÁS</option>
      <option value="UFMT">UFMT – UNIVERSIDADE FEDERAL DE MATO GROSSO</option>
      <option value="UFGD">UFGD – UNIVERSIDADE FEDERAL DA GRANDE DOURADOS</option>
      <option value="UFMS">UFMS – UNIVESIDADE FEDERAL DE MATO GROSSO DO SUL</option>
      <option value="UFAL">UFAL – UNIVERSIDADE FEDERAL DE ALAGOAS</option>
      <option value="IFBA">IFBA – INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DA BAHIA</option>
      <option value="UFBA">UFBA – UNIVERSIDADE FEDERAL DA BAHIA</option>
      <option value="UFOB">UFOB – UNIVERSIDADE FEDERAL DO OESTE DA BAHIA</option>
      <option value="UFRB">UFRB – UNIVERSIDADE FEDERAL DO RECÔNCAVO DA BAHIA</option>
      <option value="UFSB">UFSB – UNIVERSIDADE FEDERAL DO SUL DA BAHIA</option>
      <option value="UFC">UFC – UNIVERSIDADE FEDERAL DO CEARÁ</option>
      <option value="UFCA" >UFCA – UNIVERSIDADE FEDERAL DO CARIRI</option>
      <option value="UNILAB">UNILAB – UNIVERSIDADE DA INTEGRAÇÃO INTERNACIONAL DA LUSOFONIA AFRO-BRASILEIRA</option>
      <option value="IFMA" >IFMA – INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO MARANHÃO</option>
      <option value="UFMA" >UFMA – UNIVERSIDADE FEDERAL DO MARANHÃO</option>
      <option value="UFCG" >UFCG – UNIVERSIDADE FEDERAL DE CAMPINA GRANDE</option>
      <option value="UFPB" >UFPB – UNIVERSIDADE FEDERAL DA PARAÍBA</option>
      <option value="UFPE" >UFPE – UNIVERSIDADE FEDERAL DE PERNAMBUCO</option>
      <option value="UFRPE">UFRPE – UNIVERSIDADE FEDERAL RURAL DE PERNAMBUCO</option>
      <option value="UNIVASF" >UNIVASF – UNIVERSIDADE FEDERAL DO VALE DO SÃO FRANCISCO</option>
      <option value="UFPI" >UFPI – UNIVERSIDADE FEDERAL DO PIAUÍ</option>
      <option value="UFERSA">UFERSA – UNIVERSIDADE FEDERAL RURAL DO SEMI-ÁRIDO</option>
      <option value="UFRN" >UFRN – UNIVERSIDADE FEDERAL DO RIO GRANDE DO NORTE</option>
      <option value="UFS" >UFS – UNIVERSIDADE FEDERAL DE SERGIPE</option>
      <option value="UFAC" >UFAC – UNIVERSIDADE FEDERAL DO ACRE</option>
      <option value="UNIFAP">UNIFAP – UNIVERSIDADE FEDERAL DO AMAPÁ</option>
      <option value="UFAM" >UFAM – UNIVERSIDADE FEDERAL DO AMAZONAS</option>
      <option value="UFOPA" >UFOPA – UNIVERSIDADE FEDERAL DO OESTE DO PARÁ</option>
      <option value="UFPA" >UFPA – UNIVERSIDADE FEDERAL DO PARÁ</option>
      <option value="UFRA" >UFRA – UNIVERSIDADE FEDERAL RURAL DA AMAZÔNIA</option>
      <option value="UNIFESSPA" >UNIFESSPA – UNIVERSIDADE FEDERAL SUL E SUDESTE DO PARÁ</option>
      <option value="UNIR" >UNIR – UNIVERSIDADE FEDERAL DE RONDÔNIA</option>
      <option value="UFRR" >UFRR – UNIVERSIDADE FEDERAL DE RORAIMA</option>
      <option value="UFT" >UFT – UNIVERSIDADE FEDERAL DE TOCANTINS</option>
      <option value="UFES" >UFES – UNIVERSIDADE FEDERAL DO ESPÍRITO SANTO</option>
      <option value="CEFET-MG" >CEFET-MG – CENTRO FEDERAL DE EDUCAÇÃO TECNOLÓGICA DE MINAS GERAIS</option>
      <option value="UFJF" >UFJF – UNIVERSIDADE FEDERAL DE JUIZ DE FORA</option>
      <option value="UFLA" >UFLA – UNIVERSIDADE FEDERAL DE LAVRAS</option>
      <option value="UFMG" >UFMG – UNIVERSIDADE FEDERAL DE MINAS GERAIS</option>
      <option value="UFOP" >UFOP – UNIVERSIDADE FEDERAL DE OURO PRETO</option>
      <option value="UFSJ" >UFSJ – UNIVERSIDADE FEDERAL DE SÃO JOÃO DEL-REI</option>
      <option value="UFTM" >UFTM – UNIVERSIDADE FEDERAL DO TRIÂNGULO MINEIRO</option>
      <option value="UFU" >UFU – UNIVERSIDADE FEDERAL DE UBERLÂNDIA</option>
      <option value="UFV" >UFV – UNIVERSIDADE FEDERAL DE VIÇOSA</option>
      <option value="UFVJM" >UFVJM – UNIVERSIDADE FEDERAL DOS VALES DO JEQUITINHONHA E MUCURI</option>
      <option value="UNIFAL-MG" >UNIFAL-MG – UNIVERSIDADE FEDERAL DE ALFENAS</option>
      <option value="UNIFEI" >UNIFEI – UNIVERSIDADE FEDERAL DE ITAJUBÁ</option>
      <option value="CEFET-RJ" >CEFET-RJ – CENTRO FEDERAL DE EDUCAÇÃO TECNOLÓGICA CELSO SUCKOW DA FONSECA</option>
      <option value="UFF">UFF – UNIVERSIDADE FEDERAL FLUMINENSE</option>
      <option value="UFRJ" >UFRJ – UNIVERSIDADE FEDERAL DO RIO DE JANEIRO</option>
      <option value="UFRRJ" >UFRRJ – UNIVERSIDADE FEDERAL RURAL DO RIO DE JANEIRO</option>
      <option value="UNIRIO" >UNIRIO – UNIVERSIDADE FEDERAL DO ESTADO DO RIO DE JANEIRO</option>
      <option value="UNIFESP" >UNIFESP – UNIVERSIDADE FEDERAL DE SÃO PAULO</option>
      <option value="UFABC" >UFABC – UNIVERSIDADE FEDERAL DO ABC</option>
      <option value="UFSCar" >UFSCar – UNIVERSIDADE FEDERAL DE SÃO CARLOS</option>
      <option value="UFPR" >UFPR – UNIVERSIDADE FEDERAL DO PARANÁ</option>
      <option value="UNILA" >UNILA – UNIVERSIDADE FEDERAL DA INTEGRAÇÃO LATINO-AMERICANA</option>
      <option value="UTFPR">UTFPR – UNIVERSIDADE TECNOLÓGICA FEDERAL DO PARANÁ</option>
      <option value="FURG">FURG – FUNDAÇÃO UNIVERSIDADE FEDERAL DO RIO GRANDE</option>
      <option value="UFCSPA">UFCSPA – UNIVERSIDADE FEDERAL DE CIÊNCIAS DA SAÚDE DE PORTO ALEGRE</option>
      <option value="UFPel">UFPel – UNIVERSIDADE FEDERAL DE PELOTAS</option>
      <option value="UFRGS">UFRGS – UNIVERSIDADE FEDERAL DO RIO GRANDE DO SUL</option>
      <option value="UFSM">UFSM – UNIVERSIDADE FEDERAL DE SANTA MARIA</option>
      <option value="UNIPAMPA">UNIPAMPA – UNIVERSIDADE FEDERAL DO PAMPA</option>
      <option value="UFFS"> UFFS – UNIVERSIDADE FEDERAL DA FRONTEIRA DO SUL</option>
      <option value="UFSC"> UFSC – UNIVERSIDADE FEDERAL DE SANTA CATARINA</option>         
    </select>
    <label>Outro:<input type="text" name="instituicao"></label>

<?php 
  include_once "config.php";

  $query = "SELECT id,nome FROM area";
  $result = mysqli_query($connection, $query);
  $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);

  foreach ($arr as $areas) {
    //printf ("(%s) %s<br />", $areas['id'], $areas['nome']);
    if ($areas['id'] == 1)
      echo '<input id="tab'.$areas['id'].'" type="radio" name="tabs" value="'.$areas['nome'].'" checked>';
    else
      echo '<input id="tab'.$areas['id'].'" type="radio" name="tabs" value="'.$areas['nome'].'">';

    echo '<label for="tab'.$areas['id'].'" class="tabs">'.$areas['nome'].'</label>';
  }

  mysqli_free_result($result);
  foreach ($arr as $areas) {
    $query = 'SELECT pergunta.codigo,area.nome,pergunta FROM pergunta INNER JOIN area WHERE pergunta.id_area=area.id AND pergunta.id_area='.$areas['id'];
    $result = mysqli_query($connection, $query);
    $arr2 = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo '<div id="content'.$areas['id'].'">';
    
    foreach ($arr2 as $perguntas) {
      echo $perguntas['codigo'].') '.$perguntas['pergunta'].'<br />';
?>
      <label>
        <input type="radio" name="pergunta[<?php echo $perguntas['codigo']?>]" value="0.0" checked> Não se Aplica/Não Adota 
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
      <input type="button" id="prev" value="<<Anterior"></button>
      <input type="button" id="next" value="Próximo>>"></button>
      <input class="button" type="submit" value="Calcular índice de Governança de TI Ajustado">
    </div>
        
  </form>
</body>
</html>

