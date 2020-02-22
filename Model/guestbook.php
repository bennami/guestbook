<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");

error_reporting(E_ALL);
require 'Model/post.php';
class GuestBook extends Post
{
    //entry is object of post, all posts the array of json and
    private $entry;
    private $allPosts=[];

    function __construct()
    {
        parent::__construct($_POST['Date'],$_POST['Title'],$_POST['Content'],$_POST['GuestName']);

    }

    function setEntry()
    {
        $this->entry = new Post($_POST['Date'],$_POST['Title'],$_POST['Content'],$_POST['GuestName']);
        return $this->entry;
    }

    function makeObject(){
        $object=$this->setEntry();
        $object= [ 'Date'=>$object->getDate(), 'Title'=> $object->getTitle(), 'Content'=>$object->getContent(), 'Guest Name'=>$object->getName()];
        $this->entry = $object;
        return $this->entry;
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
    array_push($this->allPosts, $this->makeObject());
    file_put_contents('JSON/entries.json', json_encode($this->allPosts, JSON_PRETTY_PRINT));
    return $this->allPosts;

}


}







