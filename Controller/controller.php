<?php
require 'Model/guestbook.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //once the user submits
    if(isset($_POST['submit'])){
        //create new object, this will be empty,
        $newObject = new GuestBook();

        //this function converts json into std class and then into array
        $json = $newObject->getJson();

        //this function will set the entry with the info of $_POST
        $entryInfo = $newObject->setEntry();

        //this function pushes array of json and entry user into array, inside i use $this->makeObject to make an
        $entireThing = $newObject->pushInArray();

    }

    //reverse array to show last entries first
    $arrReverse= array_reverse($entireThing);
}

class controller
{
function render(){


}



}