<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: </br>
        <input type="text"  name="username"> </br>
        Age: </br>
        <input type="text"  name="age"> </br>
        Email: </br>
        <input type="text"  name="email"> </br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        // $username = $_POST['username'];
        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        // echo $email . "</br>";


        // $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        // if(empty($age)){
        //     echo "That's number isn't valid";
        // }
        // else{
        //     echo "You are $age years old";
        // }

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if(empty($email)){
            echo "That's email isn't valid";
        }
        else{
            echo "You are email is: {$email}";
        }
        
        
    }
?>
