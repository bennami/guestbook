<?php

require 'Model/post.php';
class GuestBook
{
    private $entry;
    private $allPosts=[];

    function setEntry(){
        $this->entry = new Post(htmlspecialchars($_POST['Date']),htmlspecialchars($_POST['Title']),htmlspecialchars($_POST['Content']),htmlspecialchars($_POST['GuestName']));
        return $this->entry;
    }

    function makeAssoc(){
        $assocArray = $this->setEntry();
        $assocArray = [ 'Date'=>$assocArray->getDate(), 'Title'=> $assocArray->getTitle(), 'Content'=>$assocArray->getContent(), 'Guest Name'=>$assocArray->getName()];
        $this->entry = $assocArray;
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
        array_push($this->allPosts, $this->makeAssoc());
        file_put_contents('JSON/entries.json', json_encode($this->allPosts, JSON_PRETTY_PRINT));
        return $this->allPosts;
    }

}
