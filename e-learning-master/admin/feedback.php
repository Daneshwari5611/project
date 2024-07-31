<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Feedback</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div class="container">
			<div class="row">
				<div class="col-sm-8">
	<?php
		$query = "SELECT * FROM feedback";
		$result = mysqli_query($strconn,$query);
		while($row = mysqli_fetch_array($result))
		{
			echo "<table>"; 
			echo "<tr><td><b>Name : </b></td><td>".$row["name"]."</td></tr>";
			echo "<tr><td><b>Email ID : </b></td><td>".$row["email"]."</td></tr>";
			echo "<tr><td><b>Suggestion : </b></td><td>".$row["Description"]."</td></tr>";
			echo "</table> <br>";
		}
	?>
	</div>
	</div>
	</div>
	<br>
</body>
</html>
