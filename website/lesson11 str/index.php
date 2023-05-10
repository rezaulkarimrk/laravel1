
<?php
    // echo 3 ** 4;

    $username = "Rezaul Karim RK";
    $usernameArray = array("Rezaul", "Karim", "RK");
    $phone = "123-456-789";

    $lower = strtolower($username);
    $upper = strtoupper($username);
    $trim = trim($username);
    $str_pad = str_pad($username, 20, "0");
    $str_rev = strrev($username);
    $str_shuffle = str_shuffle($username);
    $str_cmp = strcmp($username, "Rezaul Karim Rk");
    $strlen = strlen($username);
    $index = strpos($username, " ");
    $substr = substr($username, 0, 6);
    $substr1 = substr($username, 7);
    $explode = explode(" ", $username);
    $implode =  implode("-", $usernameArray);

    $phone = str_replace("-", "", $phone);
    
    echo $lower . "</br>";
    echo $upper . "</br>";
    echo $trim . "</br>";
    echo $str_pad . "</br>";
    echo $str_rev . "</br>";
    echo $str_shuffle . "</br>";
    echo $str_cmp . "</br>";
    echo $strlen . "</br>";
    echo $index . "</br>";
    echo $substr . "</br>";
    echo $substr1 . "</br></br>";

    foreach($explode as $name){
        echo $name . "</br>";
    }
    echo $implode . "</br>";


    echo $phone . "</br>";
?>