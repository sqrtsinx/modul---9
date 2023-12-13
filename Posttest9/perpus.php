<?php

class Library
{
    private $members = [];
    private $books = [];

    public function addMember($member)
    {
        $this->members[$member->getId()] = $member;
    }

    public function addBook($book)
    {
        $this->books[$book->getId()] = $book;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function getBooks()
    {
        return $this->books;
    }

    public function borrowBook($memberId, $bookId)
    {
        $member = $this->members[$memberId];
        $book = $this->books[$bookId];

        if ($member && $book && $book->isAvailable()) {
            $member->borrowBook($book);
            $book->borrow();
            return true;
        }

        return false;
    }

    public function returnBook($memberId, $bookId)
    {
        $member = $this->members[$memberId];
        $book = $this->books[$bookId];

        if ($member && $book) {
            $member->returnBook($book);
            $book->returnBook();
            return true;
        }

        return false;
    }
}
?>
