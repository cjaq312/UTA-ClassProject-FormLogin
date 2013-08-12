<?php
$user=$_POST["user"];
$pass=$_POST["pass"];
//$key=0;
$key=md5("$pass");
include("connection.php");
$check=mysql_query("select * from login where user=\"$user\" and pass=\"$pass\"");
$f=mysql_num_rows($check);
if($f==0)
{
echo"Unauthorised Access";
}
else
{
while($r=mysql_fetch_array($check))
{
setcookie("user", "$user", time()+3600);
//$key+=1;
setcookie("key", "$key", time()+3600);
mysql_query("update login set md5=\"$key\" where user=\"$user\"");
break;
}
}
?>