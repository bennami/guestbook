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


    function __construct()
    {
            $this->Date = $_POST['Date'];
            $this->Title = $_POST['Title'];
            $this->Content = $_POST['Content'];
            $this->GuestName = $_POST['GuestName'];
    }



    public function getAllInfo(){
      $this->getAll = [ 'Date'=>$this->Date, 'Title'=> $this->Title, 'Content'=>$this->Content, 'Guest Name'=>$this->GuestName];
      return $this->getAll;
    }

}