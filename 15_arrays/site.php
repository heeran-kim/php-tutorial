<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
   </head>
   <body>

       <?php
        // store a large group of values
        $friends1 = array();
        // An array contains a lot of elements inside
        $friends2 = array("Kevin", "Karen", "Oscar", "Jim");
        // You can put any type together
        $friends3 = array("Kevin", 1, false);

        // How do we access an individual element inside of the array?
        // Using an index inside the square bracket
        echo $friends3[0];

        // modify an element
        $friends3[1] = "Dwight";
        echo $friends3[1];
        $friends3[1] = true;
        echo $friends3[1];

        // Adding an element wherever
        $friends3[10] = "Angela";
        echo $friends3[10];

        // counting the number of elements
        echo count($friends3);
        $friends3[100] = "Mike";
        echo count($friends3);
        ?>

   </body>
</html>