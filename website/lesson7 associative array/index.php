<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country" >
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
    //associative array

    $capitals = array(
        "Bangladesh" => "Dhaka",
        "Pakisthan" => "Islamabad",
        "Indonesia" => "Zakarta",
        "Malaysia" => "Kuala Lumpur",
        "Syria" => "Damascus",
        "Egypt" => "Kayro",
        "Palestine" => "Jerusalem",
        "New Zealand" => "Wellington",
        "China" => "Beijing",
    );

    // echo $capitals['Malaysia'] . "</br>";
    // echo $capitals['New Zealand'] . "</br>";

    // $capitals["Bangladesh"] = "Chitagong";
    // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);

    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} </br>";
    // }

    // $keys =  array_keys($capitals);
    // foreach($keys as $key){
    //     echo "{$key} </br>";
    // }

    // $values = array_values($capitals);
    // foreach($values as $value){
    //     echo "{$value} </br>";
    // }

    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);
    // echo count($capitals) . "</br>";
    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} </br>";
    // }

    // $capital = ;
    echo $capitals[$_POST['country']];

?>