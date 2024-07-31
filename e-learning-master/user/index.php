<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>About - Techro Bootstrap template</title>
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
		else{ echo "<div class='alert alert-danger' role='alert'>Something went wrong try login again.</div>";

		}
	?>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Welcome <?php echo $username;?></h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			<h2>Online Courses</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="courses.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Courses</h3>
							
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>Ask Question to Expert</h3>
							
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="manage.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>Manage Profile</h3>
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>