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
					<h1>Admin</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="manageuser.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Manage Users</h3>
							
						</div>
						</a>
					</div>
				</div>
							
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="feedback.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Feedback</h3>
							
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
</body>
</html>