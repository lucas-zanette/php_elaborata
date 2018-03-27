<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->   

<html>

   <h3> Arrays 2 </h3>
   <p>Para acessarmos um array e seus elementos podemos utilizar as seguintes formas:</p>

   <p>O nome de um array faz referência à sequência. </p>
   <p>Para acessarmos um elemento de um array precisamos do nome do array e do índice do elemento dentro do array. </p>

   <pre>
      $asMarcas = [ "Honda", "Renault", "Ford", "Chevrolet", "Fiat" ];
      echo "&lt;p&gt; $asMarcas[1] &lt;/p&gt;";

      <strong>Resultado: </strong>
   </pre>

   <?php
      
      $asMarcas = [ "Honda", "Renault", "Ford", "Chevrolet", "Fiat" ];
      echo "<p> $asMarcas[1] </p>";
      
   ?>
   
   
   <pre>
      <p>Para imprimirmos na tela todos os elementos precisamos de um <i> laço de repetição </i> </p>
      <p>laço <i>for</i> tradicional:
      $iCount = count( $asMarcas );
      for ($i=0; $i<$iCount; $i++){
         echo "&lt;p&gt;$asMarcas[$i]&lt;/p&gt;";
      }

      <strong>Resultado: </strong>
   </pre>
   
   <?php
   $iCount = count($asMarcas);
   for ($i = 0; $i < $iCount; $i++) {
      echo "<p>$asMarcas[$i]</p>";
   }
   ?>

   <pre>
         <p>laço <i>for</i> para <i>arrays</i> (foreach):
         foreach ( $asMarcas as $sItem ) {
            echo "&lt;p&gt;;$sItem&lt;/p&gt;
         }

         <strong>Resultado</strong>
   </pre>

   <?php
   foreach ($asMarcas as $sItem) {
      echo "<p>$sItem</p>";
   }
   ?>

   <pre>
         <p>laço <i>foreach</i> com acesso aos índices:
         foreach ( $asMarcas as $iIndex => $sItem ) {
            echo "[$iIndex]: &lt;p&gt;;$sItem&lt;/p&gt";
         }
         <strong>Resultado</strong>
   </pre>

   <?php
   foreach ($asMarcas as $iIndex => $sItem) {
      echo "<p>[$iIndex]: $sItem</p>";
   }
   ?>
</html>