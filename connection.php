<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
die("Connection error:".mysql_error());
$dbase=mysql_select_db("login",$conn);
if(!$dbase)
die("No database created:".mysql_error());
?>