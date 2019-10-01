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
if (!file_exists($config)) {
?>

  <h1>Dados para Conexão</h1>

  <form method="POST" id="formconfig"> 
    <label>Hostname:
      <input type="text" name="hostname" autofocus>
    </label>
    <label>Username:
      <input type="text" name="username">
    </label>
    <label>Password:
      <input type="text" name="password">
    </label>
    <label>Database:
      <input type="password" name="database">
    </label>
    <input type="submit" name="" value="Enviar">
  </form>

<?php
} else {
    $hostname = $_POST['hostname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $database = $_POST['database'];
    $filename = fopen($config, "w");

    $conection = mysqli_connect($hostname, $username, $password, $database);    

    fwrite($filename, $conection);
    fclose($filename);
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
        <p>1.1-c) A organização realiza avaliações sobre a definição e compreensão dos papéis e responsabilidades organizacionais.</p>
      <label>
        <input type="radio" name="Pergunta1" value="0.0">
        Não se Aplica/Não Adota
      </label>
      <label>
        <input type="radio" name="Pergunta1" value="0.2">
        Iniciou Plano
      </label>
      <label>
        <input type="radio" name="Pergunta1" value="0.5">
        Adota Parcialmente
      </label>
      <label>
        <input type="radio" name="Pergunta1" value="1">
        Adota Integralmente
      </label>

      <br><br>
        <p>1.1-d) A organização dispõe de um código de ética, formalmente instituído, bem como divulga e monitora o seu cumprimento.</p>
      <label>
            <input type=radio name=Pergunta2 value=0.0> Não se Aplica/Não Adota 
      </label>
      <label>
            <input type=radio name=Pergunta2 value=0.2> Iniciou Plano 
      </label>
    
    <label>
            <input type=radio name=Pergunta2 value=0.5> Adota Parcialmente 
        </label>
    <label>
            <input type=radio name=Pergunta2 value=1> Adota Integralmente
        </label>
      <br><br>

        <p>1.1-e) A organização dispõe de uma política corporativa de gestão de riscos formalmente instituída, como norma de cumprimento obrigatório.</p>
     <label>
      <input type=radio name=Pergunta3 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta3 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta3 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta3 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.2-a) A organização define e comunica formalmente papéis e responsabilidades mais relevantes para a governança e gestão de TI.</p>
    <label>
      <input type=radio name=Pergunta4 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta4 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta4 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta4 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.2-c) O comitê de TI realiza as atividades previstas em seu ato constitutivo.</p><br>
    <label>
      <input type=radio name=Pergunta5 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta5 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta5 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta5 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.3-a) A organização define formalmente diretrizes para o planejamento de TI.</p><br>
    <label>
      <input type=radio name=Pergunta6 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta6 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta6 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta6 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.3-b) A organização define formalmente diretrizes para gestão do portfólio de projetos e serviços de TI, inclusive para definição de critérios de priorização e de alocação orçamentária.</p><br>
    <label>    
      <input type=radio name=Pergunta7 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta7 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta7 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta7 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.3-d) A organização define formalmente diretrizes para avaliação do desempenho dos serviços de TI.</p><br>
    <label>
      <input type=radio name=Pergunta8 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta8 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta8 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta8 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.4-b) A organização define e comunica formalmente papéis e responsabilidades pela gestão de riscos de TI.</p><br>
    <label>
      <input type=radio name=Pergunta9 value=0.0> Não se Aplica/Não Adota
        </label>
    <label>
      <input type=radio name=Pergunta9 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta9 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta9 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.5-b) A organização define formalmente diretrizes para garantir o desenvolvimento de competências e a retenção de pessoal técnico de TI.</p><br>
    <label>
      <input type=radio name=Pergunta10 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta10 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta10 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta10 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.5-c) A organização define formalmente diretrizes para avaliação e incentivo ao desempenho de gestores de TI.</p><br>
    <label>
      <input type=radio name=Pergunta11 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta11 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta11 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta11 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.5-e) A organização define formalmente diretrizes para escolha dos líderes da área de TI, ocupantes dos cargos de chefia e de assessoramento.</p><br>
    <label>
      <input type=radio name=Pergunta12 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta12 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta12 value=0.5> Adota Parcialmente
        </label>
    <label>
      <input type=radio name=Pergunta12 value=1> Adota Integralmente
        </label>
      <br><br>

        <p>1.7-a) A organização define formalmente diretrizes para avaliação da governança e da gestão de TI.</p><br>
    <label>
      <input type=radio name=Pergunta13 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta13 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta13 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta13 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.7-c) A organização realiza avaliação periódica de sistemas de informação.</p><br>
    <label>
      <input type=radio name=Pergunta14 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta14 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta14 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta14 value=1> Adota Integralmente
        </label>
      <br><br>
        <p>1.7-e) A organização realiza avaliação periódica de contratos de TI.</p><br>
    <label>
      <input type=radio name=Pergunta15 value=0.0> Não se Aplica/Não Adota 
        </label>
    <label>
      <input type=radio name=Pergunta15 value=0.2> Iniciou Plano 
        </label>
    <label>
      <input type=radio name=Pergunta15 value=0.5> Adota Parcialmente 
        </label>
    <label>
      <input type=radio name=Pergunta15 value=1> Adota Integralmente
        </label>
      <br><br>
    </div>

    <div id="content2">
        <p>2.1-c) O processo de planejamento estratégico institucional prevê a participação da área de TI.</p><br>
        <label>
              <input type=radio name=Pergunta16 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
              <input type=radio name=Pergunta16 value=0.2> Iniciou Plano 
            </label>
        <label>
              <input type=radio name=Pergunta16 value=0.5> Adota Parcialmente 
            </label>
        <label>
              <input type=radio name=Pergunta16 value=1> Adota Integralmente
            </label>
              <br><br>
        <p>2.1-e) A organização possui plano estratégico institucional vigente, formalmente instituído pelo seu dirigente máximo.</p><br>
            <label>
              <input type=radio name=Pergunta17 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta17 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta17 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta17 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>2.1-h) O plano estratégico institucional vigente estabelece os projetos e ações considerados necessários e suficientes para o alcance das metas fixadas.</p><br>
            <label>
              <input type=radio name=Pergunta18 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta18 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta18 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta18 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>2.1-i) A execução do plano estratégico institucional vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios.</p><br>
            <label>
              <input type=radio name=Pergunta19 value=0.0> Não se Aplica/Não Adota
                </label>
            <label>
              <input type=radio name=Pergunta19 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta19 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta19 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>2.2-b) O processo de planejamento de TI prevê a participação das áreas mais relevantes da organização.</p><br>
            <label>
              <input type=radio name=Pergunta20 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta20 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta20 value=0.5> Adota Parcialmente
                </label>
            <label>
              <input type=radio name=Pergunta20 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>2.2-c) O processo de planejamento de TI prevê o apoio do comitê de TI.</p><br>
            <label>
              <input type=radio name=Pergunta21 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta21 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta21 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta21 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>2.2-d) O processo de planejamento de TI está formalmente instituído, como norma de cumprimento obrigatório.</p><br>
            <label>
              <input type=radio name=Pergunta22 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta22 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta22 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta22 value=1> Adota Integralmente
                </label>
              <br><br>

        <p>2.2-f) O plano de TI vigente contempla objetivos, indicadores e metas para a TI, com os objetivos explicitamente alinhados aos objetivos de negócio constantes do plano estratégico institucional.</p><br>
            <label>
              <input type=radio name=Pergunta23 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta23 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta23 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta23 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>2.2-g) O plano de TI vigente contém alocação de recursos (orçamentários, humanos e materiais) e estratégia de execução indireta (terceirização).</p><br>
            <label>
              <input type=radio name=Pergunta24 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta24 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta24 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta24 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>2.2-h) A execução do plano de TI vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios.</p><br>
            <label>
              <input type=radio name=Pergunta25 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta25 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta25 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta25 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>2.2-j) O plano de TI vigente fundamenta a proposta orçamentária de TI.</p><br>
            <label>
              <input type=radio name=Pergunta26 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta26 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta26 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta26 value=1> Adota Integralmente
                </label>
              <br><br>
    </div>

    <div id="content3">
        <p>3.1-a) A organização identifica e mapeia os principais processos de negócio.</p><br>
        <label>
              <input type=radio name=Pergunta27 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
              <input type=radio name=Pergunta27 value=0.2> Iniciou Plano 
            </label>
        <label>
              <input type=radio name=Pergunta27 value=0.5> Adota Parcialmente 
            </label>
        <label>
              <input type=radio name=Pergunta27 value=1> Adota Integralmente
            </label>
              <br><br>
        <p>3.1-b) Os principais processos de negócio da organização são suportados por sistemas informatizados.</p><br>
            <label>
              <input type=radio name=Pergunta28 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta28 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta28 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta28 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>3.1-c) Há catálogo publicado com informações atualizadas de cada um dos sistemas informatizados.</p><br>
            <label>
              <input type=radio name=Pergunta29 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta29 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta29 value=0.5> Adota Parcialmente
                </label>
            <label>
              <input type=radio name=Pergunta29 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>3.1-d) A organização designa formalmente responsáveis da área de negócio para a gestão dos respectivos sistemas informatizados.</p><br>
            <label>
              <input type=radio name=Pergunta30 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
            
              <input type=radio name=Pergunta30 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta30 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta30 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>3.2-a) Os planos de TI vigentes são divulgados na internet, sendo facilmente acessados.</p><br>
            <label>
              <input type=radio name=Pergunta31 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta31 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta31 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta31 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>3.2-c) As informações sobre o acompanhamento das ações e dos projetos de TI são divulgadas na internet, sendo facilmente acessadas.</p><br>
            <label>
              <input type=radio name=Pergunta32 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta32 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta32 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta32 value=1> Adota Integralmente
                </label>
              <br><br>

        <p>3.2-d) Os editais, seus respectivos anexos e os resultados das licitações de TI (inteiro teor) são divulgados na internet, sendo facilmente acessados.</p><br>
            <label>
              <input type=radio name=Pergunta33 value=0.0> Não se Aplica/Não Adota
                </label>
            <label>
              <input type=radio name=Pergunta33 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta33 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta33 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>3.2-e) Os estudos técnicos preliminares (inteiro teor) são divulgados na internet, juntamente com os editais de licitação de TI, sendo facilmente acessados.</p><br>
            <label>
              <input type=radio name=Pergunta34 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta34 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta34 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta34 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>3.2-g) A execução orçamentária de TI, ao longo do exercício, é divulgada na internet, sendo facilmente acessada.</p><br>
            <label>
              <input type=radio name=Pergunta35 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta35 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta35 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta35 value=1> Adota Integralmente
                </label>
              <br><br>
    </div>

    <div id="content4">
        <p>4.1-b) A organização define critérios para avaliação e atendimento dos pedidos de capacitação.</p><br>
        <label>
              <input type=radio name=Pergunta36 value=0.0> Não se Aplica/Não Adota 
            </label>
            <label>
              <input type=radio name=Pergunta36 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta36 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta36 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>4.1-c) A organização elabora, periodicamente, plano de capacitação para suprir as necessidades de desenvolvimento de competências de TI.</p><br>
            <label>
              <input type=radio name=Pergunta37 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta37 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta37 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta37 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>4.1-d) A organização acompanha a execução do plano de capacitação, com identificação e correção de desvios.</p><br>
            <label>
              <input type=radio name=Pergunta38 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta38 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta38 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta38 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>4.1-f) O plano de capacitação inclui o desenvolvimento de competências em gestão de TI.</p><br>
            <label>
              <input type=radio name=Pergunta39 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta39 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta39 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta39 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>4.2-a) A organização estabelece metas de desempenho para o pessoal de TI.</p><br>
            <label>
              <input type=radio name=Pergunta40 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta40 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta40 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta40 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>4.2-b) A organização avalia periodicamente o desempenho do pessoal de TI.</p><br>
            <label>
              <input type=radio name=Pergunta41 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta41 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta41 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta41 value=1> Adota Integralmente
                </label>
              <br><br>
        <p>4.2-c) A organização estabelece benefício, financeiro ou não se aplica, em função do desempenho alcançado pelo pessoal de TI.</p><br>
            <label>
              <input type=radio name=Pergunta42 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta42 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta42 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta42 value=1> Adota Integralmente
                </label>
              <br><br>

        <p>4.3-b1) O quantitativo considerado de remuneração ideal foi estimado com base em estudo técnico de avaliação quantitativa e qualitativa do quadro de pessoal da área de TI.</p><br>
            <label>
              <input type=radio name=Pergunta43 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta43 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta43 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta43 value=1> Adota Integralmente
                </label>
              <br><br>
    </div>

      <div id="content5">
          <p>5.1-M; A organização executa processo de gerenciamento de problemas.</p><br>
          <label>
            <input type=radio name=Pergunta44 value=0.0> Não se Aplica/Não Adota 
              </label>
         <label>
            <input type=radio name=Pergunta44 value=0.2> Iniciou Plano 
             </label>
            <label>
            <input type=radio name=Pergunta44 value=0.5> Adota Parcialmente 
                </label>
            <label>
            <input type=radio name=Pergunta44 value=1> Adota Integralmente
                </label>
            <br><br>
          <p>5.2-f) A área de TI comunica periodicamente o resultado desse monitoramento às áreas clientes.</p><br>
        <label>
            <input type=radio name=Pergunta45 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta45 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta45 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta45 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.3-c) A organização trata os riscos de TI dos processos críticos de negócio com base em um plano de tratamento de risco.</p><br>
        <label>
            <input type=radio name=Pergunta46 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta46 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta46 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta46 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.4-c) A organização possui gestor de segurança da informação formalmente designado, responsável pelas ações corporativas de segurança da informação.</p><br>
        <label>
            <input type=radio name=Pergunta47 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta47 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta47 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta47 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.4-P; O processo de monitoramento do uso dos recursos de TI está formalmente instituído, como norma de cumprimento obrigatório.</p><br>
        <label>
            <input type=radio name=Pergunta48 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta48 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta48 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta48 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.5-a) A organização executa um processo de software, com o objetivo de assegurar que o software a ser desenvolvido, direta ou indiretamente, atenda às suas necessidades.</p><br>
        <label>
            <input type=radio name=Pergunta49 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta49 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta49 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta49 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.5-b) O processo de software é acompanhado por meio de mensurações, com indicadores quantitativos e metas de processo a cumprir.</p><br>
        <label>
            <input type=radio name=Pergunta50 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta50 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta50 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta50 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.6-b) A organização executa processo de gerenciamento de projetos de TI.</p><br>
        <label>
            <input type=radio name=Pergunta51 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta51 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta51 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta51 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.7-d) A organização explicita, nos autos, o alinhamento entre a contratação e os planos estratégico institucional e de TI vigentes.</p><br>
        <label>
            <input type=radio name=Pergunta52 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta52 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta52 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta52 value=1> Adota Integralmente
            </label>
            <br><br>

          <p>5.7-e) A organização realiza análise dos riscos que possam comprometer o sucesso do processo de contratação e dos resultados que atendam às necessidades de negócio.</p><br>
        <label>
            <input type=radio name=Pergunta53 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta53 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta53 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta53 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.7-i) A organização diferencia e define formalmente os papéis de gestor e fiscal do contrato.</p><br>
            
        <label>
            <input type=radio name=Pergunta54 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta54 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta54 value=0.5> Adota Parcialmente 
          </label>
          
        <label>
            <input type=radio name=Pergunta54 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.8-d) O processo de planejamento das contratações de TI é periodicamente revisado e melhorado com base nas mensurações obtidas.</p><br>
        <label>
            <input type=radio name=Pergunta55 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta55 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta55 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta55 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.9-b) A organização executa processo de gestão de contratos de TI.</p><br>
        <label>
            <input type=radio name=Pergunta56 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta56 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta56 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta56 value=1> Adota Integralmente
            </label>
            <br><br>
          <p>5.9-e) O processo de gestão de contratos de TI está formalmente instituído, como norma de cumprimento obrigatório.</p><br>
        <label>
            <input type=radio name=Pergunta57 value=0.0> Não se Aplica/Não Adota 
            </label>
        <label>
            <input type=radio name=Pergunta57 value=0.2> Iniciou Plano 
            </label>
        <label>
            <input type=radio name=Pergunta57 value=0.5> Adota Parcialmente 
            </label>
        <label>
            <input type=radio name=Pergunta57 value=1> Adota Integralmente
            </label>
      </div>

      <div id="content6">
          <p>6.2-a) A organização possui projetos de TI com mais de dois anos de início e que estão em andamento.</p><br>
          <label>
              <input type=radio name=Pergunta58 value=0.0> Não se Aplica/Não Adota 
              </label>
            <label>
              <input type=radio name=Pergunta58 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta58 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta58 value=1> Adota Integralmente
                </label>
              <br><br>
          <p>6.4-c) Os serviços acessíveis via internet implementam as diretrizes e as especificações dos Padrões de Interoperabilidade de Governo Eletrônico – ePING, previsto no Programa de Governo Eletrônico Brasileiro.</p><br>
            <label>
              <input type=radio name=Pergunta59 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta59 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta59 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta59 value=1> Adota Integralmente
                </label>
              <br><br>
          <p>6.4-e) Há catálogo publicado com informações claras e precisas de cada um dos serviços acessíveis via internet.</p><br>
            <label>
              <input type=radio name=Pergunta60 value=0.0> Não se Aplica/Não Adota 
                </label>
            <label>
              <input type=radio name=Pergunta60 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta60 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta60 value=1> Adota Integralmente
                </label>
              <br><br>
          <p>6.4-g) Os resultados das avaliações dos serviços acessíveis via internet são divulgados ao cidadão/cliente.</p><br>
            <label>
              <input type=radio name=Pergunta61 value=0.0> Não se Aplica/Não Adota
                </label>
            <label>
              <input type=radio name=Pergunta61 value=0.2> Iniciou Plano 
                </label>
            <label>
              <input type=radio name=Pergunta61 value=0.5> Adota Parcialmente 
                </label>
            <label>
              <input type=radio name=Pergunta61 value=1> Adota Integralmente
                </label>
              <br><br>


              <button type="submit" name="" value="" class="botao">
                Calcule seu Índice de Governança de TI!
              </button>
      </div>
  </form>
</body>
</html>
