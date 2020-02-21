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


    function __construct($date,$title,$content,$name)
    {
            $this->Date = $date;
            $this->Title = $title;
            $this->Content = $content;
            $this->GuestName = $name;
    }

    public function getAllInfo(){
      $this->getAll = [ 'Date'=>$this->Date, 'Title'=> $this->Title, 'Content'=>$this->Content, 'Guest Name'=>$this->GuestName];
      return $this->getAll;
    }

}