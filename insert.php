<?php 
$prob =$_POST['prob'];
$sln =$_POST['solution'];
	$conn= new mysqli("localhost","root","","matia_tech");
	if (!$conn) {
		echo "connection failed";
	}
	$store ="INSERT INTO records(problem,solution)values('$prob','$sln')";
	if ($conn->query($store)===TRUE) {
		echo "Stored ";
	}else{
		echo "Failed";
	}

?>