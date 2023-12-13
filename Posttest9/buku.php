<?php

class Book
{
    private $id;
    private $title;
    private $author;
    private $isAvailable = true;

    public function __construct($id, $title, $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function isAvailable()
    {
        return $this->isAvailable;
    }

    public function borrow()
    {
        $this->isAvailable = false;
    }

    public function returnBook()
    {
        $this->isAvailable = true;
    }
}
?>
