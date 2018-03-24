<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function runLogin( $sLogin, $sPassword ){
   
   if ( $sLogin === "" && $sPassword === "123" ){
      return 1;
   } // if ( $sLogin === "" && $sPassword === "123" ){
   
   return 0; // login falhou
} // function runLogin( $sLogin, $sPassword ){



$txtLoginName     = $_POST["txtLoginName"];
$pwdLoginPassword = $_POST["pwdLoginPassword"];

if ( runLogin( $txtLoginName, $pwdLoginPassword ) ){
   
}
else{
   
}