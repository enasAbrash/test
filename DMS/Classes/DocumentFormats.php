<?php
namespace DMS\Classes;

include_once 'Document.php';

class DocumentFormats extends Document{
public $font;
public $margin;

    // get font of document
   public function getFont()
   {
       return $this->font;
   }
   // set font of document
   public function setFont($font)
   {
       $this->font=$font;
   }
   // get margin of document
   public function getMargin()
   {
       return $this->margin;
   }
   //set margin of document
   public function setMargin($margin)
   {
       $this->margin=$margin;
   }

}

?>