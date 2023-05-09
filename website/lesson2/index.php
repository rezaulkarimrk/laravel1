<?php
    $name = "Rezaul Karim RK";
    $food = "Burger";
    $email = "mrk99rk@gmail.com";

    $age = 25;
    $users = 2;
    $quantity = 4;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;

    $total =  null;

    // echo "Hello {$name} </br>";
    // echo "You Like {$food}</br>";
    // echo "Your email is {$email}</br>";

    // echo "You are {$age} yours old</br>";
    // echo "There are {$users} users Online</br>";
    // echo " You would like to buy {$quantity} items</br>";

    // echo " Your GPA is: {$gpa}</br>";
    // echo " Your Pizza price is \${$price}</br>";
    // echo " The sales tax rate is: {$tax_rate}%</br> ";

    // echo "Online status: {$online}";

    echo "You have ordered {$quantity} x {$food}s</br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";
?>