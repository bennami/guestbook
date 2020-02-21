<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class Post{
    Public $Date;
    Public $Title;
    Public $Content;
    Public $GuestName;
    Public $getAll= array();


    function __construct()
    {
            $this->Date = $_POST['Date'];
            $this->Title = $_POST['Title'];
            $this->Content = $_POST['Content'];
            $this->GuestName = $_POST['GuestName'];
    }

 /*   public function getDate()
    {
        return $this->Date;
    }

    public function getGuestName(){
        return $this->GuestName;
    }

    public function getTitle()
    { return $this->Title;
    }

    public function getContent()
    {
        return $this->Content;
    }*/

    public function getAllInfo(){
        array_push($this->getAll,  $this->Date,  $this->Title, $this->Content,  $this->GuestName);
        return $this->getAll;
    }

}