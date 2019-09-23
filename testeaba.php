<?php
if ("config.php" == 0) {
    <html>
        <body>
        Favor inserir os dados de Conexão com o servidor: <br>
        
        Hostname:<br>
        <input type="text" name=hostname autofocus><br> 
        
        <br>Insira o nome de usuário do servidor:<br>
	        <input type="text" name=user><br>
            Insira a senha do usuário (caso não tenha senha, deixar o campo em branco):<br>
        <input type="text" name=password autofocus><br> 
        
        <br>Insira o nome da base de dados:<br>
	        <input type="text" name=database><br>
            
        </body>
    </html>
    $hostname=$_POST['hostname'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $database=$_POST['database'];
    $arquivo = fopen("config.php","w");
    $conexao=mysqli_connect($hostname,$user,$password,$database);    
    fwrite($arquivo,$conexao);
    fclose($arquivo);
    
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive CSS Tabs</title>
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
@import url("http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: #555;
  background: #eee;
}

h1 {
  padding: 50px 0;
  font-weight: 400;
  text-align: center;
}

p {
  margin: 0 0 20px;
  line-height: 1.5;
}

main {
  min-width: 320px;
  max-width: 800px;
  padding: 50px;
  margin: 0 auto;
  background: #fff;
}

div {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid #ddd;
}

input {
  display: none;
}

label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #bbb;
  border: 1px solid transparent;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}

label[for*='1']:before {
  content: '\f1cb';
}

label[for*='2']:before {
  content: '\f17d';
}

label[for*='3']:before {
  content: '\f16b';
}

label[for*='4']:before {
  content: '\f1a9';
}

label:hover {
  color: #888;
  cursor: pointer;
}

input:checked + label {
  color: #555;
  border: 1px solid #ddd;
  border-top: 2px solid orange;
  border-bottom: 1px solid #fff;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5,
#tab6:checked ~ #content6{
  display: block;
}

@media screen and (max-width: 650px) {
  label {
    font-size: 0;
  }

  label:before {
    margin: 0;
    font-size: 18px;
  }
}
@media screen and (max-width: 400px) {
  label {
    padding: 15px;
  }
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
 <form action="radio.php" method="POST" id='formulario' class='form'> 
     
  
      <input id="tab1" type="radio" name="tabs" checked>
      <label for="tab1">Codepen</label>

      <input id="tab2" type="radio" name="tabs">
      <label for="tab2">Dribbble</label>

      <input id="tab3" type="radio" name="tabs">
      <label for="tab3">Dropbox</label>

      <input id="tab4" type="radio" name="tabs">
      <label for="tab4">Drupal</label>

      <input id="tab5" type="radio" name="tabs">
      <label for="tab5">Drupal</label>

      <input id="tab6" type="radio" name="tabs">
      <label for="tab6">Drupal</label>
    
      <div id="content1">
        <br><B>1.1-C; A organização realiza avaliações sobre a definição e compreensão dos papéis e responsabilidades organizacionais.</B><br>
                <input type=radio name=Pergunta1 value=0.0 > Não se Aplica/Não Adota 
                <input type=radio name=Pergunta1 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta1 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta1 value=1> Adota Integralmente
                <br><br>
                <B>1.1-D; A organização dispõe de um código de ética, formalmente instituído, bem como divulga e monitora o seu cumprimento.</B><br>
                <input type=radio name=Pergunta2 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta2 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta2 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta2 value=1> Adota Integralmente
                <br><br>

                <B>1.1-E; A organização dispõe de uma política corporativa de gestão de riscos formalmente instituída, como norma de cumprimento obrigatório.</B><br>
                <input type=radio name=Pergunta3 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta3 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta3 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta3 value=1> Adota Integralmente
                <br><br>
                <B>1.2-A; A organização define e comunica formalmente papéis e responsabilidades mais relevantes para a governança e gestão de TI.</B><br>
                <input type=radio name=Pergunta4 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta4 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta4 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta4 value=1> Adota Integralmente
                <br><br>
                <B>1.2-C; O comitê de TI realiza as atividades previstas em seu ato constitutivo.</B><br>
                <input type=radio name=Pergunta5 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta5 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta5 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta5 value=1> Adota Integralmente
                <br><br>
                <B>1.3-A; A organização define formalmente diretrizes para o planejamento de TI.</B><br>
                <input type=radio name=Pergunta6 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta6 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta6 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta6 value=1> Adota Integralmente
                <br><br>
                <B>1.3-B; A organização define formalmente diretrizes para gestão do portfólio de projetos e serviços de TI, inclusive para definição de critérios de priorização e de alocação orçamentária.</B><br>
                <input type=radio name=Pergunta7 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta7 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta7 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta7 value=1> Adota Integralmente
                <br><br>
                <B>1.3-D; A organização define formalmente diretrizes para avaliação do desempenho dos serviços de TI.</B><br>
                <input type=radio name=Pergunta8 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta8 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta8 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta8 value=1> Adota Integralmente
                <br><br>
                <B>1.4-B; A organização define e comunica formalmente papéis e responsabilidades pela gestão de riscos de TI.</B><br>
                <input type=radio name=Pergunta9 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta9 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta9 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta9 value=1> Adota Integralmente
                <br><br>
                <B>1.5-B; A organização define formalmente diretrizes para garantir o desenvolvimento de competências e a retenção de pessoal técnico de TI.</B><br>
                <input type=radio name=Pergunta10 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta10 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta10 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta10 value=1> Adota Integralmente
                <br><br>
                <B>1.5-C; A organização define formalmente diretrizes para avaliação e incentivo ao desempenho de gestores de TI.</B><br>
                <input type=radio name=Pergunta11 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta11 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta11 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta11 value=1> Adota Integralmente
                <br><br>
                <B>1.5-E; A organização define formalmente diretrizes para escolha dos líderes da área de TI, ocupantes dos cargos de chefia e de assessoramento.</B><br>
                <input type=radio name=Pergunta12 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta12 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta12 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta12 value=1> Adota Integralmente
                <br><br>

                <B>1.7-A; A organização define formalmente diretrizes para avaliação da governança e da gestão de TI.</B><br>
                <input type=radio name=Pergunta13 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta13 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta13 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta13 value=1> Adota Integralmente
                <br><br>
                <B>1.7-C; A organização realiza avaliação periódica de sistemas de informação.</B><br>
                <input type=radio name=Pergunta14 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta14 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta14 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta14 value=1> Adota Integralmente
                <br><br>
                <B>1.7-E; A organização realiza avaliação periódica de contratos de TI.</B><br>
                <input type=radio name=Pergunta15 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta15 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta15 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta15 value=1> Adota Integralmente
                <br><br>
      </div>

      <div id="content2">
        <B>2.1-C; O processo de planejamento estratégico institucional prevê a participação da área de TI</B><br>
                <input type=radio name=Pergunta16 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta16 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta16 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta16 value=1> Adota Integralmente
                <br><br>
                <B>2.1-E; A organização possui plano estratégico institucional vigente, formalmente instituído pelo seu dirigente máximo.</B><br>
                <input type=radio name=Pergunta17 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta17 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta17 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta17 value=1> Adota Integralmente
                <br><br>
                <B>2.1-H; O plano estratégico institucional vigente estabelece os projetos e ações considerados necessários e suficientes para o alcance das metas fixadas.</B><br>
                <input type=radio name=Pergunta18 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta18 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta18 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta18 value=1> Adota Integralmente
                <br><br>
                <B>2.1-I; A execução do plano estratégico institucional vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios.</B><br>
                <input type=radio name=Pergunta19 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta19 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta19 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta19 value=1> Adota Integralmente
                <br><br>
                <B>2.2-B; O processo de planejamento de TI prevê a participação das áreas mais relevantes da organização.</B><br>
                <input type=radio name=Pergunta20 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta20 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta20 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta20 value=1> Adota Integralmente
                <br><br>
                <B>2.2-C; O processo de planejamento de TI prevê o apoio do comitê de TI.</B><br>
                <input type=radio name=Pergunta21 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta21 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta21 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta21 value=1> Adota Integralmente
                <br><br>
                <B>2.2-D; O processo de planejamento de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
                <input type=radio name=Pergunta22 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta22 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta22 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta22 value=1> Adota Integralmente
                <br><br>

                <B>2.2-F; O plano de TI vigente contempla objetivos, indicadores e metas para a TI, com os objetivos explicitamente alinhados aos objetivos de negócio constantes do plano estratégico institucional.</B><br>
                <input type=radio name=Pergunta23 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta23 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta23 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta23 value=1> Adota Integralmente
                <br><br>
                <B>2.2-G; O plano de TI vigente contém alocação de recursos (orçamentários, humanos e materiais) e estratégia de execução indireta (terceirização).</B><br>
                <input type=radio name=Pergunta24 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta24 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta24 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta24 value=1> Adota Integralmente
                <br><br>
                <B>2.2-H; A execução do plano de TI vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios.</B><br>
                <input type=radio name=Pergunta25 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta25 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta25 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta25 value=1> Adota Integralmente
                <br><br>
                <B>2.2-J; O plano de TI vigente fundamenta a proposta orçamentária de TI.</B><br>
                <input type=radio name=Pergunta26 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta26 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta26 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta26 value=1> Adota Integralmente
                <br><br>
      </div>

      <div id="content3">
        <B>3.1-A; A organização identifica e mapeia os principais processos de negócio.</B><br>
                <input type=radio name=Pergunta27 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta27 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta27 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta27 value=1> Adota Integralmente
                <br><br>
                <B>3.1-B; Os principais processos de negócio da organização são suportados por sistemas informatizados.</B><br>
                <input type=radio name=Pergunta28 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta28 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta28 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta28 value=1> Adota Integralmente
                <br><br>
                <B>3.1-C; Há catálogo publicado com informações atualizadas de cada um dos sistemas informatizados.</B><br>
                <input type=radio name=Pergunta29 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta29 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta29 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta29 value=1> Adota Integralmente
                <br><br>
                <B>3.1-D; A organização designa formalmente responsáveis da área de negócio para a gestão dos respectivos sistemas informatizados.</B><br>
                <input type=radio name=Pergunta30 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta30 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta30 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta30 value=1> Adota Integralmente
                <br><br>
                <B>3.2-A; Os planos de TI vigentes são divulgados na internet, sendo facilmente acessados.</B><br>
                <input type=radio name=Pergunta31 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta31 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta31 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta31 value=1> Adota Integralmente
                <br><br>
                <B>3.2-C; As informações sobre o acompanhamento das ações e dos projetos de TI são divulgadas na internet, sendo facilmente acessadas.</B><br>
                <input type=radio name=Pergunta32 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta32 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta32 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta32 value=1> Adota Integralmente
                <br><br>

                <B>3.2-D; Os editais, seus respectivos anexos e os resultados das licitações de TI (inteiro teor) são divulgados na internet, sendo facilmente acessados.</B><br>
                <input type=radio name=Pergunta33 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta33 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta33 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta33 value=1> Adota Integralmente
                <br><br>
                <B>3.2-E; Os estudos técnicos preliminares (inteiro teor) são divulgados na internet, juntamente com os editais de licitação de TI, sendo facilmente acessados.</B><br>
                <input type=radio name=Pergunta34 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta34 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta34 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta34 value=1> Adota Integralmente
                <br><br>
                <B>3.2-G; A execução orçamentária de TI, ao longo do exercício, é divulgada na internet, sendo facilmente acessada.</B><br>
                <input type=radio name=Pergunta35 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta35 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta35 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta35 value=1> Adota Integralmente
                <br><br>
      </div>

      <div id="content4">
        <B>4.1-B; A organização define critérios para avaliação e atendimento dos pedidos de capacitação.</B><br>
                <input type=radio name=Pergunta36 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta36 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta36 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta36 value=1> Adota Integralmente
                <br><br>
                <B>4.1-C; A organização elabora, periodicamente, plano de capacitação para suprir as necessidades de desenvolvimento de competências de TI.</B><br>
                <input type=radio name=Pergunta37 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta37 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta37 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta37 value=1> Adota Integralmente
                <br><br>
                <B>4.1-D; A organização acompanha a execução do plano de capacitação, com identificação e correção de desvios.</B><br>
                <input type=radio name=Pergunta38 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta38 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta38 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta38 value=1> Adota Integralmente
                <br><br>
                <B>4.1-F; O plano de capacitação inclui o desenvolvimento de competências em gestão de TI.</B><br>
                <input type=radio name=Pergunta39 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta39 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta39 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta39 value=1> Adota Integralmente
                <br><br>
                <B>4.2-A; A organização estabelece metas de desempenho para o pessoal de TI.</B><br>
                <input type=radio name=Pergunta40 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta40 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta40 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta40 value=1> Adota Integralmente
                <br><br>
                <B>4.2-B; A organização avalia periodicamente o desempenho do pessoal de TI.</B><br>
                <input type=radio name=Pergunta41 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta41 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta41 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta41 value=1> Adota Integralmente
                <br><br>
                <B>4.2-C; A organização estabelece benefício, financeiro ou não se aplica, em função do desempenho alcançado pelo pessoal de TI.</B><br>
                <input type=radio name=Pergunta42 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta42 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta42 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta42 value=1> Adota Integralmente
                <br><br>

                <B>4.3-B1; O quantitativo considerado de remuneração ideal foi estimado com base em estudo técnico de avaliação quantitativa e qualitativa do quadro de pessoal da área de TI.</B><br>
                <input type=radio name=Pergunta43 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta43 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta43 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta43 value=1> Adota Integralmente
                <br><br>
      </div>

        <div id="content5">
        <B>5.1-M; A organização executa processo de gerenciamento de problemas.</B><br>
            <input type=radio name=Pergunta44 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta44 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta44 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta44 value=1> Adota Integralmente
            <br><br>
            <B>5.2-F; A área de TI comunica periodicamente o resultado desse monitoramento às áreas clientes.</B><br>
            <input type=radio name=Pergunta45 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta45 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta45 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta45 value=1> Adota Integralmente
            <br><br>
            <B>5.3-C; A organização trata os riscos de TI dos processos críticos de negócio com base em um plano de tratamento de risco.</B><br>
            <input type=radio name=Pergunta46 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta46 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta46 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta46 value=1> Adota Integralmente
            <br><br>
            <B>5.4-C; A organização possui gestor de segurança da informação formalmente designado, responsável pelas ações corporativas de segurança da informação.</B><br>
            <input type=radio name=Pergunta47 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta47 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta47 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta47 value=1> Adota Integralmente
            <br><br>
            <B>5.4-P; O processo de monitoramento do uso dos recursos de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
            <input type=radio name=Pergunta48 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta48 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta48 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta48 value=1> Adota Integralmente
            <br><br>
            <B>5.5-A; A organização executa um processo de software, com o objetivo de assegurar que o software a ser desenvolvido, direta ou indiretamente, atenda às suas necessidades.</B><br>
            <input type=radio name=Pergunta49 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta49 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta49 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta49 value=1> Adota Integralmente
            <br><br>
            <B>5.5-B; O processo de software é acompanhado por meio de mensurações, com indicadores quantitativos e metas de processo a cumprir.</B><br>
            <input type=radio name=Pergunta50 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta50 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta50 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta50 value=1> Adota Integralmente
            <br><br>
            <B>5.6-B; A organização executa processo de gerenciamento de projetos de TI.</B><br>
            <input type=radio name=Pergunta51 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta51 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta51 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta51 value=1> Adota Integralmente
            <br><br>
            <B>5.7-D; A organização explicita, nos autos, o alinhamento entre a contratação e os planos estratégico institucional e de TI vigentes.</B><br>
            <input type=radio name=Pergunta52 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta52 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta52 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta52 value=1> Adota Integralmente
            <br><br>

            <B>5.7-E; A organização realiza análise dos riscos que possam comprometer o sucesso do processo de contratação e dos resultados que atendam às necessidades de negócio.</B><br>
            <input type=radio name=Pergunta53 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta53 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta53 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta53 value=1> Adota Integralmente
            <br><br>
            <B>5.7-I; A organização diferencia e define formalmente os papéis de gestor e fiscal do contrato.</B><br>
            <input type=radio name=Pergunta54 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta54 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta54 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta54 value=1> Adota Integralmente
            <br><br>
            <B>5.8-D; O processo de planejamento das contratações de TI é periodicamente revisado e melhorado com base nas mensurações obtidas.</B><br>
            <input type=radio name=Pergunta55 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta55 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta55 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta55 value=1> Adota Integralmente
            <br><br>
            <B>5.9-B; A organização executa processo de gestão de contratos de TI.</B><br>
            <input type=radio name=Pergunta56 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta56 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta56 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta56 value=1> Adota Integralmente
            <br><br>
            <B>5.9-E; O processo de gestão de contratos de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
            <input type=radio name=Pergunta57 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta57 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta57 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta57 value=1> Adota Integralmente
      </div>

        <div id="content6">
            <B>6.2-A; A organização possui projetos de TI com mais de dois anos de início e que estão em andamento.</B><br>
                <input type=radio name=Pergunta58 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta58 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta58 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta58 value=1> Adota Integralmente
                <br><br>
                <B>6.4-C; Os serviços acessíveis via internet implementam as diretrizes e as especificações dos Padrões de Interoperabilidade de Governo Eletrônico – ePING, previsto no Programa de Governo Eletrônico Brasileiro.</B><br>
                <input type=radio name=Pergunta59 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta59 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta59 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta59 value=1> Adota Integralmente
                <br><br>
                <B>6.4-E; Há catálogo publicado com informações claras e precisas de cada um dos serviços acessíveis via internet.</B><br>
                <input type=radio name=Pergunta60 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta60 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta60 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta60 value=1> Adota Integralmente
                <br><br>
                <B>6.4-G; Os resultados das avaliações dos serviços acessíveis via internet são divulgados ao cidadão/cliente.</B><br>
                <input type=radio name=Pergunta61 value=0.0> Não se Aplica/Não Adota 
                <input type=radio name=Pergunta61 value=0.2> Iniciou Plano 
                <input type=radio name=Pergunta61 value=0.5> Adota Parcialmente 
                <input type=radio name=Pergunta61 value=1> Adota Integralmente
                <br><br>


                <button type="submit" name="" value="" class="botao">Calcule seu Índice de Governança de TI !</button>
             
        </div>

  </form>
  
</body>
</html>
