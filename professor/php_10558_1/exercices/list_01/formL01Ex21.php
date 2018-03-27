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
      <h3>Exercício 21 - Lista 01</h3>
      <p>Em épocas de pouco dinheiro, os comerciantes estão procurando aumentar suas vendas 
oferecendo desconto. Faça um programa que possa entrar com o valor de um produto e o
percentual de desconto. Imprima o novo valor e o valor do desconto.</p>

      <form id="formL01Ex21"
            action="formL01Ex21.php"
            method="GET">
         <div id="divValor"
              class="input-data-group">
            <label id="lblValor"
                   for="nValor"
                     class="input-label">Valor:</label>
            <input id="nValor"
                   name="nValor"
                   type="number"
                   min="0"
                   step="any"
                   required
                   value="0.00"
                   placeholder="digite o valor do produto."
                   class="input-data" />
         </div>
         <div id="divPDesc"
              class="input-data-group">
            <label id="lblPDesc"
                   for="nPDesc"
                     class="input-label">Desconto (%):</label>
            <input id="nPDesc"
                   name="nPDesc"
                   type="number"
                   min="0"
                   step="any"
                   value="0"
                   required
                   placeholder="digite o percentual de desconto."
                   class="input-data" />
         </div>

         <div id="divL01Ex21Commands"
              class="input-command-group">
            <input id="sbmCalculate"
                   name="sbmCalculate"
                   type="submit"
                   value="Calcular"
                   class="input-command" />
            <input id="rstContact"
                   name="rstL01Ex21"
                   type="reset"
                   value="Limpar"
                   class="input-command" />
         </div>

      </form>

      <pre>
      <?php
      // put your code here
      if ( isset( $_GET["sbmCalculate"] ) ){
         
         echo "<h3>Solução</h3>";
         $nValor = (float)$_GET["nValor"];
         $nPDesc = (float)$_GET["nPDesc"];
         
         $nValorDesc = $nValor * $nPDesc / 100;
         $nNovoValor = $nValor - $nValorDesc;
         
         echo "<ul>";
         echo "<li>Preço = $nValor</li>";
         echo "<li>Desc. = $nPDesc %</li>";
         echo "<li><hr /></li>";
         echo "<li>Val. Desc = $nValorDesc</li>";
         echo "<li>Novo Val. = $nNovoValor</li>";
         echo "</ul>";

      } // if ( isset( $_GET["sbmCalculate"] ) ){
      ?>
      </pre>
   </body>
</html>
