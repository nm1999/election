<?php
	$id =$_GET['id'];
	$conn = new mysqli("localhost","root","","matia_tech");
	if (!$conn) {
		echo "COnnection failed";
	}
	$info ="SELECT * from records where id='$id'";
	$res =$conn->query($info);
	$row =$res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="w3schools.css">
	</title>
</head>
<style type="text/css">
	.solution{

	}
</style>
<body>
<div class="container">
	<header style="text-align:center;"><h4><?php echo $row['problem']?></h4></header>
	<div class="container">
		<div class="solution">
			<?php echo $row['solution']?>
		</div>
	</div>
</div>
</body>
</html>