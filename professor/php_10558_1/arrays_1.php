<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <h3>ARRAYS 1</h3>
      <p>Arrays são <i>sequências</i> de variáveis;</p>
      <p>Um array tem um nome que faz referência à sequência;</p>
      <p>Para acessar um elemento do array precisamos do seu nome e a posição (ou índice)
do elemento que queremos acessar.</p>
      <p>Para criarmos um array em PHP podemos utilizar as seguintes formas:</p>
      <pre>
         $aiArrayDeInteiros = [ 1, 2, 3, 4 ];
         
         print_r( $aiArrayDeInteiros );
         
         $afArrayDeReais[] = 1.2;
         $afArrayDeReais[] = 2.2;
         $afArrayDeReais[] = 2.7;
         $afArrayDeReais[] = 3.1;
         
         print_r( $afArrayDeReais );
         
         $aiArrayDeInteiros = [ 2 => 1, 4 => 2, 6 => 3, 8 => 4 ];
         
         print_r( $aiArrayDeInteiros );
         
         $afArrayDeReais[1] = 1.2;
         $afArrayDeReais[3] = 2.2;
         $afArrayDeReais[5] = 2.7;
         $afArrayDeReais[7] = 3.1;
         
         print_r( $afArrayDeReais );

         <strong>Resultados:</strong>

      <?php
         // put your code here
         //$aiArrayDeInteiros = array( 1, 2, 3, 4 ); // FORMA ANTIGA
         $aiArrayDeInteiros = [ 1, 2, 3, 4 ];
         
         print_r( $aiArrayDeInteiros );
         
         $afArrayDeReais[] = 1.2;
         $afArrayDeReais[] = 2.2;
         $afArrayDeReais[] = 2.7;
         $afArrayDeReais[] = 3.1;
         
         print_r( $afArrayDeReais );
         
         $aiArrayDeInteiros = [ 2 => 1, 4 => 2, 6 => 3, 8 => 4 ];
         
         print_r( $aiArrayDeInteiros );
         
         $afArrayDeReais[1] = 1.2;
         $afArrayDeReais[3] = 2.2;
         $afArrayDeReais[5] = 2.7;
         $afArrayDeReais[7] = 3.1;
         
         print_r( $afArrayDeReais );         
      ?>         
      </pre>
      
      <p>Para acessarmos um array e seus elementos podemos utilizar as seguintes formas:</p>
      <pre>
         
      </pre>
      <?php
      // put your code here
      ?>
   </body>
</html>
