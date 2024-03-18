<?php
namespace DMS\Classes;

include_once 'Document.php';
include_once 'DMS/Interfaces/Readable.php';
include_once 'DMS/Interfaces/Writeable.php';
use DMS\Interfaces\Writeable;
use DMS\Interfaces\Readable;

class TextDocument  extends Document implements Writeable,Readable{
//implement of read function according to text document
public function read()
{
 return $this->content;
}
//implement of write function according to text document
public function write($content)
{
$this->content=$content;
}
//implement of save function according to text document
public function save()
{
    return "file saved";
}
}

?>