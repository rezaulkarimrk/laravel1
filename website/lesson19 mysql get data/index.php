<?php
// 1. MySQL Extension
// 2. PDO (PHP Data Object)

  include("database.php");

  // $sql = "SELECT * FROM users where user = 'rezaulkarim'";
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo $row['id'] . "</br>";
    // echo $row['user'] . "</br>";
    // echo $row['reg_date'] . "</br>";

    while($row = mysqli_fetch_assoc($result)){
      echo $row['id'] . "</br>";
      echo $row['user'] . "</br>";
      echo $row['reg_date'] . "</br>";
    }
  }
  else{
    echo "No user found";
  }

  mysqli_close($conn);
?>
