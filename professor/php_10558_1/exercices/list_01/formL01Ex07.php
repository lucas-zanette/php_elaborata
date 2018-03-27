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
      <h3>Exercício 07 - Lista 01</h3>
      <p>Considere que o número de uma placa de veículo é composto por quatro algarismos.
Construa   um   programa   que   leia   este   número   e   apresente   o   algarismo
correspondente à casa das dezenas.</p>

      <form id="formL01Ex07"
            action="formL01Ex07.php"
            method="GET">
         <div id="divPlaca"
              class="input-data-group">
            <label id="lblPlaca"
                   for="txtPlaca"
                     class="input-label">Placa:</label>
            <input id="txtPlaca"
                   name="txtPlaca"
                   type="text"
                   required
                   placeholder="digite os quatro números da placa."
                   class="input-data" />
         </div>

         <div id="divL01Ex07Commands"
              class="input-command-group">
            <input id="sbmCalculate"
                   name="sbmCalculate"
                   type="submit"
                   value="Calcular"
                   class="input-command" />
            <input id="rstContact"
                   name="rstL01Ex07"
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

         echo "<h3>1ª Solução</h3>";
         $txtPlaca  = $_GET["txtPlaca"];

         $iDigito = $txtPlaca[2];
         echo "<ul>";
         echo "<li>Placa = $txtPlaca</li>";
         echo "<li><hr /></li>";
         echo "<li>Resp. = $iDigito</li>";
         echo "</ul>";
         
         echo "<br /><hr /><br />";
         echo "<h3>2ª Solução</h3>";
         $nPlaca  = (int)$_GET["txtPlaca"];
         
         $iDigito = (int)( ( ( $nPlaca % 1000 ) % 100 ) / 10 );
         
         echo "<ul>";
         echo "<li>Placa = $nPlaca</li>";
         echo "<li><hr /></li>";
         echo "<li>Resp. = $iDigito</li>";
         echo "</ul>";

      } // if ( isset( $_GET["sbmCalculate"] ) ){
      ?>
      </pre>
   </body>
</html>
