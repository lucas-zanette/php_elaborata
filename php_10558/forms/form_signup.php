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
      method="GET">

      <div id="divCadastroEmail">
         <label id="lblCadastroLogin">Login:</label>
         <input id="txtCadastroLogin"
                name="lblCadastroLogin"
                type="text"
                maxlength="50"
                size="50"
                required
                placeholder="digite seu login"
                <br>
      </div>

      <label id="lblCadastroEmail">Email:</label>
      <input id="txtCadastroEmail"
             name="lblCadastroEmail"
             type="text"
             maxlength="50"
             size="50"
             required
             placeholder="digite seu email"
             <br>
      </div>

      <div id="divCadastroSenha">
         <label id="lblCadastroSenha">Senha:</label>
         <input id="txtCadastroSenha"
                name="lblCadastroSenha"
                type="password"
                maxlength="50"
                size="50"
                required
                placeholder="digite sua senha"
                <br>
      </div>
      <div id="rstCadastro">
         <input id="sbmCadastro" 
                name="smbCadastro" 
                type="submit" 
                value="Salvar"/>

         <input id="rstCadastro" 
                name="rstCadastro" 
                type="reset" 
                value="Limpar"/>

      </div>

   </form>

</div>

