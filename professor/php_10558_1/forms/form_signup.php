<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
</style>

<h3>Formulário de Cadastro</h3>
<div id="divSignup"
     class="form-container">
   <form id="formSignup"
         class="input-form"
         action="proc_signup.php"
         method="GET" >
      <div id="divSignupName"
           class="input-data-group">
         <label id="lblSignupName"
                for="txtSignupName"
                class="input-label">Nome de Login:</label>
         <input id="txtSignupName"
                name="txtSignupName"
                type="text"
                maxlength="30"
                required
                placeholder="digite seu nome de signup"
                class="input-data" />
      </div>
      <div id="divSignupEmail"
           class="input-data-group">
         <label id="lblSignupEmail"
                for="emlSignupEmail"
                class="input-label">e-mail:</label>
         <input id="emlSignupEmail"
                name="emlSignupEmail"
                type="e-mail"
                required
                placeholder="digite seu email"
                class="input-data" />
      </div>
      <div id="divSignupPassword"
           class="input-data-group">
         <label id="lblSignupPassword"
                for="pwdSignupPassword"
                class="input-label">Senha:</label>
         <input id="pwdSignupPassword"
                name="pwdSignupPassword"
                type="password"
                maxlength="30"
                required
                placeholder="digite sua senha de signup"
                class="input-data" />
      </div>
      <div id="divSignupConfPassword"
           class="input-data-group">
         <label id="lblSignupConfPassword"
                for="pwdSignupConfPassword"
                class="input-label">Confirmar Senha:</label>
         <input id="pwdSignupConfPassword"
                name="pwdSignupConfPassword"
                type="password"
                maxlength="30"
                required
                placeholder="confirme sua senha de signup"
                class="input-data" />
      </div>
      <div id="divSignupCommands"
           class="input-command-group">
         <input id="sbmSignup"
                name="sbmSignup"
                type="submit"
                value="Signup"
                class="input-command" />
         <input id="rstSignup"
                name="rstSignup"
                type="reset"
                value="Limpar"
                class="input-command" />
      </div>
   </form>
</div>


















