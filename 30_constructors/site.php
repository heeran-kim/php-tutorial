<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
   </head>
   <body>
       <?php
            class Book{
                var $title;
                var $author;
                var $pages;

                function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
            }

            $books = [];
            $books[] = new Book("Harry Potter", "JK Rowling", 400);
            $books[] = new Book("Lord Of the Rings", "Tolkien", 700);

            foreach ($books as $book) {
                echo "$book->title" . "<br>";
                echo "$book->author" . "<br>";
                echo "$book->pages" . "<br>";
                echo "<hr>";
            }
        ?>
   </body>
</html>