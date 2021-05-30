<?php
$conn=new mysqli("localhost","root","","");
 {
 	$qry="select * from food where id='1'";
	$result=$conn->query($qry);
	}
	echo"welcome";
?>