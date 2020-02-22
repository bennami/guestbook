<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");

error_reporting(E_ALL);
require 'Model/post.php';
class GuestBook extends Post
{
    //entry is object of post, the json is json file, all posts is where i put the user input to add to json
    private $entry;
    private $theJson;
    private $allPosts=[];


    function __construct()
    {
     parent::__construct();
     $this->entry = new Post();
    }

    //get json, decode it and put it in property
    public function getJson(){
        $current_data = file_get_contents('JSON/entries.json');
        $data_json = json_decode($current_data);

        //data_json is still an std class object, need to convert into array
        $this->allPosts = json_decode(json_encode($data_json), True);
        return $this->allPosts;
    }

    //push object u get from user into entry to add in json
    public function pushInArray(){
    array_push($this->allPosts, $this->entry->getAllInfo());
    file_put_contents('JSON/entries.json', json_encode($this->allPosts, JSON_PRETTY_PRINT));
    return $this->allPosts;

}


}

$entryUser = new GuestBook();
$entryInfo = $entryUser->getAllInfo();
$entryUser->getJson();
$entireThing = $entryUser->pushInArray();
var_dump($entireThing);
var_dump($entryUser->getJson());




