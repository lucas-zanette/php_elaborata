<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->   
<?php
session_start();
$bLogged = false;
if (isset($_SESSION["bLogged"]) && $_SESSION["bLogged"]) {
   $bLogged = true;
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
            echo buildMainMenu();
            ?>
         </nav>      

         <nav id="navLeftMenu">
            <?php
            echo buildLeftMenu_arrays();
            ?>
         </nav>

         <nav id="navLeftMenu">
            <?php
            echo buildLeftMenu_database();
            ?>
         </nav>

         <section id="sctWorkspace">                
            <iframe id="ifrWorkspace"
                    name="ifrWorkspace"
                    sandbox="allow-forms allow-same-origin">
            </iframe>
            <?php
            ?>        
         </section>

         <footer id="ftrFooter">                
         </footer>

      </div>
   </body>
</html>
