<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculando IMC</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<table width="300" cellspacing="4" cellpadding="8" border="0" bgcolor="#48D1CC">
    <tr> 
       <td><font color="#FFFFFF" face="arial, verdana, helvetica"> 
    <b> Calculadora de IMC </b> 
    <br>
    Índice de massa corpórea
    </font>
    </td> 
    </tr>
    <tr> 
       <td bgcolor="#FFFFFF"> 
       <font face="arial, verdana, helvetica"> 
    
   <head>
    <script>
     //>>>Inicio cód php
      <?php
        function mensagem($mensagem){
        echo $mensagem . PHP_EOL;                
    }
        function calculandoImc($peso, $altura){
        $peso;
        $altura;
        $imc = $peso/($altura * $altura);
            
        $tabela = ["Magreza","Saudável", "Sobrepeso", "Obesidade Grau I","Obesidade Grau II","Obesidade Grau III"];        
        
            if ($imc <= 18.5){
                mensagem("Atenção, seu IMC é de: " . $imc . ", e você esta classificado como " . $tabela['0']);            
              
            } 
            elseif ($imc >= 18.51 && $imc <= 24.9){
                mensagem("Atenção, seu IMC é de: " . $imc . ", e você esta classificado como " . $tabela['1']);
                        
            }
             elseif ($imc >= 24.91 && $imc <= 29.9) {
                 mensagem("Atenção, seu IMC é de: " . $imc . ", e você esta classificado como " . $tabela['2']);
                          
            }
             elseif ($imc >= 30 && $imc <= 34.9) {
                 mensagem("Atenção, seu IMC é de: " . $imc . ", e você esta classificado como " . $tabela['3']);
                             
            } 
            elseif ($imc >= 35 && $imc <= 39.9) {
                mensagem("Atenção, seu IMC é de: " . $imc . ", e você esta classificado como " . $tabela['4']);
                            
            } 
            elseif ($imc > 39.9 ) {
                mensagem("Atenção, seu IMC é de: " . $imc . ", e você esta classificado como " . $tabela['5']);
                              
    }}
    ?> 
    //>>>final cód php
    </script>
    </head>    
    <body>
    <div align="center">
    <form  name="form" id="form">
    <br>
    Peso (em Kg)
    <br>
    <input type="Text" name="$peso" size="15"> 
    <br>
    <br>
    Altura (em Cm)
    <br>
    <input type="Text" name="$altura" size="15"> 
    <br>
    <br>
    <input type="button" style="Padding: 8pt" value="Calcular IMC" onclick="calculandoImc()" name="button">
    <input type="reset" style="Padding: 8pt" value="Limpar Valores">
    <br>
    <br>
    <br>
    IMC
    <br>
    <input type="Text" name="massacor" id="massacor" size="15"> 
    <br>
    <br>
    Avaliaçãoo do IMC
    <br> 
    <input type="Text" name="comment" id="comment" size="15">
    <br>
    <br>
                         </form>
                     </div>
              </body>     
            </font> 
         </td> 
        </tr>
        </table>
    </html>