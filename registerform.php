<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    
</head>
<body style="background-image: url(images/background.jpg); background-repeat: no-repeat; background-size: cover; max-width: 1550px; height: 500px;">

    
    <div class="container d-flex justify-content-center text-center" style="margin-top: 200px; background-color: #D1D1D1; max-width:400px;">
            <form action="login.php" method="post">
                <p class="fs-3 text-center">Register</p>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col text-center">
                  <p class="fs-5">Already registered? <a href="loginform.php">Click here</a></p>
                </div>
                <div class="col text-center" style="margin-bottom: 10px;">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>

    
</body>
</html>