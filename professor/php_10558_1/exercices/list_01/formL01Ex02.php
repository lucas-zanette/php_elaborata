<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
      
       <link rel="stylesheet" 
             type="text/css" 
             href="../../css/forms.css" />
   </head>
   <body>
      <h3>Exercício 02 - Lista 01</h3>
      <p>Uma P.G. (progressão geométrica) fica determinada pela sua razão (q) e pelo primeiro 
         termo (a<sub>1</sub>). Escreva um programa que seja capaz de determinar qualquer termo de 
uma P.G., dado a razão e o primeiro termo.<br />
a<sub>n</sub> = a<sub>1</sub> <i style="font-size:10px">×</i> q<sup>(n − 1)</sup>
      
      <form id="formL01Ex02"
            method="GET">
         <div id="divQ"
              class="input-data-group">
            <label id="lblQ"
                   for="nQ"
                   class="input-label">Razão (r):</label>
            <input id="nQ"
                   name="nQ"
                   type="number"
                   required
                   placeholder="digite a razão da P.G."
                   class="input-data" />
         </div>
         
         <div id="divA1"
              class="input-data-group">
            <label id="lblA1"
                   for="nA1"
                   class="input-label">Primeiro termo (a<sub>1</sub>):</label>
            <input id="nA1"
                   name="nA1"
                   type="number"
                   required
                   placeholder="digite o primeiro termo da P.G."
                   class="input-data" />
         </div>
         
         <div id="divN"
              class="input-data-group">
            <label id="lblN"
                   for="nN"
                   class="input-label">Termo (n):</label>
            <input id="nN"
                   name="nN"
                   type="number"
                   required
                   placeholder="digite o número do termo a ser calculado."
                   class="input-data" />
         </div>
         
         <div id="divL01Ex02Commands"
              class="input-command-group">
            <input id="sbmCalculate"
                   name="sbmCalculate"
                   type="submit"
                   value="Calcular"
                   class="input-command" />
            <input id="rstContact"
                   name="rstL01Ex02"
                   type="reset"
                   value="Limpar"
                   class="input-command" />
         </div>
         
      </form>
      
      <pre>
      <?php
      // put your code here
      if ( isset( $_GET["sbmCalculate"] ) ){
         
         //print_r( $_GET );
         $q  = $_GET["nQ"];
         $a1 = $_GET["nA1"];
         $n  = $_GET["nN"];
         
         $an = $a1 * pow( $q, $n - 1 );
         
         echo "<ul>";
         echo "<li>q = $q</li>";
         echo "<li>a<sub>1</sub> = $a1</li>";
         echo "<li>n = $n</li>";
         echo "</ul>";
         
         echo "<p>a<sub>n</sub> = $an<p>";
         
      } // if ( isset( $_GET["sbmCalculate"] ) ){
      ?>
      </pre>
   </body>
</html>
