<?php

    class Book{
        public $title;
        public $author;
     public function getDetails(){
        return $this->title .$this->author;
     }
    }

    $book1 = new Book();

    $book1->title = "vimal leelai";
    $book1->author="vimala hasan";

    echo $book1->getDetails();
