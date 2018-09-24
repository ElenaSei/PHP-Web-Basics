<?php
include "Book.php";
include "GoldenEditionBook.php";

$author = readline();
$title = readline();
$price = readline();
$type = readline();

try{
    if ($type == "STANDARD"){
        $book = new Book($title, $author, $price);
    }elseif ($type == "GOLD"){
        $book = new GoldenEditionBook($title, $author, $price);
    }else{
        throw new Exception('Type is not valid!');
    }

    echo "OK\n";
    echo $book->getPrice();
}
catch (Exception $e){
    echo $e->getMessage();
}