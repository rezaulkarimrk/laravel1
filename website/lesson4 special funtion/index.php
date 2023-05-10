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
        <label for="">x:</label>
        <input type="text" name="x"></br></br>
        <label for="">y:</label>
        <input type="text" name="y"></br>
        <input type="submit" value="Submit">
    </form> -->

    <form action="index.php" method="post">
        <label for="">radius</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = pow($x, $y);
    // $total = sqrt($x);
    // $total = pi();
    // $total = rand(1, 6);

    $radius = $_POST['radius'];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference}cm </br>";
    echo "Area = {$area}cm^2 </br>";
    echo "Volume = {$volume}cm^3 </br>";
?>