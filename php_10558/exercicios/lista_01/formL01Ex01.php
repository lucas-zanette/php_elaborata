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
      <h2>Exercicio 01 - Lista 01 </h2>
      <p>1) Uma P.A. (progressão aritmética) fica determinada pela sua razão (r) e pelo primeiro termo(a 1 ). <br />
         Escreva um programa em C que seja capaz de determinar qualquer termo de uma P.A., dado a razão e o primeiro termo. <br />
         <b>a<sub>n</sub> = a<sub>1</sub> + ( n − 1 ) x r</b> Uma P.A. (progressão aritmética) fica determinada pela sua razão (r) e pelo primeiro <br />
         termo(a 1 ). Escreva um programa em C que seja capaz de determinar qualquer termo de <br />
         uma P.A., dado a razão e o primeiro termo. <br />
         <b>a<sub>n</sub> = a<sub>1</sub> + ( n − 1 ) x r</b></p>


      <form id="formL01Ex01"  
            method="GET">


         <!--razao-->
         <div id="divAr" class="" >
            <label id="lblAr"
                   for="nAr"
                   class="input-label">Razão:</label>
            <input id="nAr" 
                   name="nAr" 
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
            <label id="lblAt"
                   for="nAt"
                   class="input-label">Termo (n):</label>
            <input id="nAt" 
                   name="nAt"
                   type="number"                    
                   required 
                   placeholder="digite o número do termo a ser selecionado"
                   class="input-data">
            <br>
         </div>

         <div id="divL01Ex01Commands"
              class="input-command-group">

            <input id="sbmCalcular" 
                   name="smbCalcular" 
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

      <?php
      if (isset($_GET["sbmCalcular"])) {

//          solucao sera feita aqui
         $r  = $_GET["nAr"];
         $a1 = $_GET["nA1"];
         $n  = $_GET["nAt"];
         
         $an = $a1 + ( $n - 1 ) * $r;
         
         echo "<ul>";
         echo "<li> r = $r</li>";
         echo "";
         
         print_r($_GET);
      }
      ?>
   </body>
</html>
