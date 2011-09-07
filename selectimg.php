<?php
$con = mysql_connect("","","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("new", $con);

$result = mysql_query("SELECT * FROM upload");
while($row = mysql_fetch_array($result))
 {
 	$id = $row['id'];
	$content = $row['content'];  
	echo $id;
	echo $row['name'];
 	echo $row['type'];
 	echo $row['size'];
	//header("Content-type: image/jpeg");
	//echo $content;
 }	
?>
