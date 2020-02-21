<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");

error_reporting(E_ALL);
require 'post.php';
class Guestbook
{
    public $entry;

    function __construct()
    {
        $this->entry = new Post();
    }

   public function getObjectInJson($entry){
        file_put_contents('entries.json',$entry, FILE_APPEND);
        echo 'done';
    }

}

$entryUser = new guestbook();
if(isset($entryUser)){
    //json_decode('entries.json');
   $entryyy = json_encode($entryUser);
   var_dump($entryyy);
    $entryUser->getObjectInJson($entryyy);
}

