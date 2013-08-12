<?php
include("connection.php");
$first=$_POST['first'];
$second=$_POST['second'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$mail=$_POST['mail'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$user=$_POST['user'];
$pass=$_POST['pass'];
//echo"insert into login values(\"$user\",\"$pass\",\"$first\",\"$second\",\"$sex\",\"$age\",\"$mail\",\"$address\",\"$city\",\"$state\",\"$country\"";
$check=mysql_query("select * from login");
$f=mysql_num_rows($check);
//echo"$f";
if($first==""||$second==""||$age==""||$mail==""||$address==""||$city==""||$state==""||$country==""||$user==""||$pass=="")
{
setcookie("exist","exist",time()+3600);
header("Location:detail.php");
}
else
{
if($f==0)
{
mysql_query("insert into login values(\"$user\",\"$pass\",\"$first\",\"$second\",\"$sex\",\"$age\",\"$mail\",\"$address\",\"$city\",\"$state\",\"$country\",\"0\")");
setcookie("exist","exist",time()-3600);
echo "<h3>Thankyou For Registering</h3></br>";
echo"<a href='signin.html'>Click here to sign in</a>";
}
else
{
if(isset($_COOKIE['exist']))
setcookie("exist","exist",time()-3600);
if($first==""||$second==""||$age==""||$mail==""||$address==""||$city==""||$state==""||$country==""||$user==""||$pass=="")
{
setcookie("exist","exist",time()+3600);
header("Location:detail.php");
}
else
{
$check=mysql_query("select * from login");
while($r=mysql_fetch_array($check))
{
if($user==$r['user'])
{
setcookie("exist","exist",time()+3600);
header("Location:detail.php");
}
else
{
mysql_query("insert into login values(\"$user\",\"$pass\",\"$first\",\"$second\",\"$sex\",\"$age\",\"$mail\",\"$address\",\"$city\",\"$state\",\"$country\",\"0\")");
setcookie("exist","exist",time()-3600);
echo "<h3>Thankyou For Registering</h3></br>";
echo"<a href='signin.html'>Click here to sign in</a>";
}
}
}
}
}
?>