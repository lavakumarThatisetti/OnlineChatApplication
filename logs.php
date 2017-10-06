<?php
$host='localhost';
$user='root';
$pass=''; 
$con=mysql_connect($host,$user,$pass);
$db=mysql_select_db('userdatabase',$con);

//some random i value for colors 
$i=0;
$result1=mysql_query("SELECT * from chatbox ORDER by id DESC");
?>
<table width="100%">
<?php
while($extract=mysql_fetch_array($result1)){
	if($i%2!=0){
		$i=$i+1;
	echo "<tr><td><b style='color:violet;'>".$extract['username'] . "</b></td><td><i style='color:blue;'>" . $extract['msg']."</i></td></tr>";
	}
	else if($i%2==0){
		$i=$i+1;
		echo "<tr><td><b style='color:purple;'>".$extract['username'] . "</b></td><td><i style='color:brown;'>" . $extract['msg']."</i></td></tr>";
	}
	
}
?> 
</table>