<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

verificaCadastro();


echo $htmResult;



function verificaCadastro() {
   //procura nos arquivos para ver se existe algum já pre cadastrado
   //se não estiver pre cadastrado grava num novo arquivo
   //se tiver pre cadastrado mostra mensagem de erro
   //   usuario senha

//   localizar a pasta
   $usuario = glob("{*.txt}", GLOB_BRACE);
   foreach($usuario as $item) 
      echo $item;
      



   foreach ($sLoginItens as $sLoginItem) {

   $asItem = $sLogin = $sItem[0];
   $sLogin = $sItem[1];


   $htmMenu .= "<li><a href=\"$sHref\" target=\"$sTarget\">$sCaption</a></li>";
   }


   $asMarcas = ["Honda", "Renault", "Ford", "Chevrolet", "Fiat"];
   echo "<p> $asMarcas[1] </p>";


   $iCount = count($asMarcas);
   for ($i = 0;
   $i < $iCount;
   $i++) {
   echo "<p>$asMarcas[$i]</p>";
   }

   foreach ($Login as $sLogin) {
   echo "<p>$sItem</p>";
   }


   echo file_put_contents("test.txt", "Hello World. Testing!");

   echo file_get_contents("test.txt");

  
   validarSenha();
}

function validarSenha(){
//   if 
//senha ok
   cadastrarUsuario();
}

function cadastrarUsuario(){
   //campos
   //login
   //email
   //senha
   //nivel de acesso
   //datahora criacao   

}
?>