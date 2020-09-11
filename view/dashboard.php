<!DOCTYPE html>
<html>
<head>
	<title>Bus Reservation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}

		.topnav {
			overflow: hidden;
			background-color: #333;
			width: 100%;
			position: fixed;
			display: flex;
			justify-content: center;
		}

		.topnav a {
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}

		.topnav a.active {
			background-color: #4CAF50;
			color: white;
		}
		.sidenav {
			height: 100%;
			width: 15%;
			position: fixed;
			top: 0;
			left: 0;
			background-color: #333;
			padding-top: 100px;
		}

		.sidenav p {
			padding: 0px 0px 0px 35px;
			text-decoration: none;
			font-size: 25px;
			color: #4CAF50;
		}
		.sidenav label{
			font-size: 15px;
			color: #ddd;
		}
		.sidenav form{
			padding: 0px 0px 0px 35px;
		}
	</style>
</head>
<body>
	<div class="topnav">
		<a id="home" class="content active" href="#home" onclick="topactive('home')">Home</a>
		<a id="profile" class="content" href="#profile" onclick="topactive('profile')">Profile</a>
		<a id="history" class="content" href="#history" onclick="topactive('history')">History</a>
		<a id="about" class="content" href="#about" onclick="topactive('about')">About</a>
		<a id="logout" class="content" href="../controller/logout.php">Logout</a>
	</div>
	<div class="sidenav">
		<p>Book Ticket</p>
		<form action="result.php" method="post">
			<label for="Date">Select Date</label>
			<input type="date" name="date" required>
			<br>
			<label for="location">Select Destination</label>
			<select id="location" name="location">
				<option value="Bandarban">Bandarban</option>
				<option value="Barisal">Barisal</option>
				<option value="Chittagong">Chittagong</option>
				<option value="Comilla">Comilla</option>
				<option value="Cox's Bazar">Cox's Bazar</option>
				<option value="Jessore">Jessore</option>
				<option value="Khulna">Khulna</option>
				<option value="Rangamati">Rangamati</option>
				<option value="Rangpur">Rangpur</option>
				<option value="Sylhet">Sylhet</option>
			</select>
			<br>
			<label for="coach">Coach Type</label>
			<br>
			<select id="coach" name="coach" required>
				<option value="AC">AC</option>
				<option value="Non-AC">Non-AC</option>
			</select>
			<br>
			<input type="submit" name="submit">
		</form>
	</div>


	<script>
		function topactive(elem){
			var element = elem;
			if(element==="home"){
				document.getElementById(elem).classList.add("active");	
			}
			else{
				document.getElementById("home").classList.remove("active");
			}
			if(element==="profile"){
				document.getElementById(elem).classList.add("active");	
			}
			else{
				document.getElementById("profile").classList.remove("active");
			}
			if(element==="history"){
				document.getElementById(elem).classList.add("active");	
			}
			else{
				document.getElementById("history").classList.remove("active");
			}
			if(element==="about"){
				document.getElementById(elem).classList.add("active");	
			}
			else{
				document.getElementById("about").classList.remove("active");
			}
		}
	</script>
</body>
</html>