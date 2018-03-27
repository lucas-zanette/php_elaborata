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
      <h2>Exercicio 03 - Lista 01 </h2>
      <p>1) Dada a razão de uma P.A e um termo qualquer, k (a<sub>k</sub>. Escreva um programa em PHP que seja capaz de determinar qualquer outro termo, n, (a<sub>n</sub>)<br />
         <b>a<sub>n</sub> = a<sub>k</sub> + (n-k) * r </b><br /></p>     
         
      <form id="formL01Ex01"  
            method="GET">


         <!--razao-->
         <div id="divAr" class="" >
            <label id="lblrazao"
                   for="nRazao"
                   class="input-label">Razão:</label>
            <input id="nRazao" 
                   name="nRazao" 
                   type="number"                    
                   required 
                   placeholder="digite a razão"
                   class="input-data">
            <br>
         </div>

         <!--ak-->
         <div id="divA1" class="" >
            <label id="lblAk"
                   for="nAk"
                   class="input-label">k (a<sub>k</sub>):</label>
            <input id="nAk" 
                   name="nAk" 
                   type="number"                    
                   required 
                   placeholder="digite o k"
                   class="input-data">
            <br>
         </div>

         <div id="divKe" class="" >
            <label id="lblKe"
                   for="nKe"
                   class="input-label">k ésimo termo (a<sub>k</sub>):</label>
            <input id="nKek" 
                   name="nKe" 
                   type="number"                    
                   required 
                   placeholder="digite o (ésimo) termo da P.A"
                   class="input-data">
            <br>
         </div>

         

         <div id="divAt" class="input-data-group" >
            <label id="lblN"
                   for="nN"
                   class="input-label">Termo (n):</label>
            <input id="nN" 
                   name="nN"
                   type="number"                    
                   required 
                   placeholder="digite o número do termo a ser calculado"
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
            $q   = $_GET["nRazao"];
            $nAk = $_GET["nAk"];
            $nKe = $_GET["nKe"];
            $n   = $_GET["nN"];

            $an = $nAk + ($n - $nKe) * $q;

            echo "<ul>";
            echo "<li> r = $q</li>";
            echo "<li>a<sub>k</sub> = $nAk</li>";
            echo "<li>K esimo = $nKe</li>";
            echo "<li>n = $n</li>";
            echo "</ul>";

            echo "<ul>";
            echo "<li><p>Termo da P.A. é = $an<p></li>";
            echo "<ul>";
         }
         ?>
      </pre>
   </body>
</html>
