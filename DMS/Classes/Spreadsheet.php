<?php
namespace DMS\Classes;
include_once 'DocumentFormats.php';
include_once 'DMS/Interfaces/Readable.php';
include_once 'DMS/Interfaces/Writeable.php';
include_once 'DMS/Interfaces/Customizable.php';
use DMS\Interfaces\Writeable;
use DMS\Interfaces\Readable;
use DMS\Interfaces\Customizable;

class Spreadsheet  extends DocumentFormats implements Readable,Writeable,Customizable{
//implement of read function according to spreadsheet document
public function read()
{
 return $this->content;
}
//implement of write function according to presentation document
public function write($content)
{
$this->content=$content;
}
//implement of save function according to presentation document
public function save()
{
    return "file saved";
}
//implement of changeFont function according to presentation document
public function changeFont($font)
{
    $this->font=$font;
}
//implement of changemargin function according to presentation document
public function changeMargin($margin)
{
    $this->margin=$margin;
}
}

?>