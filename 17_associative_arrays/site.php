<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
   </head>
   <body>
       <form action="site.php" method="post">
           Name: <input typ="text" name="student">
           <input type="submit">
       </form>

       <?php
        // Associative arrays stores key-value pairs
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        echo "{$grades["Jim"]}<br>";
        // modify it
        $grades["Jim"] = "F";
        echo "{$grades["Jim"]}<br>";
        echo "{$grades["Pam"]}<br>";
        echo "{$grades["Oscar"]}<br>";
        // count
        echo count($grades)."<br>";
        // get key value from the server
        echo $grades[$_POST["student"]];
        ?>

   </body>
</html>