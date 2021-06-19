<?php
// // include_once 'database.php';
$name = $_POST['name'];
$subject = $_POST['subject'];
$msgs = $_POST['message'];
$email = $_POST['email'];
 // echo $name;

//echo "Hello";
// require 'credential.php';

//msg body
$txtMsg = "<html>
<head></head>
<body>

<table>
	<tr>
		<td><b> Name :</b> ".$name."</td>
	</tr>
	<tr>
		<td><b>Email:</b> ".$email ."</td>
	</tr>

	<tr>
		<td><b>Subject :</b> ".$subject."</td>
	</tr>

	<tr>
		<td><b>Message :</b> ".$msgs."</td>
	</tr>

</table></body></html>";

$to = "saylisuhaskulkarni@gmail.com";
 $message = $txtMsg ;

       $header = "MIME-Version: 1.0\r\n";
       $header .= "Content-type: text/html\r\n";
       $retval = mail ($to,$subject,$message,$header );

			 echo " Your mail has been sent Sucessfully";
			 // echo ("<meta http-equiv='refresh' content='2;url=contact.php'>");

?>
