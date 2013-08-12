<?php
echo"<html><head><title>Registration Form</title></head>
<body>";
if(isset($_COOKIE['exist']))
echo"<h3><font color='red'>Either the username already exists or you might have failed to fill in some fields </font></h3>";
echo"
<form method='post' action='register.php'>
Firstname:<input type='text' size='10' maximam='20' name='first'/></br>
Lastname:<input type='text' size='10' maximam='20' name='second'/></br>
Sex:</br><input type='radio' name='sex' value='male' checked/>Male</br>
<input type='radio' name='sex' value='female'/>Female</br>
Age:<input type='text' size='10' maximam='20' name='age'/></br>
Username:<input type='text' size='10' maximam='20' name='user'/></br>
Password:<input type='password' size='10' maximam='20' name='pass'/></br>
Mail-Id:<input type='text' size='20' maximam='50' name='mail' value='yourid@gmail.com'/></br>
Address:<input type='text' size='20' maximam='20' name='address'/></br>
City:<input type='text' size='10' maximam='20' name='city'/></br>
State:<input type='text' size='10' maximam='20' name='state'/></br>
Country:<input type='text' size='10' maximam='20' name='country'/></br>
<input type='submit' value='Register'/></form></body></html>";
?>