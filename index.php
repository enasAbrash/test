<?php


include 'DMS/Classes/TextDocument.php';
include 'DMS/Classes/Spreadsheet.php';
include 'DMS/Classes/Presentation.php';
include  'DMS/Classes/DrawDocument.php';
include_once 'DMS/Interfaces/Writeable.php';

use DMS\Classes\TextDocument;
use DMS\Classes\Spreadsheet;
use DMS\Classes\Presentation;
use DMS\Classes\DrawDocument;
use DMS\Interfaces\Writeable;



$text=new TextDocument();
$text->setName("textDoc");
echo "Name of file"." ". $text->getName(). "<br>";
$text->write("text document content .....");
echo $text->read() ."<br>";
///////////////////////////////////////
echo "*************************************<br>";

$spreadsheet=new Spreadsheet();
$spreadsheet->setName("spreadsheet");
echo "Name of file"." " . $spreadsheet->getName(). "<br>";
$spreadsheet->write("spreadsheet document content");
echo $spreadsheet->read()."<br>";
$spreadsheet->changeFont(16);
echo "change font"." ". $spreadsheet->getFont() ."<br>";
$spreadsheet->changeMargin(4);
echo "change margin"." ". $spreadsheet->getMargin() ."<br>";

////////////////////////////////////////
echo "*************************************<br>";

$presentation=new Presentation();
$presentation->setName("presentation");
echo "Name of file"." " . $presentation->getName(). "<br>";
$presentation->write("presentation document content");
echo $presentation->read()."<br>";
$presentation->changeFont(20);
echo "change font"." ".$presentation->getFont()."<br>";
$presentation->changeMargin(6);
echo "change margin"." ".$presentation->getMargin()."<br>";

////////////////////////////////////////
echo "*************************************<br>";
$draw=new DrawDocument();
$draw->setName("drawDoc");
echo "Name of file"." ". $draw->getName(). "<br>";
$draw->draw("draw document content .....");
echo $draw->read() ."<br>";

////////////////////////////////////////
echo "*************************************<br>";

//Showcase Interface Interaction
function interface_interact(Writeable $writeable,$str)
{
    $writeable->write("inteface interact ".$str);
    echo $writeable->read()."<br>";
}

interface_interact($text,"text doc");
interface_interact($presentation,"spreadsheet");


?>