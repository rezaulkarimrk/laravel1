<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label for="">username: </label>
        <input type="text" name="username"> </br> </br>

        <label for="">password: </label>
        <input type="password" name="password"> </br>

        <input type="submit" value="Log in">
    </form> -->

    <form action="index.php" method="get">
        <label for="">quantity: </label>
        <input type="text" name="quantity"> </br> </br>

        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    // echo "{$_POST["username"]}</br>";
    // echo "{$_POST["password"]}</br>";

    $item = 'pizza';
    $price = 5.99;
    $quantity = $_GET["quantity"];
    $total = null;

    $total = $price * $quantity;

    echo "You have ordered {$quantity} x {$price}</br>";
    echo "Your total is: \${$total}";
?>