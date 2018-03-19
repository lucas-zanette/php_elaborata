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
      <h3> ARRAYS 1</h3>
      <p> Arrays são <i>sequência</i> de variáveis;</p>
      <p> Um array tem um nome que faz referência à sequência;</p>
      <p> Para acessar um elemento do array, precisamos do seu nome e a posição (ou índice) do elemento que queremos acessar.</p>
      <p> Para criarmos um array em php podemos utilizar as seguintes formas:</p>
      
      <pre>
         <!--$asArraysDeInteiros = (1,2,3,4); //FORMA ANTIGA-->
         $asArraysDeInteiros = [1,2,3,4]; 
         
         print_r( $asArrayDeInteiros );
         
         $afArrayDeReais[] = 1.2;  //indice 0
         $afArrayDeReais[] = 2.2;  //indice 1
         $afArrayDeReais[] = 2.7;  //indice 2
         $afArrayDeReais[] = 1.2;  //indice 3
         $afArrayDeReais[] = 3.1;  //indice 4
         
         print_r( $asArrayDeReais ); 
      
      <?php
         //$asArraysDeInteiros = (1,2,3,4); //FORMA ANTIGA
         $asArraysDeInteiros = [1,2,3,4]; 
         
         print_r( $asArrayDeInteiros );
         
         $afArrayDeReais[] = 1.2;  //indice 0
         $afArrayDeReais[] = 2.2;  //indice 1
         $afArrayDeReais[] = 2.7;  //indice 2
         $afArrayDeReais[] = 1.2;  //indice 3
         $afArrayDeReais[] = 3.1;  //indice 4
         
         print_r( $asArrayDeInteiros );
         
         $asArrayDeInteiros = [ 2=> 1, 4=>2, 6=>2, 8=>4];
         
         print_r( $asArrayDeInteiros );
         
         $afArrayDeReais[1] = 1.2;  
         $afArrayDeReais[3] = 2.2;  
         $afArrayDeReais[5] = 2.7;  
         $afArrayDeReais[7] = 3.1;  
         
         print_r($afArrayDeReais);
      ?>        
      </pre>
      
      
      <pre>      
         <p> Para acessarmos um array e seus elementos podemos utilizar as seguintes formas:</p>
      <pre>
         
      </pre>
      <?php
      ?>
   </body>
</html>