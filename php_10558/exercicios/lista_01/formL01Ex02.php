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
      <h1>Lista de Exercícios 02 –  Seqüência Simples</h1>
      <h2>Exercicio 02 - Lista 01 </h2>
      <p>1) Uma P.G. (progressão geométrica) fica determinada pela sua razão (q) e pelo primeiro termo(a <sub>1</sub> ). <br />
         Escreva um programa em PHP que seja capaz de determinar qualquer termo de uma P.G., dado a razão e o primeiro termo. <br />
         <b>a<sub>n</sub> = a<sub>1</sub> * q <sup>(n-1)</sup> </b><br /></p>     
         
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
                   placeholder="digite a razão da P.A"
                   class="input-data">
            <br>
         </div>

         <!--a1-->
         <div id="divA1" class="" >
            <label id="lblA1"
                   for="nA1"
                   class="input-label">Termo (a<sub>n</sub>):</label>
            <input id="nA1" 
                   name="nA1" 
                   type="number"                    
                   required 
                   placeholder="digite o primeiro termo da P.A"
                   class="input-data">
            <br>
         </div>

         <div id="divAt" class="input-data-group" >
            <label id="lblTermo"
                   for="nTermo"
                   class="input-label">Termo (n):</label>
            <input id="nTermo" 
                   name="nTermo"
                   type="number"                    
                   required 
                   placeholder="digite o número do termo a ser selecionado"
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
            $q = $_GET["nRazao"];
            $a1 = $_GET["nA1"];
            $n = $_GET["nTermo"];

            $an = $a1 * pow( $q, $n-1 ) ;

            echo "<ul>";
            echo "<li> r = $q</li>";
            echo "<li>a<sub>1</sub> = $a1</li>";
            echo "<li>n = $n</li>";
            echo "</ul>";

            echo "<ul>";
            echo "<li><p>Termo da P.G. é = $an<p></li>";
            echo "<ul>";
         }
         ?>
      </pre>
   </body>
</html>
