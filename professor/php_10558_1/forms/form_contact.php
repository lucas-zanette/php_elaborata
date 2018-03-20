<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
</style>

<h3>Formulário de Contato</h3>
<div id="divContact"
     class="form-container">
   <form id="formContact"
         class="input-form"
         action="proc_contact.php"
         method="GET" >
      <div id="divContactName"
           class="input-data-group">
         <label id="lblContactName"
                for="txtContactName"
                class="input-label">Nome:</label>
         <input id="txtContactName"
                name="txtContactName"
                type="text"
                maxlength="30"
                required
                placeholder="digite seu nome de contact"
                class="input-data" />
      </div>
      <div id="divContactEmail"
           class="input-data-group">
         <label id="lblContactEmail"
                for="emlContactEmail"
                class="input-label">e-mail:</label>
         <input id="emlContactEmail"
                name="emlContactEmail"
                type="e-mail"
                required
                placeholder="digite seu email de contato"
                class="input-data" />
      </div>
      <div id="divContactMessage"
           class="input-data-group">
         <label id="lblContactMessage"
                for="txaContactMessage"
                class="input-label">Mensagem:</label>
         <textarea id="txaContactMessage"
                   name="txaContactMessage"
                   rows="5"
                   cols="32"
                   class="input-data"></textarea>
      </div>
      <div id="divContactCommands"
           class="input-command-group">
         <input id="sbmContact"
                name="sbmContact"
                type="submit"
                value="Enviar"
                class="input-command" />
         <input id="rstContact"
                name="rstContact"
                type="reset"
                value="Limpar"
                class="input-command" />
      </div>
   </form>
</div>



















