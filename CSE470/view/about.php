<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}

		.topnav {
			overflow: hidden;
			background-color: #333;
			margin-bottom: 10%;
			width: 100%;
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
		.card {
			background-color: #4CAF50;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 400px;
			margin: auto;
			padding: 2px;
			text-align: center;
			font-family: arial;
		}

		.title {
			color: black;
			font-size: 18px;
		}
		a{
			color: black;
		}
	</style>
</head>
<body>
	<div class="topnav">
		<a id="home" class="content" href="dashboard.php">Home</a>
		<a id="profile" class="content" href="profile.php">Profile</a>
		<a id="history" class="content" href="history.php">History</a>
		<a id="about" class="content active" href="about.php">About</a>
		<a id="logout" class="content" href="../controller/logout.php">Logout</a>
	</div>
	<div class="card">
		<p class="title">
			This is a test website for Booking Bus tickets in Bangladesh. The site is still under development and more features are going to be added soon (for example: Selecting specific seats,OTP etc). The site is not meant for commercial use yet. For any queries regarding the site please contact <a href="https://mail.google.com/mail/?view=cm&fs=1&to=md.iftekhar.alam.tousif@g.bracu.ac.bd">md.iftekhar.alam.tousif@g.bracu.ac.bd</a>
		</p>
	</div>
</body>