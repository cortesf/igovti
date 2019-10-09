
CREATE TABLE `origem` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `universidade` CHAR NOT NULL,
  `sigla` CHAR NOT NULL,
  `estado` CHAR NOT NULL,
  `municipio` CHAR NOT NULL, 
  PRIMARY KEY (id)
) ENGINE=innodb DEFAULT CHARSET=utf8;
COMMIT;
CREATE TABLE `area` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` LONGTEXT NOT NULL,
  PRIMARY KEY (id)
) ENGINE=innodb DEFAULT CHARSET=utf8;
COMMIT;

CREATE TABLE `pergunta` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `codigo` LONGTEXT NOT NULL,
  `area` LONGTEXT NOT NULL,
  `pergunta` LONGTEXT NOT NULL, 
  `id_area` INT,
   FOREIGN KEY (id_area) REFERENCES area(id), 
   PRIMARY KEY (id)
) ENGINE=innodb DEFAULT CHARSET=utf8;
COMMIT;

CREATE TABLE `resposta` (
  `resposta` FLOAT,
  `id_origem` INT,
  `id_pergunta` INT,
   FOREIGN KEY (id_origem) REFERENCES origem(id),
   FOREIGN KEY (id_pergunta) REFERENCES pergunta(id)
  
) ENGINE=innodb DEFAULT CHARSET=utf8;
COMMIT;

INSERT INTO area(nome) values ('Liderança');
INSERT INTO area(nome) values ('Estratégias');
INSERT INTO area(nome) values ('Informações');
INSERT INTO area(nome) values ('Pessoas');
INSERT INTO area(nome) values ('Processos');
INSERT INTO area(nome) values ('Resultados');
INSERT INTO pergunta(codigo,  pergunta) values ('1.1-C','A organização realiza avaliações sobre a definição e compreensão dos papéis e responsabilidades organizacionais');
INSERT INTO pergunta(codigo,  pergunta) values ('1.1-D','A organização dispõe de um código de ética, formalmente instituído, bem como divulga e monitora o seu cumprimento');
INSERT INTO pergunta(codigo,  pergunta) values ('1.1-E','A organização dispõe de uma política corporativa de gestão de riscos formalmente instituída, como norma de cumprimento obrigatório');
INSERT INTO pergunta(codigo,  pergunta) values ('1.2-A','A organização define e comunica formalmente papéis e responsabilidades mais relevantes para a governança e gestão de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('1.2-C','O comitê de TI realiza as atividades previstas em seu ato constitutivo');
INSERT INTO pergunta(codigo,  pergunta) values ('1.3-A','A organização define formalmente diretrizes para o planejamento de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('1.3-B','A organização define formalmente diretrizes para gestão do portfólio de projetos e serviços de TI, inclusive para definição de critérios de priorização e de alocação orçamentária');
INSERT INTO pergunta(codigo,  pergunta) values ('1.3-D','A organização define formalmente diretrizes para avaliação do desempenho dos serviços de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('1.4-B','A organização define e comunica formalmente papéis e responsabilidades pela gestão de riscos de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('1.5-B','A organização define formalmente diretrizes para garantir o desenvolvimento de competências e a retenção de pessoal técnico de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('1.5-C','A organização define formalmente diretrizes para avaliação e incentivo ao desempenho de gestores de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('1.5-E','A organização define formalmente diretrizes para escolha dos líderes da área de TI, ocupantes dos cargos de chefia e de assessoramento');
INSERT INTO pergunta(codigo,  pergunta) values ('1.7-A','A organização define formalmente diretrizes para avaliação da governança e da gestão de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('1.7-C','A organização realiza avaliação periódica de sistemas de informação');
INSERT INTO pergunta(codigo,  pergunta) values ('1.7-E','A organização realiza avaliação periódica de contratos de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('2.1-C','O processo de planejamento estratégico institucional prevê a participação da área de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('2.1-E','A organização possui plano estratégico institucional vigente, formalmente instituído pelo seu dirigente máximo');
INSERT INTO pergunta(codigo,  pergunta) values ('2.1-H','O plano estratégico institucional vigente estabelece os projetos e ações considerados necessários e suficientes para o alcance das metas fixadas');
INSERT INTO pergunta(codigo,  pergunta) values ('2.1-I','A execução do plano estratégico institucional vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios');
INSERT INTO pergunta(codigo,  pergunta) values ('2.2-B','O processo de planejamento de TI prevê a participação das áreas mais relevantes da organização');
INSERT INTO pergunta(codigo,  pergunta) values ('2.2-C','O processo de planejamento de TI prevê o apoio do comitê de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('2.2-D','O processo de planejamento de TI está formalmente instituído, como norma de cumprimento obrigatório');
INSERT INTO pergunta(codigo,  pergunta) values ('2.2-F','O plano de TI vigente contempla objetivos, indicadores e metas para a TI, com os objetivos explicitamente alinhados aos objetivos de negócio constantes do plano estratégico institucional');
INSERT INTO pergunta(codigo,  pergunta) values ('2.2-G','O plano de TI vigente contém alocação de recursos (orçamentários, humanos e materiais) e estratégia de execução indireta (terceirização)');
INSERT INTO pergunta(codigo,  pergunta) values ('2.2-H','A execução do plano de TI vigente é acompanhada periodicamente quanto ao alcance das metas estabelecidas, para correção de desvios');
INSERT INTO pergunta(codigo,  pergunta) values ('2.2-J','O plano de TI vigente fundamenta a proposta orçamentária de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('3.1-A','A organização identifica e mapeia os principais processos de negócio');
INSERT INTO pergunta(codigo,  pergunta) values ('3.1-B','Os principais processos de negócio da organização são suportados por sistemas informatizados');
INSERT INTO pergunta(codigo,  pergunta) values ('3.1-C','Há catálogo publicado com informações atualizadas de cada um dos sistemas informatizados');
INSERT INTO pergunta(codigo,  pergunta) values ('3.1-D','A organização designa formalmente responsáveis da área de negócio para a gestão dos respectivos sistemas informatizados');
INSERT INTO pergunta(codigo,  pergunta) values ('3.2-A','Os planos de TI vigentes são divulgados na internet, sendo facilmente acessados');
INSERT INTO pergunta(codigo,  pergunta) values ('3.2-C','As informações sobre o acompanhamento das ações e dos projetos de TI são divulgadas na internet, sendo facilmente acessadas');
INSERT INTO pergunta(codigo,  pergunta) values ('3.2-D','Os editais, seus respectivos anexos e os resultados das licitações de TI (inteiro teor) são divulgados na internet, sendo facilmente acessados');
INSERT INTO pergunta(codigo,  pergunta) values ('3.2-E','3.2-E; Os estudos técnicos preliminares (inteiro teor) são divulgados na internet, juntamente com os editais de licitação de TI, sendo facilmente acessados');
INSERT INTO pergunta(codigo,  pergunta) values ('3.2-G','A execução orçamentária de TI, ao longo do exercício, é divulgada na internet, sendo facilmente acessada');
INSERT INTO pergunta(codigo,  pergunta) values ('4.1-B','A organização define critérios para avaliação e atendimento dos pedidos de capacitação');
INSERT INTO pergunta(codigo,  pergunta) values ('4.1-C','A organização elabora, periodicamente, plano de capacitação para suprir as necessidades de desenvolvimento de competências de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('4.1-D','A organização acompanha a execução do plano de capacitação, com identificação e correção de desvios');
INSERT INTO pergunta(codigo,  pergunta) values ('4.1-F','O plano de capacitação inclui o desenvolvimento de competências em gestão de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('4.2-A','A organização estabelece metas de desempenho para o pessoal de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('4.2-B','A organização avalia periodicamente o desempenho do pessoal de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('4.2-C','A organização estabelece benefício, financeiro ou não se aplica, em função do desempenho alcançado pelo pessoal de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('4.3-B1','O quantitativo considerado de remuneração ideal foi estimado com base em estudo técnico de avaliação quantitativa e qualitativa do quadro de pessoal da área de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('5.1-M','A organização executa processos de gerenciamento de problemas');
INSERT INTO pergunta(codigo,  pergunta) values ('5.2-F','A área de TI comunica periodicamente o resultado desse monitoramento às áreas clientes');
INSERT INTO pergunta(codigo,  pergunta) values ('5.3-C','A organização trata os riscos de TI dos processos críticos de negócio com base em um plano de tratamento de risco');
INSERT INTO pergunta(codigo,  pergunta) values ('5.4-C','A organização possui gestor de segurança da informação formalmente designado, responsável pelas ações corporativas de segurança da informação');
INSERT INTO pergunta(codigo,  pergunta) values ('5.4-P','O processo de monitoramento do uso dos recursos de TI está formalmente instituído, como norma de cumprimento obrigatório.');
INSERT INTO pergunta(codigo,  pergunta) values ('5.5-A','A organização executa um processo de software, com o objetivo de assegurar que o software a ser desenvolvido, direta ou indiretamente, atenda às suas necessidades');
INSERT INTO pergunta(codigo,  pergunta) values ('5.5-B','O processo de software é acompanhado por meio de mensurações, com indicadores quantitativos e metas de processo a cumprir');
INSERT INTO pergunta(codigo,  pergunta) values ('5.6-B','A organização executa processo de gerenciamento de projetos de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('5.7-D','A organização explicita, nos autos, o alinhamento entre a contratação e os planos estratégico institucional e de TI vigentes');
INSERT INTO pergunta(codigo,  pergunta) values ('5.7-E','A organização realiza análise dos riscos que possam comprometer o sucesso do processo de contratação e dos resultados que atendam às necessidades de negócio');
INSERT INTO pergunta(codigo,  pergunta) values ('5.7-I','A organização diferencia e define formalmente os papéis de gestor e fiscal do contrato');
INSERT INTO pergunta(codigo,  pergunta) values ('5.8-D','O processo de planejamento das contratações de TI é periodicamente revisado e melhorado com base nas mensurações obtidas');
INSERT INTO pergunta(codigo,  pergunta) values ('5.9-B','A organização executa processo de gestão de contratos de TI');
INSERT INTO pergunta(codigo,  pergunta) values ('6.2-A','A organização possui projetos de TI com mais de dois anos de início e que estão em andamento');
INSERT INTO pergunta(codigo,  pergunta) values ('6.4-E','Os serviços acessíveis via internet implementam as diretrizes e as especificações dos Padrões de Interoperabilidade de Governo Eletrônico – ePING, previsto no Programa de Governo Eletrônico Brasileiro');
INSERT INTO pergunta(codigo,  pergunta) values ('6.4-C','Há catálogo publicado com informações claras e precisas de cada um dos serviços acessíveis via internet');
INSERT INTO pergunta(codigo,  pergunta) values ('6.4-G','Os resultados das avaliações dos serviços acessíveis via internet são divulgados ao cidadão/cliente');





