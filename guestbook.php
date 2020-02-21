<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");

error_reporting(E_ALL);
require 'post.php';
class Guestbook extends Post
{
    private $entry;


    function __construct()
    {
     parent::__construct();
     $this->entry = new Post();
    }

   public function getObjectInJson($entry){
        file_put_contents('entries.json',$entry);
        echo 'done';
    }

}

$entryUser = new Guestbook();
$entryInfo = $entryUser->getAllInfo();
var_dump($entryInfo);

if(isset($entryUser)){
    //json_decode('entries.json');
   $entryForJson = json_encode($entryInfo);
    $object = json_decode(json_encode($entryForJson), FALSE);

   var_dump($object);
    $entryUser->getObjectInJson($object);
}

