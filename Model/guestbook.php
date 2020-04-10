<?php
class GuestBook
{
    private $entry;
    private $allPosts=[];

    function setEntry(){
      return  $this->entry = new Post(htmlspecialchars($_POST['Date']),htmlspecialchars($_POST['Title']),htmlspecialchars($_POST['Content']),htmlspecialchars($_POST['GuestName']));
    }

    function makeAssoc(){
        //create new  object of entry
        $assocArray = $this->setEntry();

        //use object to make assoc Array
        $assocArray = [ 'Date'=>$assocArray->getDate(), 'Title'=> $assocArray->getTitle(), 'Content'=>$assocArray->getContent(), 'Guest Name'=>$assocArray->getName()];
        return $this->entry = $assocArray;
    }

    //get json, decode it, if you don't set it  to true you wont get an assoc array, instead it will be an stdClass
    public function getJson(){
        $current_data =file_get_contents('JSON/entries.json');
        $data_json = json_decode($current_data,true);
        $this->allPosts = $data_json;
        return $this->allPosts;
    }

    //push  new entry in  allPosts and put it back into json file
    public function pushInArray(){
        array_push($this->allPosts, $this->makeAssoc());
        file_put_contents('JSON/entries.json', json_encode($this->allPosts, JSON_PRETTY_PRINT));
        return $this->allPosts;
    }
}
