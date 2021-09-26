<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="w3schools.css">
		
</head>
<style type="text/css">

</style>
<body>

<?php 
	$conn = new mysqli("localhost","root","","matia_tech");
	if (!$conn) {
		echo "connection failed";
	}
	$search =$_GET['search'];

	$sel="SELECT * from records where problem  LIKE '%$search%'";
	$result =$conn->query($sel);
		while ($row =$result->fetch_assoc()) {
			echo "<button onclick='view(".$row['id'].")' class='btn btn-link' >".$row['problem']."</button>";
		}	
?>
	<p id="sln"></p>
</body>
</html>