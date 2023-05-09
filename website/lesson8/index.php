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
        <label for="">username: </label>
        <input type="text" name="username"></br>
        <label for="">password: </label>
        <input type="text" name="password"></br>
        <input type="submit" name="login" value="Log in">
    </form>
    
</body>
</html>
<?php
    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} </br>";
    // }

    if(isset($_POST["login"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username)){
            echo "Username is missing";
        }
        elseif(empty($password)){
            echo "Password is missing";
        }
        else{
            echo "Hello {$username}";
        }
    }


   //isset() = Return TRUE if a variable is declared and null
    // $username = false;
    // if(isset($username)){
    //     echo"This variable is set";
    // }
    // else{
    //     echo "This variable is not set";
    // }

   //empty() = return TRUE if a variable is not declared, false, null, "";
//    $username = false;
//    if(empty($username)){
//        echo"This variable is empty";
//    }
//    else{
//        echo "This variable is not empty";
//    }
// ?>