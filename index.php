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
			function check(){
				var username =document.getElementById("user").value;
				var psw =document.getElementById("psw").value;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						document.getElementById("verify").innerHTML = xmlhttp.responseText;
					}
				};
				xmlhttp.open("POST","login.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("psw="+psw+"&user="+username);
			}
			
		</script>
</head>
<style type="text/css">
	body{
		background-color:rgb(0,0,0,0.075);
	}
	.formgp{
		max-width:30%;
		border:2px solid #ddd;
		background-color:white;
		margin-left:500px;
		padding:15px;
		margin-top:100px;
		border-radius:10px;
		height:500px;
	}
	input , label{
		margin-top:15px;
	}
	.formgp:hover{
		box-shadow:1px 1px 5px 1px;
	}
	h2{
		 color: white;
        font-family:algerian;
        text-shadow: 2px 2px 4px red;
        font-size:35px;
        text-align:center;
        margin-top:50px;
	}

	a:hover{
		text-decoration:none;
	}
</style>
<body>

<div>
	<div class="formgp">
		
			<h2><i>Matia <br>Technologies</i></h2>
			<label>Username</label>
			<input type="text" id="user" class="form-control" placeholder="username">
			<label>password</label>
			<input type="password" id="psw" class="form-control" placeholder="password" onkeyup="check()">
			<div style="text-align:center;margin-top:20px;font-size:16px;">
			<i id="verify"></i><br>
			
			</div>

	</div>
</div>
</body>
</html>