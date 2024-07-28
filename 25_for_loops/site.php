<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
   </head>
   <body>

       <?php
       // for
        for ($i = 0; $i <= 5; $i++) {
            echo "$i <br>";
        }

        echo "<hr>";

        // array + for
        $elements = array(48, 14, 23, 16, 42);
        for ($i = 0; $i < count($elements); $i++){
            echo "$elements[$i] <br>";
        }

        echo "<hr>";

        // array + foreach
        foreach ($elements as $element){
            echo "$element <br>";
        }
        ?>

   </body>
</html>