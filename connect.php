<?php 

echo __dir__;
echo "<br>";
//Sample Database Connection Syntax for PHP and MySQL. 
//Connect To Database 
	$hostname="localhost";
	$username="puneet";
	$password="Cloud@2014";
	$dbname="heymyself";
	$usertable="user";
	$yourfield = "name"; 
	
	mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db($dbname); 
	
	# Check If Record Exists 
	$query = "SELECT * FROM $usertable"; 
	$result = mysql_query($query); 
	if($result) {
		while($row = mysql_fetch_array($result)) {
			$name = $row["$yourfield"];
			echo "Name: ".$name."<br>"; 
		} 
	}
?>