<?php
namespace DMS\Classes;

 class Document{
   public $name;
   public $content;

   // return name of document
   public function getName()
   {
       return $this->name;
   }
   // set name of document
   public function setName($name)
   {
       $this->name=$name;
   }
   // get content of document
   public function getContent()
   {
       return $this->content;
   }
   // set content of document
   public function setContent($content)
   {
       $this->content=$content;
   }
 }


?>