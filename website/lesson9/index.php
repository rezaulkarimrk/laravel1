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
        <input type="radio" name="credit_card" value="Visa">Visa </br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard </br>
        <input type="radio" name="credit_card" value="Nexus">Nexus </br>
        <input type="radio" name="credit_card" value="Circle">Circle </br>
        <input type="submit" name="confirm" value="confirm">
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['confirm'])){
        // if(isset($_POST['credit_card'])){
        //     $credit_card = $_POST['credit_card'];
        //     echo $credit_card;
        // }
        // else{
        //     echo "Please make selection";
        // }
        
        $credit_card = null;
        if(isset($_POST['credit_card'])){
            $credit_card = $_POST['credit_card'];
        }

        // if($credit_card == 'Visa'){
        //     echo "You selected Visa";
        // }
        // elseif($credit_card == 'Mastercard'){
        //     echo "You selected Mastercard";
        // }
        // elseif($credit_card == 'Nexus'){
        //     echo "You selected Nexus";
        // }
        // elseif($credit_card == 'Circle'){
        //     echo "You selected Circle";
        // }
        // else{
        //     echo "Please make a selection";
        // }
        switch ($credit_card){
            case 'Visa':
                echo "You selected Visa";
                break;
            case 'Mastercard':
                echo "You selected Mastercard";
                break;
            case 'Nexus':
                echo "You selected Nexus";
                break;
            case 'Circle':
                echo "You selected Circle";
                break;
            default:
            echo "Please make a selection";
        }
        
    }

?>