<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>Feedback </title>
	<link rel="favicon" href="assets/images/favicon.png">
</head>

<body>
	<?php
		include "nav.php";$strconn=mysqli_connect("localhost","root","","project");
	if(!$strconn)
		echo "Connection failed".mysqli_connect_error();
	else
	{
	
	}
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

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Your Message</h3>
			<form name="sentMessage" id="contactForm"  novalidate method="post" action=""> 
			<div class="control-group">
			<div class="controls">
			<input type="text" class="form-control" placeholder="Full Name" name="name" required data-validation-required-message="Please enter your name" />
			<p class="help-block"></p>
			</div>
			</div> 	
			<div class="control-group">
			<div class="controls">
			<input type="email" class="form-control" placeholder="Email" name="email" required data-validation-required-message="Please enter your email" />
			</div>
			</div> 	
			<div class="control-group">
			<div class="controls">
			<textarea rows="10" cols="100" class="form-control" 
			placeholder="Message" name="message" required
			data-validation-required-message="Please enter your message" minlength="5" 
			data-validation-minlength-message="Min 5 characters" 
			maxlength="999" style="resize:none;margin-top:10px"></textarea>
			</div>
			</div> 	
			<br>
			<div id="success"> 
		<?php
		if(isset($_POST['btnsubmit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$message=$_POST['message'];
			$strInsert="INSERT INTO feedback(Description,name,email) VALUES('$message','$name','$email')";
			if(mysqli_query($strconn,$strInsert))
				echo "<div class='alert alert-success' role='alert'>Thanks for feedback.</div>";
			else
					echo "<div class='alert alert-danger' role='alert'>something wrong.</div>";

		}
		?>
		</div>
			<button type="submit" class="btn btn-primary pull-right" name="btnsubmit" >Send</button><br /><br /><br /><br />
			</form>
			</div>
			</div>
	</div>

</body>
</html>
