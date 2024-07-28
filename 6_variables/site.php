<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
   </head>
   <body>

       <?php
        // without any variable,
        // they needed to be manually fixed one by one
        echo "There once was a man named George <br>";
        echo "He was 70 years old <br>";
        echo "He really liked the name George <br>";
        echo "But didn't like being 70 <br>";

        echo "<hr>";

        // with variables
        $name = "George";
        $age = 70;
        echo "There once was a man named $name <br>";
        echo "He was $age years old <br>";
        echo "He really liked the name $name <br>";
        echo "But didn't like being $age <br>";

        echo "<hr>";

        $name = "John";
        $age = 35;
        echo "There once was a man named $name <br>";
        echo "He was $age years old <br>";

        $name = "Tom";
        $age = 80;
        echo "He really liked the name $name <br>";
        echo "But didn't like being $age <br>";
        ?>

   </body>
</html>