<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/style.css">

<style>
th, td {
    padding:5px;   
}
</style>
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
	<header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Login</h1>
                </div>
            </div>
        </div>
    </header>
	<br>
	<form action="" method="post" autocomplete="off">
		<table border=0 align="center">
			<tr>
				<td><label>Enter your User Name:</label></td>
				<td><input type="text" class="form-control" name="id" placeholder="User Name"></td>
			</tr>
			<tr>
				<td><label>Enter your Password:</label></td>
				<td><input type="password" class="form-control" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button name="btnsubmit" class="btn btn-block">Submit</button></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button name="btnforget" class="btn btn-block">Forgot Password?</button></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="reg.php" class="btn btn-block">Create Account?</a></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><a href="admin.php" class="btn btn-block">Admin login</a></td>
			</tr>
		</table>
	</form>
	
	<?php
	if(!empty($_POST['id'])&&!empty($_POST['pass']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$name = $_POST["id"]; 
            $password = $_POST["pass"]; 
			$query = "SELECT * FROM user_info WHERE UserName='$name' and Password='$password'";
			$result = mysqli_query($strconn,$query);
			$count = mysqli_num_rows($result);
			if($count==1)
			{
				session_start();
				$_SESSION["username"]=$_POST['id'];
				echo("<script>location.href = 'user/index.php';</script>");
			}
			else
			{
				echo "<div class='alert alert-danger' role='alert'>Username or password is incorrect..Try again</div>";
			}
		}
	}?>
</body>
</html>