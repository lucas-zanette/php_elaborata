<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$htmResult = "<pre>";
//
//$htmResult .= '<h3>SUPERGLOBAL $_GET</h3>';
//$htmResult .= print_r( $_GET, true );
//
//$htmResult .= "<br /><hr />";
//
//$htmResult .= '<h3>SUPERGLOBAL $_POST</h3>';
//$htmResult .= print_r( $_POST, true );
//
//$htmResult .= "<br /><hr />";
//
//$htmResult .= '<h3>SUPERGLOBAL $_REQUEST</h3>';
//$htmResult .= print_r( $_REQUEST, true );
//
//$htmResult .= "</pre>";
//
//echo $htmResult;

function saveNewUser( array $asNewUser ){
   $bResult = true;
   
   $asNewUser["iAccessLevel"] = 2;
   $asNewUser["tsDateTime"]   = time();
   
   $sData = json_encode( $asNewUser );
   if ( file_exists( "data/users.json" ) || 1 ){
      $bResult = (bool)file_put_contents( "data/users.json", $sData, FILE_APPEND );   
   }
   
   $asError = error_get_last();
   
   return $bResult;
} // function saveNewUser( array $asNewUser ){

$sResult = "ERRO: Acesso inválido!";
if ( isset( $_POST["sbmSignup"] ) ){
   
   // SALVAR NOVO USUÁRIO
   
   // EXTRAÇÃO DOS DADOS
   $asNewUser["txtSignupName"]     = $_POST["txtSignupName"];
   $asNewUser["emlSignupEmail"]    = $_POST["emlSignupEmail"];
   $asNewUser["pwdSignupPassword"] = $_POST["pwdSignupPassword"];
   
   $pwdSignupConfPassword          = $_POST["pwdSignupConfPassword"];
   
   // VALIDAÇÃO DOS DADOS
   if ( $asNewUser["txtSignupName"] !== "" && 
        $asNewUser["emlSignupEmail"] !== "" &&
        $asNewUser["pwdSignupPassword"] !== "" && 
        $asNewUser["pwdSignupPassword"] === $pwdSignupConfPassword ){
      
      if ( saveNewUser( $asNewUser ) ){
         $sResult = "Usuário cadastrado com sucesso!";
      } // if ( saveNewUser( $asNewUser ) ){
      else{
         $sResult = "ERRO! Não foi possível cadastrar o usuário.";
      } // if ( saveNewUser( $asNewUser ) ){ .. else
   } // if ( $asNewUser["txtSignupName"] !== "" && ...
   else{
      $sResult = "ERRO! Dados inválidos!";
   } // if ( $asNewUser["txtSignupName"] !== "" && ... .. else   
} // if ( isset( $_POST["sbmSignup"] ) ){
header( "Location: index.php?msg=$sResult" );