<?php
require 'Model/guestbook.php';
$newObject = new GuestBook();
$entryInfo = $newObject->setEntry();
//var_dump($entryInfo);
$json = $newObject->getJson();
//var_dump($json);
$entireThing = $newObject->pushInArray();
//var_dump($entireThing);
$arrReverse= array_reverse($entireThing);
class controller
{
function render(){


}



}