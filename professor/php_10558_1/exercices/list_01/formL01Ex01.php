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
      <h3>Exercício 01 - Lista 01</h3>
      <p>Uma P.A. (progressão aritmética) fica determinada pela sua razão (r) e pelo primeiro 
termo(a<sub>1</sub>). Escreva um programa que seja capaz de determinar qualquer termo de 
uma P.A., dado a razão e o primeiro termo.<br />
a<sub>n</sub> = a<sub>1</sub> + ( n - 1 ) x r</p>
      
      <form id="formL01Ex01"
            method="GET">
         <div id="divRazao"
              class="input-data-group">
            <label id="lblRazao"
                   for="nRazao"
                   class="input-label">Razão (r):</label>
            <input id="nRazao"
                   name="nRazao"
                   type="number"
                   required
                   placeholder="digite a razão da P.A."
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
                   placeholder="digite o primeiro termo da P.A."
                   class="input-data" />
         </div>
         
         <div id="divTermo"
              class="input-data-group">
            <label id="lblTermo"
                   for="nTermo"
                   class="input-label">Termo (n):</label>
            <input id="nTermo"
                   name="nTermo"
                   type="number"
                   required
                   placeholder="digite o número do termo a ser calculado."
                   class="input-data" />
         </div>
         
         <div id="divL01Ex01Commands"
              class="input-command-group">
            <input id="sbmCalculate"
                   name="sbmCalculate"
                   type="submit"
                   value="Calcular"
                   class="input-command" />
            <input id="rstContact"
                   name="rstL01Ex01"
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
         $r  = $_GET["nRazao"];
         $a1 = $_GET["nA1"];
         $n  = $_GET["nTermo"];
         
         $an = $a1 + ( $n - 1 ) * $r;
         
         echo "<ul>";
         echo "<li>r = $r</li>";
         echo "<li>a<sub>1</sub> = $a1</li>";
         echo "<li>n = $n</li>";
         echo "</ul>";
         
         echo "<p>a<sub>n</sub> = $an<p>";
         
      } // if ( isset( $_GET["sbmCalculate"] ) ){
      ?>
      </pre>
   </body>
</html>
