<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">
    <title>eLearning - Free Educational Responsive Web Template</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
        include "nav.php";
        $strconn = mysqli_connect("localhost", "root", "", "project");
        if (!$strconn) {
            echo "Connection failed" . mysqli_connect_error();
        }
    ?>

    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Admin Login</h1>
                </div>
            </div>
        </div>
    </header>
    <br>
    <form action="" method="POST">
        <table border=0 align="center">
            <tr>
                <td><label>Enter your User Name:</label></td>
                <td><input type="text" class="form-control" name="id" placeholder="User Name" required></td>
            </tr>
            <tr>
                <td><label>Enter your Password:</label></td>
                <td><input type="password" class="form-control" name="pass" placeholder="Password" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button name="btnsubmit" class="btn btn-block">Submit</button></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
        if (isset($_POST['btnsubmit'])) {
            $name = $_POST['id'];
            $password = $_POST['pass'];
            $query = "SELECT * FROM admin_info WHERE UserName='$name' AND Password='$password'";
            $result = mysqli_query($strconn, $query);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                session_start();
                $_SESSION["username"] = $name;
                echo("<script>location.href = 'admin/index.php';</script>");
            } else {
                echo "<div class='alert alert-danger' role='alert'><center>Username or password is incorrect. Try again<center></div>";
            }
        }
    ?>
</body>
</html>
