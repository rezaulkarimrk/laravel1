<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login page</title>
</head>
<body>
  <form action="index.php" method="post" >
    username:</br>
    <input type="text" name="username"></br>
    password:</br>
    <input type="password" name="password"></br>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html>

<?php
  // $_SESSION['username'] = 'mrk99rk';
  // $_SESSION['password'] = 'mrk99rk00';
  // echo "{$_SESSION['username']} </br>";
  // echo "{$_SESSION['password']} </br>";

  if(isset($_POST['login'])){
    if(!empty($_POST['username']) && !empty($_POST['password']) ){
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];

      echo $_SESSION['username'] . "</br>";
      echo $_SESSION['password'] . "</br>";

      header("Location: home.php");

    }
    else{
      echo "Missing username/password";
    }
  }
?>