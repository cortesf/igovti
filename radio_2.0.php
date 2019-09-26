<?php
include_once("config.php");
$i = 1;
$respostas = array[];
for $i <=63 {
    $respostas [$i] = $_POST['Pergunta' + $i];

}




print(1.794 + (1.716 * $respostas[4]) + (2.515 * $respostas[38]) + (1.272 * $respostas[8])+ (1.432 * $respostas[49]) + (2.067 * $respostas[41]) + (2.005 * $respostas[55]) + (3.727 * $respostas[27]) + (1.426 * $respostas[5])+ (0.875 * $respostas[52]) + (0.953 * $respostas[22]) + (2.445 * $respostas[30]) + (2.249 * $respostas[9]) + (0.889 * $respostas[60]) + (0.936 * $respostas[24]) + (1.247 * $respostas[10]) + (1.206 * $respostas[56]) + (1.652 * $respostas[17]) + (3.084 * $respostas[40]) + (2.742 * $respostas[28])+ (1.547 * $respostas[13]) + (1.362 * $respostas[37]) + (2.588 * $respostas[16]) + (1.709 * $respostas[33]) + (1.929 * $respostas[45]) + (1.356 * $respostas[32]) + (1.556 * $respostas[6]) + (2.050 * $respostas[36]) + (1.826 * $respostas[14]) + (0.981 * $respostas[3]) + (1.386 * $respostas[26]) + (1.154 * $respostas[53]) + (1.372 * $respostas[59]) + (1.470 * $respostas[23]) + (0.622 * $respostas[58]) + (0.886 * $respostas[34]) + (0.796 * $respostas[1]) + (1.183 * $respostas[25]) + (2.700 * $respostas[46]) + (1.799 * $respostas[42]) + (1.176 * $respostas[43]) + (1.119 * $respostas[20]) + (1.610 * $respostas[29]) + (1.412* $respostas[39]) + (0.775 * $respostas[18]) + (0.606 * $respostas[47]) + (1.004 * $respostas[2]) + (1.210 * $respostas[12]) + (0.673* $respostas[35]) + (0.986 * $respostas[31]) + (1.242 * $respostas[7]) + (1.000 * $respostas[57]) + (0.978 * $respostas[44]) + (0.746 * $respostas[54]) + (1.443 * $respostas[61]) + (0.933 * $respostas[48]) + (0.952 * $respostas[15]) + (1.041 * $respostas[21]) +(1.195 * $respostas[50]) + (0.931 * $respostas[11]) + (0.766 * $respostas[51]) + (1.541 * $respostas[19]));

$sql= "insert into respostas (Pergunta1,Pergunta2,Pergunta3,Pergunta4,Pergunta,Pergunta6,Pergunta7,Pergunta8,Pergunta9,Perguta10,Pergunta11,Pergunta12,Pergunta13,Pergunta14,Pergunta15,Pergunta16,Pergunta17,Pergunta18,Pergunta19,Pergunta20,Pergunta21,Pergunta22,Pergunta23,Pergunta24,Pergunta25,Pergunta26,Pergunta27,Pergunta28,Pergunta29,Pergunta30,Pergunta31,Pergunta32,Pergunta33,Pergunta34,Pergunta35,Pergunta36,Pergunta37,Pergunta38,Pergunta39,Pergunta40,Pergunta41,Pergunta42,Pergunta43,Pergunta44,Pergunta45,Pergunta46,Pergunta47,Pergunta48,Pergunta49,Pergunta50,Pergunta51,Pergunta52,Pergunta53,Pergunta54,Pergunta55,Pergunta56,Pergunta57,Pergunta58,Pergunta59,Pergunta60,Pergunta61, Instituicao, Estado) values('$respostas[1]','$respostas[2]','$respostas[3]','$respostas[4]','$respostas[5]','$respostas[6]','$respostas[7]','$respostas[8]','$respostas[9]','$respostas[10]','$respostas[11]','$respostas[12]','$respostas[13]','$respostas[14]','$respostas[15]','$respostas[16]','$respostas[17]','$respostas[18]','$respostas[19]','$respostas[20]','$respostas[21]','$respostas[22]','$respostas[23]','$respostas[24]','$respostas[25]','$respostas[26]','$respostas[27]','$respostas[28]','$respostas[29]','$respostas[30]','$respostas[31]','$respostas[32]','$respostas[33]','$respostas[34]','$respostas[35]','$respostas[36]','$respostas[37]','$respostas[38]','$respostas[39]','$respostas[40]','$respostas[41]','$respostas[42]','$respostas[43]','$respostas[44]','$respostas[45','$respostas[46]','$respostas[47]','$respostas[48]','$respostas[49]','$respostas[50]','$respostas[51]','$respostas[52]','$respostas[53','$respostas[54','$respostas[55]','$respostas[56]','$respostas[57]','$respostas[58]','$respostas[59]','$respostas[60]','$respostas[61]','$respostas[62]','$respostas[63]')";

$salvar = mysql_query($sql,$conexao);
mysql_close( $conexao = NULL);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Calcular IgovTI Ajustado</title>
         <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
         <style type="text/css">
             :root{background-color: #E6E5E5;}
             li, p{ color:#373636;
                font-family: 'Lato';
                font-size: 1.1em;
                font-weight: 300;
                font-style: normal;
                font-stretch: normal;
                line-height: 1.33;
                letter-spacing: normal;
            
                margin: 0 0 40px;}
             
          
     
         </style>
      </head>
    <body>
        <h2>Nível de Governança de TI </h2>
        <ol>
            <li>Inicial
                0 ≤ iGovTI < 30 </li>
            <li>Básico
                30 ≤ iGovTI < 50</li>
            <li>Intermediário
                50 ≤ iGovTI < 70</li>
            <li>Aprimorado
                70 ≤ iGovTI ≤ 100</li>
        </ol>
        
        
    </body>
</html>