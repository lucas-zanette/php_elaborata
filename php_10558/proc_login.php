<?php

$txtLoginName     = $_POST["txtLoginName"];
$pwdLoginPassword = $_POST["pwdLoginPassword"];

$sResult = "";
if (runLogin($txtLoginName, $pwdLoginPassword)) {
   $sResult = "Login efetuado com sucesso.";
} else{
   $sResult = "Erro ao efetuar login!";
}

header("Location: index.php?msg=$sResult");
   


function runLogin( $sLogin, $sPassword ){
   $asUsers = [];
   if (file_exists("data/users.json") ) {
      
      $sFileContent = file_get_contents("data/users.json");
      $asUsers = json_decode($sFileContent);
      
      if ( $asUsers != NULL ) {
         foreach ( $asUsers as $oUser ) {
            if ( $oUser->txtCadastroName  === $sLogin || 
                 $oUser->emlCadastroEmail === $sPassword ) {
               return 1;
            }
         }
      } 
      return 0;
   }   
}  //function runLogin