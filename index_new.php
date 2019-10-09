<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>IGovTI</title>
  <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
    @import url("http://netdna.bootstrapcdn.com/font-awesome/<p>4.<p>1.0/css/font-awesome.css");
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
  <form action="radio.php" method="POST" id="formulario" class="form"> 
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
          
          <B>Calcule aqui o seu Índice de Governança de TI.<B>
                
            <B>Insira o nome da Instituição onde trabalha</B><br>
	        <input type="text" name=Instituicao autofocus><br> 
                
            <br><B>Insira a sigla da sua Instituição</B><br>
	        <input type="text" name=Sigla  ><br> 
            <B>Insira o estado em que sua Instituição é localizada</B><br>
	        <input type="text" name=Estado autofocus><br> 
                
            <br><B>Insira município em que sua Instituição é localizada</B><br>
	        <input type="text" name=Município  ><br>
              
              <?php 
        include_once("config.php");
        $query = mysqli_query("SELECT * FROM pergunta", $conexao);
        foreach ($pergunta['id']) {
        
                echo $query($pergunta['codigo'],$pergunta['pergunta']);?>
                <input type=radio name=perguntas[] value=0.0 > Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
      
    
       <?php }?>
        
                
      </div>
      <div id="content2">
        <B>2.1-C; O processo de planejamento estratégico institucional prevê a participação da área de TI</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.1-E; A organização possui plano estratégico institucional vigente, formalmente instituído pelo seu dirigente máximo.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.1-H; O plano estratégico institucional vigente estabelece os projetos e ações considerados necessários e suficientes para o alcance das metas fixadas.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.1-I; A execução do plano estratégico institucional vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.2-B; O processo de planejamento de TI prevê a participação das áreas mais relevantes da organização.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.2-C; O processo de planejamento de TI prevê o apoio do comitê de TI.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.2-D; O processo de planejamento de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.2-F; O plano de TI vigente contempla objetivos, indicadores e metas para a TI, com os objetivos explicitamente alinhados aos objetivos de negócio constantes do plano estratégico institucional.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.2-G; O plano de TI vigente contém alocação de recursos (orçamentários, humanos e materiais) e estratégia de execução indireta (terceirização).</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.2-H; A execução do plano de TI vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>2.2-J; O plano de TI vigente fundamenta a proposta orçamentária de TI.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
      </div>
      <div id="content3">
        <B>3.1-A; A organização identifica e mapeia os principais processos de negócio.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>3.1-B; Os principais processos de negócio da organização são suportados por sistemas informatizados.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>3.1-C; Há catálogo publicado com informações atualizadas de cada um dos sistemas informatizados.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>3.1-D; A organização designa formalmente responsáveis da área de negócio para a gestão dos respectivos sistemas informatizados.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>3.2-A; Os planos de TI vigentes são divulgados na internet, sendo facilmente acessados.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>3.2-C; As informações sobre o acompanhamento das ações e dos projetos de TI são divulgadas na internet, sendo facilmente acessadas.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>3.2-D; Os editais, seus respectivos anexos e os resultados das licitações de TI (inteiro teor) são divulgados na internet, sendo facilmente acessados.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>3.2-E; Os estudos técnicos preliminares (inteiro teor) são divulgados na internet, juntamente com os editais de licitação de TI, sendo facilmente acessados.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>3.2-G; A execução orçamentária de TI, ao longo do exercício, é divulgada na internet, sendo facilmente acessada.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
      </div>
      <div id="content4">
        <B>4.1-B; A organização define critérios para avaliação e atendimento dos pedidos de capacitação.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>4.1-C; A organização elabora, periodicamente, plano de capacitação para suprir as necessidades de desenvolvimento de competências de TI.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>4.1-D; A organização acompanha a execução do plano de capacitação, com identificação e correção de desvios.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>4.1-F; O plano de capacitação inclui o desenvolvimento de competências em gestão de TI.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>4.2-A; A organização estabelece metas de desempenho para o pessoal de TI.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>4.2-B; A organização avalia periodicamente o desempenho do pessoal de TI.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>4.2-C; A organização estabelece benefício, financeiro ou não se aplica, em função do desempenho alcançado pelo pessoal de TI.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>4.3-B1; O quantitativo considerado de remuneração ideal foi estimado com base em estudo técnico de avaliação quantitativa e qualitativa do quadro de pessoal da área de TI.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
      </div>
        <div id="content5">
        <B>5.1-M; A organização executa processos de gerenciamento de problemas.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.2-F; A área de TI comunica periodicamente o resultado desse monitoramento às áreas clientes.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.3-C; A organização trata os riscos de TI dos processos críticos de negócio com base em um plano de tratamento de risco.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.4-C; A organização possui gestor de segurança da informação formalmente designado, responsável pelas ações corporativas de segurança da informação.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.4-P; O processo de monitoramento do uso dos recursos de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.5-A; A organização executa um processo de software, com o objetivo de assegurar que o software a ser desenvolvido, direta ou indiretamente, atenda às suas necessidades.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.5-B; O processo de software é acompanhado por meio de mensurações, com indicadores quantitativos e metas de processo a cumprir.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.6-B; A organização executa processo de gerenciamento de projetos de TI.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.7-D; A organização explicita, nos autos, o alinhamento entre a contratação e os planos estratégico institucional e de TI vigentes.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.7-E; A organização realiza análise dos riscos que possam comprometer o sucesso do processo de contratação e dos resultados que atendam às necessidades de negócio.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.7-I; A organização diferencia e define formalmente os papéis de gestor e fiscal do contrato.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.8-D; O processo de planejamento das contratações de TI é periodicamente revisado e melhorado com base nas mensurações obtidas.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.9-B; A organização executa processo de gestão de contratos de TI.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
            <br><br>
            <B>5.9-E; O processo de gestão de contratos de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
            <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
            <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
            <input type=radio name=perguntas[] value=1> Adota Integralmente
      </div>
        <div id="content6">
            <B>6.2-A; A organização possui projetos de TI com mais de dois anos de início e que estão em andamento.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>6.4-C; Os serviços acessíveis via internet implementam as diretrizes e as especificações dos Padrões de Interoperabilidade de Governo Eletrônico – ePING, previsto no Programa de Governo Eletrônico Brasileiro.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>6.4-E; Há catálogo publicado com informações claras e precisas de cada um dos serviços acessíveis via internet.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <B>6.4-G; Os resultados das avaliações dos serviços acessíveis via internet são divulgados ao cidadão/cliente.</B><br>
                <input type=radio name=perguntas[] value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=perguntas[] value=0.2> Iniciou Plano 
                <input type=radio name=perguntas[] value=0.5> Adota Parcialmente 
                <input type=radio name=perguntas[] value=1> Adota Integralmente
                <br><br>
                <button type="submit" name="" value="" class="botao">Calcule seu Índice de Governança de TI !</button>
             
        </div>
  </form>
  
</body>
</html>

