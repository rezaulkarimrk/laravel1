<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label for="">Enter a number to count down from: </label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form> -->
</body>
</html>

<?php
    $foods =  array('apple', 'orange', 'banana', 'coconut', 'mango');

    // array_push($foods, 'pineapple', 'kiwi');
    // array_pop($foods);
    // array_pop($foods);
    // array_shift($foods);
    $revers_foods = array_reverse($foods);

    // echo $foods[0] . "</br>";
    // echo $foods[1] . "</br>";
    // echo $foods[2] . "</br>";

    foreach($revers_foods as $food){
        echo $food . "</br>";
    }


?>