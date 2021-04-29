<?php

  session_start();

  require_once "connect.php";
  
  $connect = @new mysqli($host,$db_user,$db_password, $db_name);
  
  if ($connect->connect_errno!=0)
  {
      echo "Error: ".$connect->connect_errno;
  }

  else
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; 

    if ($result = @$connect->query($sql))
    {
        $how_many_users = $result->num_rows;
        if($how_many_users>0)
        {
          $char = $result->fetch_assoc();
          $_SESSION['login'] = $char['email'];

          unset($_SESSION['error']);

          $result->close();

          header('Location: index.php');
        }  else {
          
          $_SESSION['error']='<span style="color:red;">Wrong email or password!</span>';
          header('Location:loginform.php');
        }
    }


    $connect->close();
  }
  

  

?>