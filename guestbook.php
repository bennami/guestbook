<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");

error_reporting(E_ALL);
require 'post.php';
class GuestBook extends Post
{
    //entry is object of post, the json is json file, all posts is where i put the user input to add to json
    private $entry;
    private $theJson;
    private $allPosts=[];


    function __construct()
    {
     parent::__construct($date,$title,$content,$name);
     $this->entry = new Post($date,$title,$content,$name);
    }

    //get json, decode it and put it in property
    public function getJson(){
        $current_data = file_get_contents('entries.json');
        $data_json = json_decode($current_data);
        foreach ($data_json as $toPost)
        {
            $post = new Post($toPost->Date,$toPost->Title, $toPost->Content, $toPost->GuestName);
            array_push($this->allPosts, $post);
        }
        $this->allPosts = $data_json;
        return $this->allPosts;
    }

    //push object u get from user into entry to add in json
    public function pushInArray(){
    array_push($this->allPosts, $this->entry->getAllInfo());
    file_put_contents('entries.json', json_encode($this->allPosts, JSON_PRETTY_PRINT));
    return $this->allPosts;

}


}

$entryUser = new GuestBook();
$entryInfo = $entryUser->getAllInfo($_POST['Date'],$_POST['Title'],$_POST['Content'],$_POST['GuestName']);
$entryUser->getJson();
$entireThing = $entryUser->pushInArray();
var_dump($entireThing);
var_dump($entryUser->getJson());




