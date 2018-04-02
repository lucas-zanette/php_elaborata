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
      <h3>BANCO DE DADOS 02</h3>
      <?php
         $sHost = "localhost";
         $sUser = "root";
         $sPass = "elaborata";
         $sDbNm = "php_10558"; 
         
         $hConn = new mysqli( $sHost, $sUser, $sPass, $sDbNm );
         
         if ( $hConn->connect_errno ){
            echo "<h4 class='db-error'>".$hConn->error."</h4>";
         } // if ( $hConn->connect_errno ){
         else{
            $sqlSelect = "SELECT productid, ProductName, UnitPrice FROM products WHERE SupplierID='7'";
            
            $hQuery = $hConn->query( $sqlSelect );
            
            if ( $hQuery ){
               //$asRecordset = $hQuery->fetch_all();
               
               $htmlResult = "<pre>";
               while ( $asRecord = $hQuery->fetch_assoc() ){
                  $htmlResult .= print_r( $asRecord, true );
               }
               $htmlResult .= "</pre>";
               
               //$htmlResult = "<pre>".print_r( $asRecordset, true )."</pre>";
               echo $htmlResult;
            } // if ( $hQuery ){
            
            $hConn->close();
            
         } // if ( $hConn->connect_errno ){ .. else  
      ?>
   </body>
</html>
