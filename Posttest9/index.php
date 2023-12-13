<?php

require 'anggota.php';
require 'buku.php';
require 'perpus.php';

// Membuat objek member
$member1 = new Member(1, 'Kakang');
$member2 = new Member(2, 'Kaka');

// Membuat objek buku
$book1 = new Book(1, 'The Catcher in the Rye', 'J.D. Salinger');
$book2 = new Book(2, 'To Kill a Mockingbird', 'Harper Lee');

// Membuat objek perpustakaan
$library = new Library();

// Menambahkan member dan buku ke perpustakaan
$library->addMember($member1);
$library->addMember($member2);
$library->addBook($book1);
$library->addBook($book2);

// Member 1 meminjam buku 1
$library->borrowBook(1, 1);

// Menampilkan buku yang dipinjam oleh Member 1
echo "Buku yang dipinjam oleh Member 1: ";
foreach ($member1->getBorrowedBooks() as $borrowedBook) {
    echo $borrowedBook->getTitle() . ', ';
}

// Member 1 mengembalikan buku 1
$library->returnBook(1, 1);

// Menampilkan buku yang dipinjam oleh Member 1 setelah mengembalikan
echo "\nBuku yang dipinjam oleh Member 1 setelah mengembalikan: ";
foreach ($member1->getBorrowedBooks() as $borrowedBook) {
    echo $borrowedBook->getTitle() . ', ';
}

?>
