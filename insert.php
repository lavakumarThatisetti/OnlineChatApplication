<?php
$host='localhost';
$user='root';
$pass='';
$uname=$_REQUEST['uname'];
$msg=$_REQUEST['msg'];

$con=mysql_connect($host,$user,$pass);
$db=mysql_select_db('userdatabase',$con);

$query=mysql_query("INSERT into chatbox (`username` , `msg`) values('$uname','$msg')"); 

$result1=mysql_query("SELECT * from chatbox ORDER by id DESC");

while($extract=mysql_fetch_array($result1)){
	echo $extract['username'] . ":" . $extract['msg']."<br/>";
}
?>