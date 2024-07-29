<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
   </head>
   <body>

       <?php
       // HTML code
        $title = "My First Post";
        $author = "Lani";
        $wordCount = 400;
        include "article-header.php";

        echo "<hr>";

        // variables, functions
        include "useful-tools.php";
        sayHi("Lani");
        echo "<br>".$feetInMile;
        ?>

   </body>
</html>