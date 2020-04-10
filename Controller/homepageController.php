<?php

class homepageController
{
    function render(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //once the user submits
            if (isset($_POST['submit'])) {
                //create new object, this will be empty,
                $newObject = new GuestBook();

                //this function converts json into std class and then into array
                $json = $newObject->getJson();

                //this function will set the entry with the info of $_POST and push it into array
                $entryInfo = $newObject->makeAssoc();

                //this function pushes array of json and entry user into array, inside i use $this->makeObject to make an
                $entireThing = $newObject->pushInArray();

            }
            //reverse array to show last entries first, it  shows as an unused variable, but its just because  controller doesnt know that it is being used in the view
           $arrReverse = array_reverse($entireThing);
        }
        require 'View/homepage.php';
    }

}