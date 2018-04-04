<?php

function buildMenu($sId, $sClass, array $acsvItens) {

    $htmMenu = "<div id=\"$sId\" class=\"$sClass\"><ul id=\"ul$sId\">";

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
    Global $bLogged;
    if ($bLogged) {
        $acsvMainItens = [
            "Home;index.php;_self",
            "Contato;index.php?load=3;_self",
            "Sair;proc_logout.php;_self"
        ];
    } else {
        $acsvMainItens = [
            "Home;index.php;_self",
            "Login;index.php?load=1;_self",
            "Cadastrar;index.php?load=2;_self",
            "Contato;index.php?load=3;_self"
        ];
    }
    return buildMenu("divMainMenu", "hor-menu", $acsvMainItens);
}

function buildLeftMenu() {
   Global $bLogged;
   if ($bLogged) {
      $acsvLeftItens = [
          "Referência html e CSS;https://www.w3schools.com\;_blank",
          "Referência php;https://php.net\;_blank",
          "Pesquisar;https://www.google.com\;_blank",
          "Testes;testes.php;_blank",
          "Array;arrays.php;_blank",
          "Exercícios;exercicios.php;_self",
          "Banco de dados;database.php;_self",
          "OOP;oop.php;_self"
      ];
   } else {
      $acsvLeftItens = [
          "Referência html e CSS;https://www.w3schools.com\;_blank",
          "Referência php;https://php.net\;_blank",
          "Pesquisar;https://www.google.com\;_blank",
          "Testes;testes.php;_blank",
      ];
   }
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
        "(L01) Exercicio3;exercicios/lista_01/formL01Ex03.php;ifrWorkspace",
        "(L01) Exercicio7;exercicios/lista_01/formL01Ex07.php;ifrWorkspace",
        "(L01) Exercicio21;exercicios/lista_01/formL01Ex21.php;ifrWorkspace"
    ];

    return buildMenu("divLeftMenu", "ver-menu", $acsvLeftItens);
}

function buildLeftMenu_database() {
   $acsvLeftItens = [
       "Banco de dados 01;database_select.php;ifrWorkspace",
       "Banco de dados 02;database_select_where.php;ifrWorkspace",
   ];

   return buildMenu("divLeftMenu", "ver-menu", $acsvLeftItens);
}

function buildLeftMenu_oop() {
   $acsvLeftItens = [
       "OOP 01;oop_01.php;ifrWorkspace",
       "OOP 02;oop_02.php;ifrWorkspace",
   ];

   return buildMenu("divLeftMenu", "ver-menu", $acsvLeftItens);
}
