<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
</style>

<h3>Formulário de Login</h3>
<div id="divLogin"
     class="form-container">
   <form id="formLogin"
         class="input-form"
         action="proc_login.php"
         method="GET" >
      <div id="divLoginName"
           class="input-data-group">
         <label id="lblLoginName"
                for="txtLoginName"
                class="input-label">Login:</label>
         <input id="txtLoginName"
                name="txtLoginName"
                type="text"
                maxlength="30"
                required
                placeholder="digite seu nome de login"
                class="input-data" />
      </div>
      <div id="divLoginPassword"
           class="input-data-group">
         <label id="lblLoginPassword"
                for="pwdLoginPassword"
                class="input-label">Senha:</label>
         <input id="pwdLoginPassword"
                name="pwdLoginPassword"
                type="password"
                maxlength="30"
                required
                placeholder="digite sua senha de login"
                class="input-data" />
      </div>
      <div id="divLoginCommands"
           class="input-command-group">
         <input id="sbmLogin"
                name="sbmLogin"
                type="submit"
                value="Login"
                class="input-command" />
         <input id="rstLogin"
                name="rstLogin"
                type="reset"
                value="Limpar"
                class="input-command" />
      </div>
   </form>
</div>

















