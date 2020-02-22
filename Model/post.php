<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class Post{
    Private $Date;
    Private $Title;
    Private $Content;
    Private $GuestName;
    Private $getAll= Array();


    function __construct($Date,$Title,$Content,$GuestName)
    {
            $this->Date = $Date;
            $this->Title =$Title ;
            $this->Content = $Content;
            $this->GuestName = $GuestName;
    }

    // Getters
    public function getDate()  {
        return $this->Date;
    }
    public function getTitle()  {
        return $this->Title;
    }
    public function getContent() {
        return $this->Content;
    }
    public function getName() {
        return $this->GuestName;
    }

    /*//set info into associative array
    public function getAllInfo(){
      $this->getAll = [ 'Date'=>$this->Date, 'Title'=> $this->Title, 'Content'=>$this->Content, 'Guest Name'=>$this->GuestName];
      return $this->getAll;
    }*/

}