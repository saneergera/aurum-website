<?php

$host="localhost"; // Host name 
$username="gjdrytak_aurumfe"; // Mysql username 
$password="ikjs875#(_lmnl7477"; // Mysql password 
$db_name="gjdrytak_aurumfest"; // Database name 


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$team_name=$_POST['team'];
$event_name=$_POST['event'];
$info=$_POST['update'];

// Insert data into mysql 
$sql="INSERT INTO `timeline`(`event`, `team`, `update`) VALUES ('$event_name','$team_name','$info')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result)
{
echo "Successful";
echo "<BR>";
echo "<a href='update_by_team.php'>Back to main page</a>";
}
else {
echo "ERROR".mysql_error()."";
}
?> 

<?php 
// close connection 
mysql_close();
?>