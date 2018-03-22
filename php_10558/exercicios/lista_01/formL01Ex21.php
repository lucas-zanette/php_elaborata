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
      
      <p>Em épocas de pouco dinheiro, os comerciantes estão procurando aumentar suas vendas oferecendo desconto. </ br></p>
      <p>Faça um programa em PHP que possa entrar com o valor de um produto </ br></p>
      <p>e imprima o novo valor tendo em vista que o desconto foi de 9%. </ br></p>
      <p>Além disso, imprima o valor do desconto. </ br></p>
         
      <form id="formL01Ex01"  
            method="GET">

         <div id="divAr" class="" >
            <label id="lblVlr"
                   for="nVlr"
                   class="input-label">Valor do produto em (R$):</label>
            <input id="nVlr" 
                   name="nVlr" 
                   type="number"                    
                   required 
                   placeholder="digite o valor do produto"
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
            $nVlr            = $_GET["nVlr"];
            $nVlrDesconto    = $nVlr * (0.09);
            $nVlrComDesconto = $nVlr * (0.91);

            echo "<ul>";
            echo "<li>Valor inicial do produto: $nVlr</li> </ br>";
            echo "<li>Valor do desconto de 9%: $nVlrDesconto</li>";
            echo "<li>Valor do produto com desconto de 9%: $nVlrComDesconto</li>";
            echo "</ul>";
         }
         ?>
      </pre>
   </body>
</html>
