<?php

  session_start();

  if ((!isset($_POST['email'])) || (!isset($_POST['password'])))
  {
    header('Location: loginform.php');
    exit();
  }

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

    $email = htmlentities($email, ENT_QUOTES, "UTF-8");
    $password = htmlentities($password, ENT_QUOTES, "UTF-8");
   

    if ($result = @$connect->query(
      sprintf("SELECT * FROM users WHERE email='%s' AND password='%s'",
      mysqli_real_escape_string($connect,$email),
      mysqli_real_escape_string($connect,$password))))
    {
        $how_many_users = $result->num_rows;
        if($how_many_users>0)
        {
          $_SESSION['logged'] = true;
          $_SESSION['id'] = $char['id'];
          
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