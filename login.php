<?php 

include 'config.php';


session_start();
error_reporting(0);
$error = '<h3>Username Or Password is incorrect</h3>';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$_SESSION['id']=$id;
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user'] = $username;
		header("Location: index.php");
	} else {
		
		$_SESSION["error"] = $error;
		header("Location: login.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets\css\style1.css">
</head>
<body class="logback">
	<div>
	<img src="assets/img/logo2.png" class="imglog"><br>
	<div class="containers">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2.5rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" id="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn" id="btnsubmit">Login</button>
			<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>
			</div><br>
<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p></form></div></div>
</body>
</html>
