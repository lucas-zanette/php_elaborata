<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<h3>Formulario de Contact</h3>

<div id="divContact">

   <form
      id="formContact"
      class=""
      action="proc_contact.php"
      method="GET">

      <div id="divContactEmail">
         <label id="lblContactEmail">Email:</label><br />
         <input id="txtContactEmail"
                name="lblContactEmail"
                type="email"
                maxlength="50"
                size="50"
                required
                placeholder="digite seu email" />
                <br />
      </div>

      <div id="divContactName">
         <label id="lblContactName">Nome:</label><br />
         <input id="txtContactName"
                name="lblContactName"
                type="text"
                maxlength="100"
                size="100"
                required
                placeholder="digite seu nome" />
                <br />
      </div>

      <div id="divContactEndereco">
         <label id="lblContactEndereco">Endereço:</label><br />
         <input id="txtContactEndereco"
                name="lblContactEndereco"
                type="text"
                maxlength="100"
                size="100"
                required
                placeholder="digite seu endereço" />
                <br />
      </div>

      <div id="divContactTelefone">
         <label id="lblContactTelefone">Telefone:</label><br />
         <input id="txtContactTelefone"
                name="lblContactTelefone"
                type="text"
                maxlength="20"
                size="20"
                required
                placeholder="digite seu telefone" />
                <br />
      </div>
      <div id="rstContact">
         <input id="sbmContact" 
                name="smbLogin" 
                type="submit" 
                value="Salvar"/>

         <input id="rstContact" 
                name="rstLogin" 
                type="reset" 
                value="Limpar"/>

         <br />
      </div>

   </form>

</div>

