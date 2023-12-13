<?php

class Member
{
    private $id;
    private $name;
    private $books = [];

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function borrowBook($book)
    {
        $this->books[] = $book;
    }

    public function returnBook($book)
    {
        $key = array_search($book, $this->books);
        if ($key !== false) {
            unset($this->books[$key]);
        }
    }

    public function getBorrowedBooks()
    {
        return $this->books;
    }
}
?>
