<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($con, $_POST['username']);
    $mypassword = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT id FROM project.users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    $error = '';
    if ($count == 1) {
        $_SESSION['name'] = $myusername;
        $_SESSION['login_user'] = $myusername;

        header("location: admin.php");
    } else {
        $error = "Your Login Name or Password is invalid!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login Page</title>
</head>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Site of news</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index1.php">Home</a></li>
            </ul>
        </div>
    </nav>
</header>
<body >
<div align="center">
    <div style="width:300px; border: solid 2px #333333; " align="left">
        <div style="background-color:#333444; color:#ffff00; padding:5px;"><b>Login</b></div>
        <div style="margin:30px">
            <form action="" method="post">
                <label>UserName </label><input type="text" name="username" class="box"/><br/><br/>
                <label>Password </label><input type="password" name="password" class="box"/><br/><br/>
                <input type="submit" value=" Submit "/><br/>

                <p class="text-danger"><?php if ($_POST) echo $error ?></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
