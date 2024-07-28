<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
   </head>
   <body>
       <form action="site.php" method="post">
           Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
           Bananas: <input type="checkbox" name="fruits[]" value="bananas"><br>
           Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
           <input type="submit">
       </form>

       <?php
        $fruits = $_POST["fruits"];
        echo "$fruits[0]<br>";
        echo "$fruits[1]<br>";
        echo "$fruits[2]<br>";
        ?>

   </body>
</html>