<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>Test Environment</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css" >
	</head>

	<body>

		<div class="header">
  			<h1>THIS IS A DEMO</h1>
		</div>

		<div class="topnav">
			 <a href="index.php">Home</a>
	 		 <a href="rss.php">RSS Reader App</a>

		</div>

		<div class="row">
  			<div class="column side">
    				<h2>Test Environment</h2>
  				<p>
				Designed by: <br>
				Mark Cardiff<br>
				</p>
			</div>

			<div class="column middle">

				<h1>Hello World!</h1>
				<p>This website is running on Google Kubernetes Engine, using multiple pods 
				deployed across a cluster. </p>
				<h4>Attempting MySQL pod connection from php...</h4>
				<?php
				$host = 'db';
				$user = 'root';
				$pass = 'rootpassword';
				$conn = new mysqli($host, $user, $pass);
					if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					} 
				echo "Connected to MySQL container successfully!";
				?>
			</div>
  			<div class="column side">
    				<h2>Sidebar</h2>
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. 
				Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. 
				Praesent scelerisque tortor sed accumsan convallis.</p>
  			</div>
		</div>

	</body>
</html>
