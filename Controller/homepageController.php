<?php

class homepageController
{
    function render(){
        //create guest book object and render the json file reverse so last posts come first
        $newObject = new GuestBook();
        $entireThing = array_reverse( $newObject->getJson());
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //once the user submits create array out of the user's input
            //push new user's entry int jsons array and encode it back to a json, this way you can always update json without losing data
            if (isset($_POST['submit'])) {
                $entireThing = $newObject->pushInArray();
                // $arrReverse shows as undefined because controller doesn't know its being used in the view
                $arrReverse = array_reverse($entireThing);
            }
        }
        require 'View/homepage.php';
    }
}