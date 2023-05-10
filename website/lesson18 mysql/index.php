<?php
// 1. MySQL Extension
// 2. PDO (PHP Data Object)

  include("database.php");

  $username = "hello123";
  $password = "HelloCity111";
  $hash = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (user, password)
          VALUE('$username', '$hash')";
  
  try{
    mysqli_query($conn, $sql);
    echo "User is now regestered";
  }
  catch(mysqli_sql_exception){
    echo "Could not regester user";
  }
  mysqli_close($conn);
?>
