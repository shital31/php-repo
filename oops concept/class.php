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

 <?php

 
    // writing method in php
    class User{
        public $age;
        public function __construct($age){
            $this->age = $age;
        }
        public function getAge(){
            echo 'Age: ' . $this->age;
            //echo '<br/>'.$id;
        }
    }

    $brad = new User(50);
    $brad->getAge();

 ?>






