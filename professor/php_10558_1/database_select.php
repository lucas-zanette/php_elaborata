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
      
      <style>
         .db-error{
            color: #f05555;
         }
      </style>
   </head>
   <body>
      <h3>BANCO DE DADOS 01</h3>
      <?php
         $sHost = "localhost";
         $sUser = "root";
         $sPass = "elaborata";
         $sDbNm = "php_10558";      
      
         // PROCEDURAL ********** ********** ********** **********
         // 1- ESTABELECER CONEXÃO
         $hConn = @mysqli_connect( $sHost, $sUser, $sPass, $sDbNm );
         
         if ( !$hConn ){
         //if ( mysqli_connect_errno() ){
            echo "<h4 class='db-error'>".mysqli_connect_error()."</h4>";
         } // if ( mysqli_connect_errno() ){
         else{
            // 2- OPERAÇÕES
            $sqlSelect = "SELECT * FROM products";
            
            $hQuery = mysqli_query( $hConn, $sqlSelect );
            
            if ( $hQuery ){
               $asRecordset = mysqli_fetch_all( $hQuery, MYSQLI_ASSOC );
               
               $htmlResult = "<pre>".print_r( $asRecordset, true )."</pre>";
               echo $htmlResult;
               
            } // if ( $hQuery ){

            // 3- FECHAR CONEXÃO
            mysqli_close( $hConn );
         } // if ( mysqli_connect_errno() ){ .. else
      
      
         // ORIENTADO A OBJETOS
         $hConn = new mysqli( $sHost, $sUser, $sPass, $sDbNm );
         
         if ( $hConn->connect_errno ){
            echo "<h4 class='db-error'>".$hConn->error."</h4>";
         } // if ( $hConn->connect_errno ){
         else{
            $sqlSelect = "SELECT * FROM suppliers";
            
            $hQuery = $hConn->query( $sqlSelect );
            
            if ( $hQuery ){
               $asRecordset = $hQuery->fetch_all();
               
               $htmlResult = "<pre>".print_r( $asRecordset, true )."</pre>";
               echo $htmlResult;
            } // if ( $hQuery ){
            
            $hConn->close();
            
         } // if ( $hConn->connect_errno ){ .. else      
      
      ?>
   </body>
</html>
