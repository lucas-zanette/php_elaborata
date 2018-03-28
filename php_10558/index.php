<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->   
<?php
// put your code here

session_start();

$sTitle = "CURSO PHP - 10558";

$iLoad = 0;
if (isset($_GET["load"])) {  //isset = está definido
   $iLoad = $_GET["load"];
}

$bLogged = false;
if ( isset( $_SESSION["bLogged"] ) && $_SESSION["bLogged"] ) {
   $bLogged = true;
}

$sStatus = "";
if ( isset( $_GET["msg"] )) {
   $sStatus = $_GET["msg"];
}

require_once "menus.php";
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
//            $acsvMainItens = [
//                "Home;index.php;_self",
//                "Login;index.php?load=1;_self",
//                "Cadastrar;index.php?load=2;_self",
//                "Contato;index.php?load=3;_self"
//            ];
//
//            echo buildMenu("divMainMenu", "hor-menu", $acsvMainItens);
            echo buildMainMenu();
            ?>
         </nav>      

         <nav id="navLeftMenu">
            <?php
//            //require_once "left_menu.php";
//            $acsvLeftItens = [
//                "Referência 1;https://www.w3schools.com\;_blank",
//                "Referência 2;https://php.net\;_blank",
//                "Pesquisar;https://www.google.com\;_blank",
//                "Array;arrays.php;_blank"
//            ];
//
//            echo buildMenu("divLeftMenu", "ver-menu", $acsvLeftItens);
            echo buildLeftMenu();
            ?>
         </nav>

         <br />  
         <section id="sctWorkspace"> 
            <div id="divStatus"
                 style="background-color:#45a049">
               <span><?php echo $sStatus ?></span>               
            </div>

            
            <?php
            if ($iLoad === "1") {
               require_once "forms/form_login.php";
            } elseif ($iLoad === "2") {
               require_once "forms/form_signup.php";
            } elseif ($iLoad === "3") {
               require_once "forms/form_contact.php";
            }
            ?>        
         </section>

         <footer id="ftrFooter">                
         </footer>

      </div>
   </body>
</html>
