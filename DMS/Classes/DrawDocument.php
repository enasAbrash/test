<?php
namespace DMS\Classes;

include_once 'Document.php';
include_once 'DMS/Interfaces/Drawable.php';
include_once 'DMS/Interfaces/Readable.php';
use DMS\Interfaces\Drawable;
use DMS\Interfaces\Readable;

class DrawDocument extends Document implements Drawable,Readable{
//implement of draw function according to draw document 
 public function draw($content)
 {
    $this->content=$content;
 }
 //implement of read function according to draw document
 public function read()
{
 return $this->content;
}


}

?>