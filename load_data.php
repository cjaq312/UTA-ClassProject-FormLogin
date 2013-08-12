<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
die("Connection error:".mysql_error());
$dbase=mysql_select_db("login",$conn);
if(!$dbase)
die("No database created:".mysql_error());

$f="LOAD DATA LOCAL INFILE 'C:/wamp/www/Login_snippet/sample.txt' INTO TABLE hi FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n'";
mysql_query("$f");

mysql_close($conn);

?>