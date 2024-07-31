<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>About - Techro Bootstrap template</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
	<?php
		$query = "SELECT * FROM subject LIMIT 1";
		$result = mysqli_query($strconn,$query);

	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Courses</h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			<h2>Available Courses</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="HTML.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>HTML</h3>
							This FREE Tutorial will teach you how to design a webpage using HTML.Complete a series of hands-on practice and examination while writing real HTML code.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="CSS.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>CSS</h3>
							Our CSS Tutorial will teach you how to control the style & layout of websites.Complete a series of practice and examination while filling out actual CSS code.
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>
