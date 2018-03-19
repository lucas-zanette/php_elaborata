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
      <!--echo "<p>$asMarcas[1]</p>"; -->
      <strong>Resultado: </strong>
   </pre>

   <?php
   $asMarcas = [ "Honda", "Renault", "Ford", "Chevrolet", "Fiat"];
   echo "<p>$asMarcas[1]</p>";
   ?>

</html>