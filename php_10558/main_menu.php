<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$htmMainMenu = "<div id=\"divMainMenu\" class=\"hor-menu\"><ul id=\"ulMainMenu\">";

$htmMainMenu .= "<li><a href=\"index.php?load=1\" target=\"_self\">Login</a></li>";
$htmMainMenu .= "<li><a href=\"index.php?load=2\" target=\"_self\">Cadastrar</a></li>";
$htmMainMenu .= "<li><a href=\"index.php?load=3\" target=\"_self\">Contato</a></li>";
$htmMainMenu .= "</ul></div>";

echo $htmMainMenu;
