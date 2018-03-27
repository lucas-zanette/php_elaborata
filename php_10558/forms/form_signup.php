<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<h3>Formulario de Cadastro</h3>

<div id="divCadastro">

   <form
      id="formCadastro"
      class=""
      action="proc_cadastro.php"
      method="POST">

      <div id="divCadastroEmail">
         <label id="lblCadastroLogin">Nome de Login:</label>
         <input id="txtCadastroName"
                name="txtCadastroName"
                type="text"
                maxlength="50"
                size="50"
                required
                placeholder="digite seu login"
                <br>
      </div>

      <label id="lblCadastroEmail">e-mail:</label>
      <input id="emlCadastroEmail"
             name="emlCadastroEmail"
             type="text"
             maxlength="50"
             size="50"
             required
             placeholder="digite seu email"
             <br>
      </div>

      <div id="divCadastroSenha">
         <label id="lblCadastroSenha">Senha:</label>
         <input id="pwdCadastroPassword"
                name="pwdCadastroPassword"
                type="password"
                maxlength="50"
                size="50"
                required
                placeholder="digite sua senha"
                <br>
      </div>

      <div id="divCadastroRepSenha">
         <label id="lblCadastroRepSenha">Confirmar senha:</label>
         <input id="pwdCadastroConfPassword"
                name="pwdCadastroConfPassword"
                type="password"
                maxlength="50"
                size="50"
                required
                placeholder="confirme sua senha"
                <br>
      </div>

      <div id="rstCadastro">
         <input id="sbmCadastro" 
                name="sbmCadastro" 
                type="submit" 
                value="Salvar"/>

         <input id="rstCadastro" 
                name="rstCadastro" 
                type="reset" 
                value="Limpar"/>

      </div>

   </form>

</div>

