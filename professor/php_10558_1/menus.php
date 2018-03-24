<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * FUNCAO nomeDaFuncao ( conjunto_de_variaveis ) : TIPO_RETORNO
 *    VAR
 *       // declarações de variáveis * 
 *    INICIO
 *       // comandos
 * 
 *       retorne valor_de_retorno
 * FIMFUNCAO
 * 
 * 
 * 
 * PROCEDIMENTO nomeDoProcedimento( conjunto_de_variaveis )
 *    VAR
 *       // declarações de variáveis * 
 *    INICIO
 *       // comandos
 * FIMPROCEDIMENTO
 */

function buildMenu( $sId, $sClass, array $acsvItens ){
   
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
   foreach ( $acsvItens as $csvItem ){
      
      //exemplo: $csvItem  = "Referência1;https://www.w3schools.com\;_blank";
      $asItem   = explode( ";", $csvItem );
      
      $sCaption = $asItem[0];
      $sHref    = $asItem[1];
      $sTarget  = $asItem[2];
      
      $htmMenu .= "<li><a href=\"$sHref\" target=\"$sTarget\">$sCaption</a></li>";
   } // foreach ( $acsvItens as $csvItem ){   
   
   $htmMenu .= "</ul></div>";
   return $htmMenu;
} // function buildMenu( $sId, $sClass, array $acsvItens ){

/**
 * 
 * @return type
 */
function buildMainMenu(){               
            
   $acsvMainItens = [
       "Home;index.php;_self",
       "Login;index.php?load=1;_self",
       "Cadastrar;index.php?load=3;_self",
       "Contato;index.php?load=2;_self"
   ];

   return buildMenu( "MainMenu", "hor-menu", $acsvMainItens );   
} // function buildMainMenu(){

/**
 * 
 * @return type
 */
function buildLeftMenu(){
            
   $acsvLeftItens = [
       "PHP Info;phpinfo.php;_blank",
       "Testes;testes.php;_blank",
       "W3Schools;https://www.w3schools.com\;_blank",
       "php.net;https://php.net\;_blank",
       "Pesquisar;https://www.google.com\;_blank",
       "Arrays;arrays.php;_self",
       "Exercícios;exercices.php;_self"
   ];

   return buildMenu( "LeftMenu", "ver-menu", $acsvLeftItens );
} // function buildLeftMenu(){

/**
 * 
 * @return type
 */
function buildLeftMenu_arrays(){
            
   $acsvLeftItens = [
       "Arrays 1;arrays_1.php;ifrWorkspace",
       "Arrays 2;arrays_2.php;ifrWorkspace",
       "Arrays 3;arrays_3.php;ifrWorkspace"
   ];

   return buildMenu( "LeftMenu", "ver-menu", $acsvLeftItens );
} // function buildLeftMenu_arrays(){

/**
 * 
 * @return type
 */
function buildLeftMenu_exercices(){
            
   $acsvLeftItens = [
       "Exercício 01 (L01);exercices/list_01/formL01Ex01.php;ifrWorkspace",
       "Exercício 02 (L01);exercices/list_01/formL01Ex02.php;ifrWorkspace",
       "Exercício 03 (L01);exercices/list_01/formL01Ex03.php;ifrWorkspace",
       "Exercício 07 (L01);exercices/list_01/formL01Ex07.php;ifrWorkspace",
       "Exercício 21 (L01);exercices/list_01/formL01Ex21.php;ifrWorkspace"
   ];

   return buildMenu( "LeftMenu", "ver-menu", $acsvLeftItens );
} // function buildLeftMenu_arrays(){

