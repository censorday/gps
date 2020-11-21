<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-family: 'Roboto Medium', sans-serif;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

#input-wrapper * {
  position: absolute;
}

#input-wrapper label {
  z-index: 12;
  
  margin-left: 7px;
}

#input-wrapper input {

  text-indent: 35px;
}
</style>
    <title>Document</title>
</head>
<body>


<div  style="padding: 70px;" >
<h1 style="font-family: 'Roboto Medium', sans-serif;">SMS</h1>
<br>	
<div class="container">
<form action="sms.php" method="post">
<div class="row">
      <div class="col-25">
        <label for="fname">Number</label>
      </div>
      <div class="col-75">
	  <div id="input-wrapper">
		
		<label style="color:grey;" for="number">+91</label>
        <input type="text" name="number" placeholder="Enter Number"/>
		
		</div>
		
      </div>
    </div>


	<div class="row">
      <div class="col-25">
        <label for="lname">Message</label>
      </div>
    <div class="col-75">
        <input type="text"  placeholder="Enter Message" style="height:100px" />
	</div>
    </div>
      
<br>

      <center><input type="submit" value="send" name="submit" ></center>

</form>
</div>
  </div>
  
  
  
  
  
  
  
  
  
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $text=$_POST['text'];

$url="www.way2sms.com/api/v1/sendCampaign";
$message = urlencode($text);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=GI5C79AQSU608WEWFUXDF9TGSMH6VEA&secret=NT3ZV43JWQ9J8WIU&usetype=stage&phone=$number&senderid=adavijit@yahoo.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;


}
?>
