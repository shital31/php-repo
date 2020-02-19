<?php 
class Book{
    var $title;
    var $author;
    var $pages;
} 
 $book1 = new Book;
 $book1 -> title = "harry potter";
 $book1 -> author = "Jk Rowling";
 $book1 -> pages =154522;

 echo $book1 -> author; 
?>