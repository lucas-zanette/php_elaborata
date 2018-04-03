<?php

class HtmlElement{
   
   private $sTag   = "";
   private $bEmpty = false;
   
   private $ahtmChildren = [];
   
   //no java o metodo construtor é o mesmo nome da classe
   function __construct($sTag, $bEmpty = false) {
      $this->sTag   = $sTag;
      $this->bEmpty = $bEmpty;
   }
   
   public function getHtmlCode(){
      $sHtml = "<$this->sTag";
      
      
      
      
      $sHtml .= "</$this->sTag";
      return $sHtml;
   }
   
} //class HtmlElement{

