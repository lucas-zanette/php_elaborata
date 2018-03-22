<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>teste</title>

      <link rel="stylesheet"
            type="text/css"
            href="../../css/forms.css" />      
   </head>
   <body>
      <h1>Lista de Exercícios 01 –  Seqüência Simples</h1>
      <h2>Exercicio 07 - Lista 01 </h2>
      
      <p>Considere que o número de uma placa de veículo é composto por quatro algarismos. </ br></p>
      <p>Construa   um   programa   em   PHP   que   leia   este   número   </ br></p>
      <p>e   apresente   o   algarismo correspondente à casa das dezenas.</ br></p>     
         
      <form id="formL01Ex01"  
            method="GET">


         <!--razao-->
         <div id="divAr" class="" >
            <label id="lblPlaca"
                   for="nPlaca"
                   class="input-label">Placa:</label>
            <input id="nPlaca" 
                   name="nPlaca" 
                   type="number"
                   max="9999"
                   size="4"
                   required 
                   placeholder="digite os 4 números da placa do veículo"
                   class="input-data">
            <br>
         </div>

         <div id="divL01Ex01Commands"
              class="input-command-group">

            <input id="sbmCalcular" 
                   name="sbmCalcular" 
                   type="submit" 
                   value="Calcular"
                   class="input-command"/>

            <input id="rstReset" 
                   name="rstL01Ex01" 
                   type="reset" 
                   value="Limpar"
                   class="input-command"/>
         </div>
      </form>

      <pre>
         <?php
         if (isset($_GET["sbmCalcular"])) {

//          solucao sera feita aqui
            $nPlaca   = $_GET["nPlaca"];
            
            $nDezena = substr($nPlaca, 2, 1);

            echo "<ul>";
            echo "<li>Placa: $nPlaca</li>";            
            echo "</ul>";

            echo "<ul>";
            echo "<li><p>Número correspondente à dezena da placa é: $nDezena<p></li>";
            echo "<ul>";
         }
         ?>
      </pre>
   </body>
</html>
