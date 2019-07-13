<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="description" content="">
         <meta name="author" content="">
         <title>Calcular IgovTI Ajustado</title>
         <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
         <style type="text/css">
             :root{background-color: #E6E5E5;}
             b{ color:#373636;
                font-family: 'Lato';
                font-size: 1.1em;
                font-weight: 300;
                font-style: normal;
                font-stretch: normal;
                line-height: 1.33;
                letter-spacing: normal;
            
                margin: 0 0 40px;}
             button {
                    display:block;
                    width:100px;
                    height:30px;
                    color:#f00;
                    border:none;
                }
          
    
        
         </style>
        
          
         

    </head>
    <body>
        <!--> inserir meta dados do respondente <!--> 
        <form action="radio.php" method="POST" id='formulario' class='form'>
	        <B>Calcule aqui o seu Índice de Governança de TI.<B>
	        <p>Segue abaixo 61 perguntas sobre aspectos da Governança de TI nas organizações<p>

	    <B>11-C; A organização realiza avaliações sobre a definição e compreensão dos papéis e responsabilidades organizacionais.</B><br>
	    <input type=radio name=Pergunta1 value=0.0 > Não se Aplica/Não Adota 
	    <input type=radio name=Pergunta1 value=0.2> Iniciou Plano 
	    <input type=radio name=Pergunta1 value=0.5> Adota Parcialmente 
	    <input type=radio name=Pergunta1 value=1> Adota Integralmente
            <br><br>
            <B>11_d - A organização dispõe de um código de ética, formalmente instituído, bem como divulga e monitora o seu cumprimento.</B><br>
            <input type=radio name=Pergunta2 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta2 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta2 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta2 value=1> Adota Integralmente
            <br><br>
            <B>11_e - A organização dispõe de uma política corporativa de gestão de riscos formalmente instituída, como norma de cumprimento obrigatório.</B><br>
            <input type=radio name=Pergunta3 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta3 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta3 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta3 value=1> Adota Integralmente
            <br><br>
            <B>12_a - A organização define e comunica formalmente papéis e responsabilidades mais relevantes para a governança e gestão de TI.</B><br>
            <input type=radio name=Pergunta4 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta4 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta4 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta4 value=1> Adota Integralmente
            <br><br>
            <B>12_c - O comitê de TI realiza as atividades previstas em seu ato constitutivo.</B><br>
            <input type=radio name=Pergunta5 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta5 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta5 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta5 value=1> Adota Integralmente
            <br><br>
            <B>13_a - A organização define formalmente diretrizes para o planejamento de TI.</B><br>
            <input type=radio name=Pergunta6 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta6 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta6 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta6 value=1> Adota Integralmente
            <br><br>
            <B>13_b - A organização define formalmente diretrizes para gestão do portfólio de projetos e serviços de TI, inclusive para definição de critérios de priorização e de alocação orçamentária.</B><br>
            <input type=radio name=Pergunta7 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta7 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta7 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta7 value=1> Adota Integralmente
            <br><br>
            <B>13_d - A organização define formalmente diretrizes para avaliação do desempenho dos serviços de TI.</B><br>
            <input type=radio name=Pergunta8 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta8 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta8 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta8 value=1> Adota Integralmente
            <br><br>
            <B>14_b - A organização define e comunica formalmente papéis e responsabilidades pela gestão de riscos de TI.</B><br>
            <input type=radio name=Pergunta9 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta9 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta9 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta9 value=1> Adota Integralmente
            <br><br>
            <B>15_b - A organização define formalmente diretrizes para garantir o desenvolvimento de competências e a retenção de pessoal técnico de TI.</B><br>
            <input type=radio name=Pergunta10 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta10 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta10 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta10 value=1> Adota Integralmente
            <br><br>
            <B>15_c - A organização define formalmente diretrizes para avaliação e incentivo ao desempenho de gestores de TI.</B><br>
            <input type=radio name=Pergunta11 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta11 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta11 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta11 value=1> Adota Integralmente
            <br><br>
            <B>15_e - A organização define formalmente diretrizes para escolha dos líderes da área de TI, ocupantes dos cargos de chefia e de assessoramento.</B><br>
            <input type=radio name=Pergunta12 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta12 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta12 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta12 value=1> Adota Integralmente
            <br><br>
            <B>17_a - A organização define formalmente diretrizes para avaliação da governança e da gestão de TI.</B><br>
            <input type=radio name=Pergunta13 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta13 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta13 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta13 value=1> Adota Integralmente
            <br><br>
            <B>17_c - A organização realiza avaliação periódica de sistemas de informação.</B><br>
            <input type=radio name=Pergunta14 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta14 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta14 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta14 value=1> Adota Integralmente
            <br><br>
            <B>17_e - A organização realiza avaliação periódica de contratos de TI.</B><br>
            <input type=radio name=Pergunta15 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta15 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta15 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta15 value=1> Adota Integralmente
            <br><br>
            <B>21_c - O processo de planejamento estratégico institucional prevê a participação da área de TI</B><br>
            <input type=radio name=Pergunta16 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta16 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta16 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta16 value=1> Adota Integralmente
            <br><br>
            <B>21_e - A organização possui plano estratégico institucional vigente, formalmente instituído pelo seu dirigente máximo.</B><br>
            <input type=radio name=Pergunta17 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta17 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta17 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta17 value=1> Adota Integralmente
            <br><br>
            <B>21_h - O plano estratégico institucional vigente estabelece os projetos e ações considerados necessários e suficientes para o alcance das metas fixadas.</B><br>
            <input type=radio name=Pergunta18 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta18 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta18 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta18 value=1> Adota Integralmente
            <br><br>
            <B>21_i -A execução do plano estratégico institucional vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios.</B><br>
            <input type=radio name=Pergunta19 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta19 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta19 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta19 value=1> Adota Integralmente
            <br><br>
            <B>22_b - O processo de planejamento de TI prevê a participação das áreas mais relevantes da organização.</B><br>
            <input type=radio name=Pergunta20 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta20 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta20 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta20 value=1> Adota Integralmente
            <br><br>
            <B>22_c - O processo de planejamento de TI prevê o apoio do comitê de TI.</B><br>
            <input type=radio name=Pergunta21 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta21 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta21 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta21 value=1> Adota Integralmente
            <br><br>
            <B>22_d - O processo de planejamento de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
            <input type=radio name=Pergunta22 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta22 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta22 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta22 value=1> Adota Integralmente
            <br><br>
            <B>22_f - O plano de TI vigente contempla objetivos, indicadores e metas para a TI, com os objetivos explicitamente alinhados aos objetivos de negócio constantes do plano estratégico institucional.</B><br>
            <input type=radio name=Pergunta23 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta23 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta23 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta23 value=1> Adota Integralmente
            <br><br>
            <B>22_g - O plano de TI vigente contém alocação de recursos (orçamentários, humanos e materiais) e estratégia de execução indireta (terceirização).</B><br>
            <input type=radio name=Pergunta24 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta24 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta24 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta24 value=1> Adota Integralmente
            <br><br>
            <B>22_h - A execução do plano de TI vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios.</B><br>
            <input type=radio name=Pergunta25 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta25 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta25 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta25 value=1> Adota Integralmente
            <br><br>
            <B>22_j -O plano de TI vigente fundamenta a proposta orçamentária de TI.</B><br>
            <input type=radio name=Pergunta26 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta26 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta26 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta26 value=1> Adota Integralmente
            <br><br>
            <B>31_a - A organização identifica e mapeia os principais processos de negócio.</B><br>
            <input type=radio name=Pergunta27 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta27 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta27 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta27 value=1> Adota Integralmente
            <br><br>
            <B>31_b - Os principais processos de negócio da organização são suportados por sistemas informatizados.</B><br>
            <input type=radio name=Pergunta28 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta28 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta28 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta28 value=1> Adota Integralmente
            <br><br>
            <B>31_c - Há catálogo publicado com informações atualizadas de cada um dos sistemas informatizados.</B><br>
            <input type=radio name=Pergunta29 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta29 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta29 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta29 value=1> Adota Integralmente
            <br><br>
            <B>31_d - A organização designa formalmente responsáveis da área de negócio para a gestão dos respectivos sistemas informatizados.</B><br>
            <input type=radio name=Pergunta30 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta30 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta30 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta30 value=1> Adota Integralmente
            <br><br>
            <B>32_a - Os planos de TI vigentes são divulgados na internet, sendo facilmente acessados.</B><br>
            <input type=radio name=Pergunta31 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta31 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta31 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta31 value=1> Adota Integralmente
            <br><br>
            <B>32_c - As informações sobre o acompanhamento das ações e dos projetos de TI são divulgadas na internet, sendo facilmente acessadas.</B><br>
            <input type=radio name=Pergunta32 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta32 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta32 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta32 value=1> Adota Integralmente
            <br><br>
            <B>32_d - Os editais, seus respectivos anexos e os resultados das licitações de TI (inteiro teor) são divulgados na internet, sendo facilmente acessados.</B><br>
            <input type=radio name=Pergunta33 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta33 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta33 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta33 value=1> Adota Integralmente
            <br><br>
            <B>32_e - Os estudos técnicos preliminares (inteiro teor) são divulgados na internet, juntamente com os editais de licitação de TI, sendo facilmente acessados.</B><br>
            <input type=radio name=Pergunta34 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta34 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta34 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta34 value=1> Adota Integralmente
            <br><br>
            <B>32_g - A execução orçamentária de TI, ao longo do exercício, é divulgada na internet, sendo facilmente acessada.</B><br>
            <input type=radio name=Pergunta35 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta35 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta35 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta35 value=1> Adota Integralmente
            <br><br>
            <B>41_b - A organização define critérios para avaliação e atendimento dos pedidos de capacitação.</B><br>
            <input type=radio name=Pergunta36 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta36 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta36 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta36 value=1> Adota Integralmente
            <br><br>
            <B>41_c - A organização elabora, periodicamente, plano de capacitação para suprir as necessidades de desenvolvimento de competências de TI.</B><br>
            <input type=radio name=Pergunta37 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta37 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta37 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta37 value=1> Adota Integralmente
            <br><br>
            <B>41_d - A organização acompanha a execução do plano de capacitação, com identificação e correção de desvios.</B><br>
            <input type=radio name=Pergunta38 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta38 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta38 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta38 value=1> Adota Integralmente
            <br><br>
            <B>41_f - O plano de capacitação inclui o desenvolvimento de competências em gestão de TI.</B><br>
            <input type=radio name=Pergunta39 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta39 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta39 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta39 value=1> Adota Integralmente
            <br><br>
            <B>42_a - A organização estabelece metas de desempenho para o pessoal de TI.</B><br>
            <input type=radio name=Pergunta40 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta40 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta40 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta40 value=1> Adota Integralmente
            <br><br>
            <B>42_b - A organização avalia periodicamente o desempenho do pessoal de TI.</B><br>
            <input type=radio name=Pergunta41 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta41 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta41 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta41 value=1> Adota Integralmente
            <br><br>
            <B>42_c - A organização estabelece benefício, financeiro ou não se aplica, em função do desempenho alcançado pelo pessoal de TI.</B><br>
            <input type=radio name=Pergunta42 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta42 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta42 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta42 value=1> Adota Integralmente
            <br><br>
            <B>43_b1 - O quantitativo considerado de remuneração ideal foi estimado com base em estudo técnico de avaliação quantitativa e qualitativa do quadro de pessoal da área de TI.</B><br>
            <input type=radio name=Pergunta43 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta43 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta43 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta43 value=1> Adota Integralmente
            <br><br>
            <B>51_m - A organização executa processo de gerenciamento de problemas.</B><br>
            <input type=radio name=Pergunta44 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta44 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta44 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta44 value=1> Adota Integralmente
            <br><br>
            <B>52_f - A área de TI comunica periodicamente o resultado desse monitoramento às áreas clientes.</B><br>
            <input type=radio name=Pergunta45 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta45 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta45 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta45 value=1> Adota Integralmente
            <br><br>
            <B>53_c - A organização trata os riscos de TI dos processos críticos de negócio com base em um plano de tratamento de risco.</B><br>
            <input type=radio name=Pergunta46 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta46 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta46 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta46 value=1> Adota Integralmente
            <br><br>
            <B>54_c - A organização possui gestor de segurança da informação formalmente designado, responsável pelas ações corporativas de segurança da informação.</B><br>
            <input type=radio name=Pergunta47 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta47 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta47 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta47 value=1> Adota Integralmente
            <br><br>
            <B>54_p - O processo de monitoramento do uso dos recursos de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
            <input type=radio name=Pergunta48 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta48 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta48 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta48 value=1> Adota Integralmente
            <br><br>
            <B>55_a - A organização executa um processo de software, com o objetivo de assegurar que o software a ser desenvolvido, direta ou indiretamente, atenda às suas necessidades.</B><br>
            <input type=radio name=Pergunta49 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta49 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta49 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta49 value=1> Adota Integralmente
            <br><br>
            <B>55_b - O processo de software é acompanhado por meio de mensurações, com indicadores quantitativos e metas de processo a cumprir.</B><br>
            <input type=radio name=Pergunta50 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta50 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta50 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta50 value=1> Adota Integralmente
            <br><br>
            <B>56_b - A organização executa processo de gerenciamento de projetos de TI.</B><br>
            <input type=radio name=Pergunta51 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta51 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta51 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta51 value=1> Adota Integralmente
            <br><br>
            <B>57_d - A organização explicita, nos autos, o alinhamento entre a contratação e os planos estratégico institucional e de TI vigentes.</B><br>
            <input type=radio name=Pergunta52 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta52 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta52 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta52 value=1> Adota Integralmente
            <br><br>
            <B>57_e - A organização realiza análise dos riscos que possam comprometer o sucesso do processo de contratação e dos resultados que atendam às necessidades de negócio.</B><br>
            <input type=radio name=Pergunta53 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta53 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta53 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta53 value=1> Adota Integralmente
            <br><br>
            <B>57_i - A organização diferencia e define formalmente os papéis de gestor e fiscal do contrato.</B><br>
            <input type=radio name=Pergunta54 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta54 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta54 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta54 value=1> Adota Integralmente
            <br><br>
            <B>58_d - O processo de planejamento das contratações de TI é periodicamente revisado e melhorado com base nas mensurações obtidas.</B><br>
            <input type=radio name=Pergunta55 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta55 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta55 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta55 value=1> Adota Integralmente
            <br><br>
            <B>59_b - A organização executa processo de gestão de contratos de TI.</B><br>
            <input type=radio name=Pergunta56 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta56 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta56 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta56 value=1> Adota Integralmente
            <br><br>
            <B>59_e - O processo de gestão de contratos de TI está formalmente instituído, como norma de cumprimento obrigatório.</B><br>
            <input type=radio name=Pergunta57 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta57 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta57 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta57 value=1> Adota Integralmente
            <br><br>
            <B>62_a - A organização possui projetos de TI com mais de dois anos de início e que estão em andamento.</B><br>
            <input type=radio name=Pergunta58 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta58 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta58 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta58 value=1> Adota Integralmente
            <br><br>
            <B>64_c - Os serviços acessíveis via internet implementam as diretrizes e as especificações dos Padrões de Interoperabilidade de Governo Eletrônico – ePING, previsto no Programa de Governo Eletrônico Brasileiro.</B><br>
            <input type=radio name=Pergunta59 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta59 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta59 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta59 value=1> Adota Integralmente
            <br><br>
            <B>64_e - Há catálogo publicado com informações claras e precisas de cada um dos serviços acessíveis via internet.</B><br>
            <input type=radio name=Pergunta60 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta60 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta60 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta60 value=1> Adota Integralmente
            <br><br>
            <B>64_g - Os resultados das avaliações dos serviços acessíveis via internet são divulgados ao cidadão/cliente.</B><br>
            <input type=radio name=Pergunta61 value=0.0> Não se Aplica/Não Adota 
            <input type=radio name=Pergunta61 value=0.2> Iniciou Plano 
            <input type=radio name=Pergunta61 value=0.5> Adota Parcialmente 
            <input type=radio name=Pergunta61 value=1> Adota Integralmente
            <br><br>
            <button type=submit value="Calcule seu Índice de Governança de TI !">
    
            
    </form>

       
    </body>
            
</html>
