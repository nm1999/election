<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="w3schools.css">
</head>
<style type="text/css">
</style>
<body>
<?php 
	$user =$_POST['user'];
	$password=$_POST['psw'];
	$conn = new mysqli("localhost","root","","matia_tech");
	if (!$conn) {
		echo "connection failed";
	}
	$sel ="SELECT * from register where password='$password' and user_name='$user'";
	$res =$conn->query($sel);
	$row =$res->fetch_assoc();
	echo "<a href='".$row['link']."'  class='w3-btn btn-danger'>".$row['command']."</a>";
?>
</body>
</html>