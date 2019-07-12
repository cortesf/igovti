<?php
include_once("linkador.php");
$pergunta1=$_POST['Pergunta1'];
$pergunta2=$_POST['Pergunta2'];
$pergunta3=$_POST['Pergunta3'];
$pergunta4=$_POST['Pergunta4'];
$pergunta5=$_POST['Pergunta5'];
$pergunta6=$_POST['Pergunta6'];
$pergunta7=$_POST['Pergunta7'];
$pergunta8=$_POST['Pergunta8'];
$pergunta9=$_POST['Pergunta9'];
$pergunta10=$_POST['Pergunta10'];
$pergunta11=$_POST['Pergunta11'];
$pergunta12=$_POST['Pergunta12'];
$pergunta13=$_POST['Pergunta13'];
$pergunta14=$_POST['Pergunta14'];
$pergunta15=$_POST['Pergunta15'];
$pergunta16=$_POST['Pergunta16'];
$pergunta17=$_POST['Pergunta17'];
$pergunta18=$_POST['Pergunta18'];
$pergunta19=$_POST['Pergunta19'];
$pergunta20=$_POST['Pergunta20'];
$pergunta21=$_POST['Pergunta21'];
$pergunta22=$_POST['Pergunta22'];
$pergunta23=$_POST['Pergunta23'];
$pergunta24=$_POST['Pergunta24'];
$pergunta25=$_POST['Pergunta25'];
$pergunta26=$_POST['Pergunta26'];
$pergunta27=$_POST['Pergunta27'];
$pergunta28=$_POST['Pergunta28'];
$pergunta29=$_POST['Pergunta29'];
$pergunta30=$_POST['Pergunta30'];
$pergunta31=$_POST['Pergunta31'];
$pergunta32=$_POST['Pergunta32'];
$pergunta33=$_POST['Pergunta33'];
$pergunta34=$_POST['Pergunta34'];
$pergunta35=$_POST['Pergunta35'];
$pergunta36=$_POST['Pergunta36'];
$pergunta37=$_POST['Pergunta37'];
$pergunta38=$_POST['Pergunta38'];
$pergunta39=$_POST['Pergunta39'];
$pergunta40=$_POST['Pergunta40'];
$pergunta41=$_POST['Pergunta41'];
$pergunta42=$_POST['Pergunta42'];
$pergunta43=$_POST['Pergunta43'];
$pergunta44=$_POST['Pergunta44'];
$pergunta45=$_POST['Pergunta45'];
$pergunta46=$_POST['Pergunta46'];
$pergunta47=$_POST['Pergunta47'];
$pergunta48=$_POST['Pergunta48'];
$pergunta49=$_POST['Pergunta49'];
$pergunta50=$_POST['Pergunta50'];
$pergunta51=$_POST['Pergunta51'];
$pergunta52=$_POST['Pergunta52'];
$pergunta53=$_POST['Pergunta53'];
$pergunta54=$_POST['Pergunta54'];
$pergunta55=$_POST['Pergunta55'];
$pergunta56=$_POST['Pergunta56'];
$pergunta57=$_POST['Pergunta57'];
$pergunta58=$_POST['Pergunta58'];
$pergunta59=$_POST['Pergunta59'];
$pergunta60=$_POST['Pergunta60'];
$pergunta61=$_POST['Pergunta61'];

/*colocar uma lógica para já aparecer em qual categoria o resultado se aplica>*/

