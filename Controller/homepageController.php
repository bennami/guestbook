<?php

class homepageController
{
    function render(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //once the user submits, create Guest book object and run its methods to create an array out of the user's input
            //get contents of json and decode into array
            //push new user's entry int jsons array and encode it back to a json, this way you can always update json without losing data
            if (isset($_POST['submit'])) {
                $newObject = new GuestBook();
                $newObject->makeAssoc();
                $newObject->getJson();
                $entireThing = $newObject->pushInArray();

                // $arrReverse shows as undefined because controller doesn't know its being used in the view
                $arrReverse = array_reverse($entireThing);
            }
        }
        require 'View/homepage.php';
    }
}