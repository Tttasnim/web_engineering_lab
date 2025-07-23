
<?php
/*
create a book class and add property and 
a function to show the book is available or not, 
also create object that will show the book.
*/

class Book {
    public $title;
    public $author;
    public $year;
    public $available;

    public function __construct($title, $author, $year, $available) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->available = $available;
    }

    public function isAvailable() {
        if ($this->available) {
            return "Available";
        } else {
            return "Not Available";
        }
    }
            }

    $book1 = new Book("The Great Gatsby", " F. Scott Fitzgerald", 1925, true);
    $book2 = new Book( "To Kill a Mockingbird", "Harper Lee", 1920, false);
    $book3 = new Book("The Kite Runner", "Khaled Hosseini", 2003, true);
    $books = [$book1, $book2, $book3];

    echo "booklist is : . <br>";

    /*
    //can also print like that:
    foreach ($books as $book) {
        echo "<li>" . $book->title . " by " . $book->author . " in " . $book->year . " - " .$book->isAvailable() . "</li>";
    }
    */

    foreach($books as $book) {
        echo "Tittle : . $book->title<br>";
        echo "Author : . $book->author<br>";
        echo "Year : . $book->year<br>";
        echo "Status :" . $book->isAvailable(). "<br>";
    }
?>
