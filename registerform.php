<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register new account!</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <style>
      .error {
        color: red;
        margin-top: 10px;
        margin-bottom: 10px;
      }
    </style>

    
    
</head>
<body style="background-image: url(images/background.jpg); background-repeat: no-repeat; background-size: cover; max-width: 1550px; height: 500px;">

<div>
  <?php

  ?>
</div>

    <div class="container d-flex justify-content-center text-center" style="margin-top: 50px; background-color: #D1D1D1; max-width:400px;">
            <form action="register.php" method="post" enctype="multipart/form-data">
                <p class="fs-3 text-center">Register</p>

                <div class="mb-3">
                  <label class="form-label">Username:</label>
                  <input type="text" name="username"class="form-control" placeholder="Username" required="required">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address:</label>
                  <input type="email" name="email"class="form-control" placeholder="Email" required="required" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password:</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required="required" id="exampleInputPassword1">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword2" class="form-label">Repeat password:</label>
                  <input type="password" name="password_confirm" class="form-control" placeholder="Confirm Password" required="required" id="exampleInputPassword2">
                </div>
                <label>
                  <input type="checkbox" name="terms_of_service" /> Accept terms of service
                </label>
                <div class="col text-center">
                  <p class="fs-5">Already registered? <a href="loginform.php">Sign in</a></p>
                </div>
                
                  <div class="g-recaptcha" data-sitekey="6Lfwz8AaAAAAANYNV_ni7_Bel5iAsN3bdV5Ee_qx"></div>
                  <br/>
            
                <div class="col text-center" style="margin-bottom: 10px;">
                <button type="submit" name="create" value="Sign Up" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var username 	= $('#username').val();
			var email 		= $('#email').val();
			var password = $('#password').val();
			var password_confirm 	= $('#password_confirm').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'register.php',
					data: {username:username,email: email,password: password,password_confirm: password_confirm},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>



  </body>
</html>

