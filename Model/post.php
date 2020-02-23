<?php




class Post{
    Private $Date;
    Private $Title;
    Private $Content;
    Private $GuestName;

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

}