<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// put your code here
$sTitle = "CURSO PHP - 10558";

$iLoad = "0";
if ( isset( $_GET["load"] ) ){
   $iLoad = $_GET["load"];
}

$sStatus = "Pronto.";
if ( isset( $_GET["msg"] )) {
   $sStatus = $_GET["msg"];
}

require_once "menus.php"
?>
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
      
       <link rel="stylesheet" 
             type="text/css" 
             href="css/style.css" />
      
       <link rel="stylesheet" 
             type="text/css" 
             href="css/menus.css" />
      
       <link rel="stylesheet" 
             type="text/css" 
             href="css/forms.css" />
      <?php
      // put your code here
      ?>
   </head>
   <body>
      <div id="divWrapper">
         <header id="hdrHeader">
         </header>

         <nav id="navMainMenu">
            <?php
//               require_once "main_menu.php";
               // OU               
            
//               $acsvMainItens = [
//                   "Home;index.php;_self",
//                   "Login;index.php?load=1;_self",
//                   "Cadastrar;index.php?load=3;_self",
//                   "Contato;index.php?load=2;_self"
//               ];
//            
//               echo buildMenu( "MainMenu", "hor-menu", $acsvMainItens );
            
               echo buildMainMenu();
            ?>
         </nav>

         <nav id="navLeftMenu">
            <?php
//               require_once "left_menu.php";
               // OU
            
//               $acsvLeftItens = [
//                   "Referência 1;https://www.w3schools.com\;_blank",
//                   "Referência 2;https://php.net\;_blank",
//                   "Pesquisar;https://www.google.com\;_blank",
//                   "Arrays;arrays.php;_self"
//               ];
//            
//               echo buildMenu( "LeftMenu", "ver-menu", $acsvLeftItens );
            
               echo buildLeftMenu();
            ?>
         </nav>

         <section id="sctWorkspace">
            <div id="divStatus" 
                 style="background-color:darkseagreen">
               <span><?php echo $sStatus ?></span>
            </div>
            <?php
               if ( $iLoad === "1" ){
                  require_once "./forms/form_login.php";
               }
               elseif ( $iLoad === "2" ){
                  require_once "./forms/form_contact.php";
               }
               elseif ( $iLoad === "3" ){
                  require_once "./forms/form_signup.php";
               }
            ?>
         </section>

         <footer id="ftrFooter">                
         </footer>
      </div>
   </body>
</html>


































