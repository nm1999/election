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
		<script type="text/javascript">
			function store(){
				var prob = document.getElementById("prob").value;
				var solution =document.getElementById("solution").value;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						document.getElementById("result").innerHTML= xmlhttp.responseText;
					}
				};
				xmlhttp.open("POST","insert.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("prob="+prob+"&solution="+solution);

			}

			 function hint(value){
			 	var xmlhttp = new XMLHttpRequest();
			 	xmlhttp.onreadystatechange = function(){
			 		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			 			document.getElementsByClassName("panel-content")[0].innerHTML=xmlhttp.responseText;
			 		}
			 	};
			 	xmlhttp.open("GET","search.php? search="+value,true);
			 	xmlhttp.send();
			 }
			 	function view(id){
				
				var xmlhttpr = new XMLHttpRequest();
				xmlhttpr.onreadystatechange = function(){
					if (xmlhttpr.readyState==4 && xmlhttpr.status==200) {
						document.getElementsByClassName("modal-content")[0].innerHTML=xmlhttpr.responseText;
					}
				};
				xmlhttpr.open("GET","solution.php?id="+id,true);
				xmlhttpr.send();

			}
		</script>
</head>
<style type="text/css">
	textarea:hover{
		border:none;
	}
	textarea{
		border:none;
		border-bottom:none;
		height:200px;
	}
	header{
		background-color:#00bfff;
		font-size:35px;
		font-weight:bold;
		font-family:algerian;
		text-shadow:2px 3px black;
		color:white;
		text-align: center;
		padding:10px;
	}
	.panel-content{
		padding:5px;
		resize:horizontal;
		overflow:auto;
		width:100%;
		height:400px;
	}
	.input{
		border-right:1px solid black;
	}
	.heading{
		background-color: #00ff40;
		max-width:150%;
		font-weight:bold;
		font-family:cursive;
	}
	.output{
		background-color:red;
		padding:10;
		max-width:100%;
	}
	span{
		background-color:red;
		color:white;
		border-radius:100%;
		padding:10px;
		margin-right:5px;
	}
	footer{
		background-color:black;
		color:white;
		padding:15px;
	}
	.w3-btn{
		background-color:green;
		margin-top:20px;
		margin-left:150px;
		color:white;
	}
	.main{
		padding:15px;
		background-color:rgb(0,0,0,0.075);
	}

</style>
<body>
<header class=" nav navbar">
	Matia Technologies
	<a href="index.php"><i class="fa fa-power-off"></i></a>
</header>
<div class="d-flex main">
	<div class="container">
		<div class="heading">
			<marquee><h2>Keep your records</h2></marquee>
		</div>
		<div class="container">
			<p id="result"></p>
			
			<label><b>What is the problem ?? </b></label>
			<input type="text" id="prob" class=" w3-input"><br>
			<label><b>Solution to problem</b></label>
			<textarea class="w3-input" id="solution">
				
			</textarea>
			<button class="w3-btn" onclick="store()">store</button>

		</div>		
	</div>
	<div class="container">
		<div class="heading" style="background-color:red;padding:12px;">
			<input type="text" name="search" placeholder="Search for problem......." class="form-control" style="width:50%;margin-left:20px;" onkeyup="hint(this.value)">
		</div>		
		<div class="panel">
			<div class="panel-content">
				
			</div>
		</div>
	</div>
	<div class="container">
		<div class="modal-content panel-content" id="sln">
			
		</div>
	</div>
</div>
<footer class="d-flex">
	<div class="container">
		<span class="fa fa-facebook"></span>Nyanzi Matia<br>
		<span class="fa fa-twitter"></span>@Matiamathias<br>
		<span class="fa fa-whatsapp"></span>0706806111
	</div>
	<div class="container">
		<h4>Location</h4>
		<i>Maisha Hostel</i><br>
		<i>Lira university</i>
	</div>
	<div class="container">
		<h4>Business contacts</h4>
		<span class="fa fa-envelope"></span>nyanzimathiaz@gmail.com<br>
		<span class="fa fa-phone"></span>0781260856 / 0706806111
	</div>
</footer>
</body>
</html>