print(1.794 + (1.716 * $pergunta4) + (2.515 * $pergunta38) + (1.272 * $pergunta8)+ (1.432 * $pergunta49) + (2.067 * $pergunta41) + (2.005 * $pergunta55) + (3.727 * $pergunta27) + (1.426 * $pergunta5)+ (0.875 * $pergunta52) + (0.953 * $pergunta22) + (2.445 * $pergunta30) + (2.249 * $pergunta9) + (0.889 * $pergunta60) + (0.936 * $pergunta24) + (1.247 * $pergunta10) + (1.206 * $pergunta56) + (1.652 * $pergunta17) + (3.084 * $pergunta40) + (2.742 * $pergunta28)+ (1.547 * $pergunta13) + (1.362 * $pergunta37) + (2.588 * $pergunta16) + (1.709 * pergunta33) + (1.929 * $pergunta45) + (1.356 * $pergunta32) + (1.556 * $pergunta6) + (2.050 * $pergunta36) + (1.826 * $pergunta14) + (0.981 * $pergunta3) + (1.386 * $pergunta26) + (1.154 * $pergunta53) + (1.372 * $pergunta59) + (1.470 * $pergunta23) + (0.622 * $pergunta58) + (0.886 * $pergunta34) + (0.796 * $pergunta1) + (1.183 * $pergunta25) + (2.700 * $pergunta46) + (1.799 * $pergunta42) + (1.176 * $pergunta43) + (1.119 * $pergunta20) + (1.610 * $pergunta29) + (1.412* $pergunta39) + (0.775 * $pergunta18) + (0.606 * $pergunta47) + (1.004 * $pergunta2) + (1.210 * $pergunta12) + (0.673* $pergunta35) + (0.986 * $pergunta31) + (1.242 * $pergunta7) + (1.000 * $pergunta57) + (0.978 * $pergunta44) + (0.746 * $pergunta54) + (1.443 * $pergunta61) + (0.933 * $pergunta48) + (0.952 * $pergunta15) + (1.041 * $pergunta21) +(1.195 * $pergunta50) + (0.931 * $pergunta11) + (0.766 * $pergunta51) + (1.541 * $pergunta19));

$sql= "insert into respostas (Pergunta1,Pergunta2,Pergunta3,Pergunta4,Pergunta,Pergunta6,Pergunta7,Pergunta8,Pergunta9,Perguta10,Pergunta11,Pergunta12,Pergunta13,Pergunta14,Pergunta15,Pergunta16,Pergunta17,Pergunta18,Pergunta19,Pergunta20,Pergunta21,Pergunta22,Pergunta23,Pergunta24,Pergunta25,Pergunta26,Pergunta27,Pergunta28,Pergunta29,Pergunta30,Pergunta31,Pergunta32,Pergunta33,Pergunta34,Pergunta35,Pergunta36,Pergunta37,Pergunta38,Pergunta39,Pergunta40,Pergunta41,Pergunta42,Pergunta43,Pergunta44,Pergunta45,Pergunta46,Pergunta47,Pergunta48,Pergunta49,Pergunta50,Pergunta51,Pergunta52,Pergunta53,Pergunta54,Pergunta55,Pergunta56,Pergunta57,Pergunta58,Pergunta59,Pergunta60,Pergunta61) values('$pergunta1','$pergunta2','$pergunta3','$pergunta4','$pergunta5','$pergunta6','$pergunta7','$pergunta8','$pergunta9','$pergunta10','$pergunta11','$pergunta12','$pergunta13','$pergunta14','$pergunta15','$pergunta16','$pergunta17','$pergunta18','$pergunta19','$pergunta20','$pergunta21','$pergunta22','$pergunta23','$pergunta24','$pergunta25','$pergunta26','$pergunta27','$pergunta28','$pergunta29','$pergunta30','$pergunta31','$pergunta32','$pergunta33','$pergunta34','$pergunta35','$pergunta36','$pergunta37','$pergunta38','$pergunta39','$pergunta40','$pergunta41','$pergunta42','$pergunta43','$pergunta44','$pergunta45','$pergunta46','$pergunta47','$pergunta48','$pergunta49','$pergunta50','$pergunta51','$pergunta52','$pergunta53','$pergunta54','$pergunta55','$pergunta56','$pergunta57','$pergunta58','$pergunta59','$pergunta60','$pergunta61')";

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
        <h1>Nível de Governança de TI </h1>
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