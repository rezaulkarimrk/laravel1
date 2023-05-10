<?php
//hashing
  $password = "RK000111";
  $hash = password_hash($password, PASSWORD_DEFAULT);

  if(password_verify($password, $hash)){
    echo "You are logged in";
  }
  else{
    echo "Incorrect password";
  }


?>