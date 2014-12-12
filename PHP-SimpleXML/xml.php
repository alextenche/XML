<?php

$x = simplexml_load_file('bookstore.xml');

foreach($x->book as $book){
	echo "Book title: " . $book->title . "<br>";
	echo "Author: " . $book->author . "<br>";
	echo "Year: " . $book->year . "<br>";
	echo "Price: " . $book->price . "<br>";
	echo "<hr>";
}

?>