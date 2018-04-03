<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
</html>
