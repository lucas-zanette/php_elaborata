<!--<!DOCTYPE html>

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <h3>Programação Orientada a Objetos</h3>
      <?php
         require_once 'classes/classHtmlElement.php';
         
         $htmElement = new HtmlElement("div");
         
         echo $htmElement->getHtmlCode();
         
//         não preciso mais disto abaixo
//         $htmElement->sTag = "div";
//         echo $htmElement->sTag;
      ?>
   </body>
</html>-->


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->   
<?php

session_start();

$bLogged = false;
if ( isset( $_SESSION["bLogged"] ) && $_SESSION["bLogged"] ) {
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
            echo buildLeftMenu_oop();
            ?>
         </nav>

         <section id="sctWorkspace">                
            <iframe id="ifrWorkspace"
                    name="ifrWorkspace">

            </iframe>
            <?php
            ?>        
         </section>

         <footer id="ftrFooter">                
         </footer>

      </div>
   </body>
</html>
