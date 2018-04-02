<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$htmResult = "<pre>";

$htmResult .= '<h3>SUPERGLOBAL $_GET</h3>';
$htmResult .= print_r( $_GET, true );

$htmResult .= "<br /><hr />";

$htmResult .= '<h3>SUPERGLOBAL $_POST</h3>';
$htmResult .= print_r( $_POST, true );

$htmResult .= "<br /><hr />";

$htmResult .= '<h3>SUPERGLOBAL $_REQUEST</h3>';
$htmResult .= print_r( $_REQUEST, true );

$htmResult .= "</pre>";

echo $htmResult;