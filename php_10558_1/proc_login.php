<?php

/*
  $htmResult = "<pre>";

  $htmResult .= '<h3>SUPERGLOBAL $_GET</h3>';
  $htmResult .= print_r($_GET, true);

  $htmResult .= "<br /><hr />";

  $htmResult .= '<h3>SUPERGLOBAL $_POST</h3>';
  $htmResult .= print_r($_POST, true);

  $htmResult .= "<br /><hr />";

  $htmResult .= '<h3>SUPERGLOBAL $_REQUEST</h3>';
  $htmResult .= print_r($_REQUEST, true);

  $htmResult .= "</pre>";

  echo $htmResult;
 */

function nunLogin($sLogin, $sPassword) {

   if ($sLogin === "lgz" && $sPassword === "123") {
      return 1;
   }
   return 0; //login falhou
}

$sLogin        = $_POST["txtLoginName"];
$pwdPassword   = $_POST["pwdLoginPassword"];

if ( runLogin ( $txtLoginName, $pwdLoginPassword)) {
   
}
else {
   
}