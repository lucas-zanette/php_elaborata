<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function runLogin( $sLogin, $sPassword ){
   
   $asUsers = [];
   if ( file_exists( "data/users.json" ) ){
      $sFileContent = file_get_contents( "data/users.json" );
      $asUsers = json_decode( $sFileContent );
      
      if ( $asUsers !== NULL ){
         foreach ( $asUsers as $oUser ){
            if ( $oUser->txtSignupName === $sLogin and
                 $oUser->pwdSignupPassword === $sPassword ){
               return 1;               
            } // if ( $oUser->txtSignupName === $asNewUser["txtSignupName"] ||
         } // foreach ( $asUsers as $oUser ){
      } // if ( $asUsers !== NULL ){
   } // if ( file_exists( "data/users.json" ) ){
   
   return 0; // login falhou
} // function runLogin( $sLogin, $sPassword ){

/*
 * INICIO DO PROCESSO ********** ********** ********** **********
 */
$txtLoginName     = $_POST["txtLoginName"];
$pwdLoginPassword = $_POST["pwdLoginPassword"];

$sResult = "";
if ( runLogin( $txtLoginName, $pwdLoginPassword ) === 1 ){
   session_start();
   $_SESSION["bLogged"]   = true;
   $_SESSION["sUserName"] = $txtLoginName;
   
   $sResult = "Login efetuado com sucesso!";
   $bLogged = true;
}
else{
   $sResult = "Erro ao efetuar login!";
   $bLogged = false;
}

header( "Location: index.php?msg=$sResult" );




