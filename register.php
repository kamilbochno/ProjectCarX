<?php
require_once('connect.php');
?>
<?php

if(isset($_POST)){

	
	$username 		= $_POST['username'];
	$email 			= $_POST['email'];
	$password	= sha1($_POST['password']);
	$password_confirm 		= sha1($_POST['password_confirm']);

		$sql = "INSERT INTO users (username, email, password) VALUES(?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$username, $email, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were errors while saving the data.';
		}
}else{
	echo 'No data';
}