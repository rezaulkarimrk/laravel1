<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza </br>
        <input type="checkbox" name="foods[]" value="Hamburger">Hamburger </br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog </br>
        <input type="checkbox" name="foods[]" value="Taco">Taco </br>
        <input type="submit" name="confirm" value="confirm">
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['confirm'])){

        $foods = $_POST['foods'];

        foreach($foods as $food){
            echo $food . "</br>";
        }
        
        // if(isset($_POST['pizza'])){
        //     echo 'You Like Pizza </br>';
        // }
        // if(isset($_POST['hamburger'])){
        //     echo 'You Like Hamburger </br>';
        // }
        // if(isset($_POST['hotdog'])){
        //     echo 'You Like Hotdog </br>';
        // }
        // if(isset($_POST['taco'])){
        //     echo 'You Like Taco </br>';
        // }

        // if(empty($_POST['pizza'])){
        //     echo 'You don\'t Like Pizza </br>';
        // }
        // if(empty($_POST['hamburger'])){
        //     echo 'You don\'t Like Hamburger </br>';
        // }
        // if(empty($_POST['hotdog'])){
        //     echo 'You don\'t Like Hotdog </br>';
        // }
        // if(empty($_POST['taco'])){
        //     echo 'You don\'t Like Taco </br>';
        // }
    }
?>