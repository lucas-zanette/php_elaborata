<?php

function buildMenu($sId, $sClass, array $acsvItens) {

   $htmMenu = "<div id=\"div$sId\" class=\"$sClass\"><ul id=\"ul$sId\">";

   /*
    * PARA CADA $item_da_lista DE $lista_de_itens FAÇA
    *    // monte o item de menu
    * FIMPARA
    * 
    * $lista_de_itens: $acsvItens
    * $item_da_lista:  $csvItem
    * 
    */
   foreach ($acsvItens as $csvItem) {

      //exemplo: $csvItem  = "Referência1;https://www.w3schools.com\;_blank";
      $asItem = explode(";", $csvItem);

      $sCaption = $asItem[0];
      $sHref = $asItem[1];
      $sTarget = $asItem[2];

      $htmMenu .= "<li><a href=\"$sHref\" target=\"$sTarget\">$sCaption</a></li>";
   } // foreach ( $acsvItens as $csvItem ){   

   $htmMenu .= "</ul></div>";
   return $htmMenu;
}

// function buildMenu( $sId, $sClass, array $acsvItens ){

function buildMainMenu() {
   $acsvMainItens = [
       "Home;index.php;_self",
       "Login;index.php?load=1;_self",
       "Cadastrar;index.php?load=2;_self",
       "Contato;index.php?load=3;_self"
   ];

   return buildMenu("divMainMenu", "hor-menu", $acsvMainItens);
}

function buildLeftMenu() {
   $acsvLeftItens = [
       "Referência 1;https://www.w3schools.com\;_blank",
       "Referência 2;https://php.net\;_blank",
       "PHP Info;phpinfo.php;_blank",
       "Pesquisar;https://www.google.com\;_blank",
       "Testes;testes.php;_blank",
       "Array;arrays.php;_blank",
       "Exercícios;exercicios.php;_self"
   ];

   return buildMenu("divLeftMenu", "ver-menu", $acsvLeftItens);
}

function buildLeftMenu_arrays() {
   $acsvLeftItens = [
       "Arrays 1;arrays_1.php;ifrWorkspace",
       "Arrays 2;arrays_2.php;ifrWorkspace"
   ];

   return buildMenu("divLeftMenu", "ver-menu", $acsvLeftItens);
}

function buildLeftMenuExercicios() {
   $acsvLeftItens = [
       "(L01) Exercicio1;exercicios/lista_01/formL01Ex01.php;ifrWorkspace",
       "(L01) Exercicio2;exercicios/lista_01/formL01Ex02.php;ifrWorkspace",
       "Exercicio2;https://php.net\;_blank",
       "Exercicio3;phpinfo.php;_blank",
       "Exercicio4;https://www.google.com\;_blank",
       "Exercicio5;testes.php;_blank",
       "Exercicio6;arrays.php;_blank",
       "Exercicio7;exercicios.php;_self"
   ];

   return buildMenu("divLeftMenu", "ver-menu", $acsvLeftItens);
}

