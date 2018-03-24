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
      <h3>Exercício 03 - Lista 01</h3>
      <p>Dada a razão de uma P.A. (progressão aritmética) e um termo qualquer, k (a<sub>K</sub>). Escreva 
         um programa para calcular qualquer outro termo, n, (a<sub>n</sub>).</p>
      <p>a<sub>n</sub> = a<sub>k</sub> <i style="font-size:10px">+</i> ( n - k ) <i style="font-size:10px">x</i> r</p>
      
      <form id="formL01Ex03"
            method="GET">
         <div id="divR"
              class="input-data-group">
            <label id="lblR"
                   for="nR"
                   class="input-label">Razão (r):</label>
            <input id="nR"
                   name="nR"
                   type="number"
                   required
                   placeholder="digite a razão da P.A."
                   class="input-data" />
         </div>
         
         <div id="divK"
              class="input-data-group">
            <label id="lblK"
                   for="nK"
                   class="input-label">k (a<sub>k</sub>):</label>
            <input id="nK"
                   name="nK"
                   type="number"
                   required
                   placeholder="digite K"
                   class="input-data" />
         </div>
         
         <div id="divAk"
              class="input-data-group">
            <label id="lblAk"
                   for="nAk"
                   class="input-label">k-ésimo termo (a<sub>k</sub>):</label>
            <input id="nAk"
                   name="nAk"
                   type="number"
                   required
                   placeholder="digite o k-ésimo termo da P.A."
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
         
         <div id="divL01Ex03Commands"
              class="input-command-group">
            <input id="sbmCalculate"
                   name="sbmCalculate"
                   type="submit"
                   value="Calcular"
                   class="input-command" />
            <input id="rstContact"
                   name="rstL01Ex03"
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
         $r  = $_GET["nR"];
         $k  = $_GET["nK"];
         $ak = $_GET["nAk"];
         $n  = $_GET["nN"];
         
         $an = $ak + ( $n - $k ) * $r;
         
         echo "<ul>";
         echo "<li>r = $r</li>";
         echo "<li>k = $k</li>";
         echo "<li>a<sub>k</sub> = $ak</li>";
         echo "<li>n = $n</li>";
         echo "</ul>";
         
         echo "<p>a<sub>n</sub> = $an<p>";
         
      } // if ( isset( $_GET["sbmCalculate"] ) ){
      ?>
      </pre>
   </body>
</html>
