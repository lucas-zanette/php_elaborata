<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<h3>Formulario de Login</h3>

<div id="divLogin">

   <form 
      id="formLogin" 
      class="" 
      action="proc_login.php" 
      method="GET">   

      <div id="divLoginName">
         <label id="lblLoginName">Login:</label>
         <input id="txtLoginName" 
                name="lblLoginName" 
                type="text" 
                maxlength="30" 
                required 
                placeholder="digite seu nome de login">
         <br>
      </div>

      <div id="divLoginPassword">
         <label id="lblLoginPassword">Senha:</label>
         <input id="pwdLoginPassword" 
                name="pwdLoginPassword" 
                type="password" 
                maxlength="30" 
                required 
                placeholder="digite sua senha de login">
         <br>
      </div>
      
      <div id="rstLogin">
         <input id="sbmLogin" 
                name="smbLogin" 
                type="submit" 
                value="Entrar"/>

         <input id="rstLogin" 
                name="rstLogin" 
                type="reset" 
                value="Limpar"/>
      </div>
   
   </form> 

</div>
