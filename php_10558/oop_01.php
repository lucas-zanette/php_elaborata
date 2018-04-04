<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->   

<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>      
      <?php
         require_once 'classes/classHtmlElement.php';

         $divWrapper = new HtmlElement("div");
         $divWrapper->setAttribute("id", "divWrapper");

            $formEmail = new HtmlElement("form");
            $formEmail->setAttribute("id", "formemail");
            $formEmail->setAttribute("action", "send_email.php");
            $formEmail->setAttribute("method", "post");
            $formEmail->setAttribute( "class", "input-form");

               $br = new HtmlElement( "br", true ) ;               
               $lblTo = new HtmlElement( "label" );
               $lblTo->setText("Para:");
               
               $emlTo = new HtmlElement( "input", true );
               $emlTo->setAttribute( "id", "emlTo" );
               $emlTo->setAttribute( "name", "emlTo" );
               $emlTo->setAttribute( "type", "email" );
               $emlTo->setAttribute( "required", "true" );
               $emlTo->setAttribute( "placeholder", "digite o email de destino." );               
               
            $formEmail->addChild( $lblTo);
            $formEmail->addChild( $br);
            $formEmail->addChild( $emlTo);
            $formEmail->addChild( $br);
                           

               $br = new HtmlElement( "br", true ) ;
               
               $lblSubject = new HtmlElement( "label" );
               $lblSubject->setText("Assunto:");               
            
               $txtSubject = new HtmlElement( "input", true );
               $txtSubject->setAttribute( "id", "txtsubject" );
               $txtSubject->setAttribute( "name", "txtsubject" );
               $txtSubject->setAttribute( "type", "text" );
               $txtSubject->setAttribute( "required", "true" );
               $txtSubject->setAttribute( "placeholder", "digite o assunto do email." );
               
            $formEmail->addChild( $lblSubject);
            $formEmail->addChild( $br);
            $formEmail->addChild( $txtSubject);
            $formEmail->addChild( $br);                          

               $lblMessage = new HtmlElement( "label");
               $lblMessage->setText("Mensagem:");
               
               $txtMessage = new HtmlElement( "textarea" );
               $txtMessage->setAttribute( "id", "txtMessage" );
               $txtMessage->setAttribute( "name", "txtsubject" );
               $txtMessage->setAttribute( "rows", "8" );
               $txtMessage->setAttribute( "cols", "40" );
               $txtMessage->setAttribute( "placeholder", "digite o corpo do email." );         
               
            $formEmail->addChild( $lblMessage);
            $formEmail->addChild( $br);
            $formEmail->addChild( $txtMessage);
            $formEmail->addChild( $br);

               $sbmSend = new HtmlElement( "input", true );
               $sbmSend->setAttribute( "id", "sbmSend" );
               $sbmSend->setAttribute( "name", "sbmSend" );
               $sbmSend->setAttribute( "type", "submit" );
               $sbmSend->setAttribute( "value", "Enviar" );
               
            $formEmail->addChild( $sbmSend );

         $divWrapper->addChild( $formEmail );
         
         echo $divWrapper->getHtmlCode();
      ?>
   </body>
</html>