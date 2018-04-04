<?php

class HtmlElement {

   private $sTag = "";
   private $bEmpty = false;
   private $ahtmChildren = [];
   private $sText = "";
   private $asAttributes = [];

   //no java o metodo construtor é o mesmo nome da classe
   function __construct($sTag, $bEmpty = false) {
      $this->sTag = $sTag;
      $this->bEmpty = $bEmpty;
   }

   public function addChild(HtmlElement $htmElement) {
      $this->ahtmChildren[] = $htmElement;
   }

   public function setText(string $sText) {
      $this->sText = $sText;
   }

   public function setAttribute(string $sAttribute, string $sValue) {
      $this->asAttributes[$sAttribute] = $sValue;
   }

   public function getHtmlCode() {
      $sHtml = "<$this->sTag";

      if ( count( $this->asAttributes ) > 0 ) {
         foreach ( $this->asAttributes as $sAttribute => $sValue ) {
            $sHtml .= " $sAttribute=\"$sValue\"";
         }
      }
      
      if ( $this->bEmpty ) {
         $sHtml .= " />";
      } else {
         $sHtml .= " >";
         
         if ( count( $this->ahtmChildren ) > 0 ) {
            foreach ( $this->ahtmChildren as $htmChild ) {
               $sHtml .= $htmChild->getHtmlCode();
            }                   
                    
         } else {
            $sHtml .= $this->sText;
            
         }
         
         $sHtml .= "</$this->sTag>";
      }
   
      return $sHtml;
   }

}

class HtmlInput extends HtmlElement {
 
   public function __construct( $sId, $sType, $sValue="" ) {
      parent::__construct( "input", true );
      
      $this->setAttribute( "id", $sId );
      $this->setAttribute( "name", $sId );
      $this->setAttribute( "type", $sType );
      $this->setAttribute( "value", $sValue );
      
   } //function __construct()
   
   public function setAttributes( array $asAttributes ) {
      foreach ( $asAttributes as $sAttribute => $sValue ) {
         $this->setAttribute($sAttribute, $sValue);
      }
   }
   
} //class HtmlInput extends HtmlElement