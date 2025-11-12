<?php
    function getBooks() {
        $books = json_decode(file_get_contents(__DIR__.'/../db/books.json'), true);
        
        //Returns Books Array
        return $books;
    }


?>